<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    
    /**
     * @Route("/contact", name="contact")
     *
     */
    public function index(): Response
    {
        $contact=$this->repository->findAllVisible();
        $form=$this->createForm(ContactType::class);
        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form
        ]);
    }
}
