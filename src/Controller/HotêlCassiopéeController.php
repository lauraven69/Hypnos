<?php

namespace App\Controller;

use App\Entity\SuiteClassiqueGerant;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SuiteClassiqueGerantRepository ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotêlCassiopéeController extends AbstractController
{
    #[Route('/hotelcassiopee', name: 'hotelcassiopee')]
    public function index(SuiteClassiqueGerantRepository  $repository, PaginatorInterface $paginator,
    Request $request): Response
    {
        $suitesclassiques = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );


        return $this->render('hotêl_cassiopée/index.html.twig', [
            'suitesclassiques' =>$suitesclassiques
        ]);
    }
}
