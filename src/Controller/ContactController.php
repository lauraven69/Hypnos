<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    
    /**
     * @Route("/contact", name="contact")
     *
     */
    public function index(Request $request):Response
    
    {
       
        $form=$this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $data=$form->getData();
            $email=$data['email'];
        
            return $this->render('contact/succes.html.twig', [
                'email' => $email
            ]);
        }else{
            return $this->renderForm('contact/index.html.twig', [
                'controller_name' => 'ContactController',
                'formulaire' => $form

            ]);
        }
    }
}
