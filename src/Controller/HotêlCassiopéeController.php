<?php

namespace App\Controller;

use App\Entity\SuiteClassiqueGerant;
use App\Form\SuiteClassiqueType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SuiteClassiqueGerantRepository ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\src\Controller\HôtelCassiopéeController;

class HotêlCassiopéeController extends AbstractController

/**
 * Les fonctions pour les suites classiques
 * param SuiteClassiqueGerantRepository $repository
 * param PaginatorInterface $paginator
 * param Request $request
 * return Response
 */
{
    #[Route('/hotelcassiopee', name: 'hotelcassiopee', methods: ['GET'])]
    public function index(SuiteClassiqueGerantRepository  $repository, PaginatorInterface $paginator,
    Request $request): Response
    {
        $suitesclassiques = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );


        return $this->render('hotel_cassiopée/index.html.twig', [
            'suitesclassiques' =>$suitesclassiques
        ]);
    }

    #[Route('/suitesclassiques/nouveau', 'suitesclassiques.new', methods: ['GET','POST'])]
    public function new() : Response
    {
        $suitesclassiques = new SuiteClassiqueGerant();
        $form = $this->createForm(SuiteClassiqueType::class, $suitesclassiques);
        return $this->render('hotel_cassiopée/new.html.twig', [
            'form' =>$form->CreateView()
        ]);
    }
}
