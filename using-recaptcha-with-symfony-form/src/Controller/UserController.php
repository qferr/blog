<?php
namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function register(Request $request)
    {
        $form = $this->createForm(RegistrationType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'The form is valid.');
        } else {
            $this->addFlash('error', 'The form is invalid.');
        }

        return $this->render('registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}