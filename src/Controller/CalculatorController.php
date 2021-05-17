<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CalculatorType;
use App\Calculator\Calculator;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator", name="calculator")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(CalculatorType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $operator = "App\Calculator\\" . $formData['Operator'];

            $calculator = new Calculator(new $operator());
            $result = $calculator->calculate($formData['First_Number'], $formData['Second_Number']);
        }

        return $this->render('calculator/index.html.twig', [
            'form' => $form->createView(),
            'result' => $result ?? null,
        ]);
    }
}
