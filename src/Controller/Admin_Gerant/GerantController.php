<?php

namespace App\Controller\Admin_Gerant;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController; 
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\SuiteClassiqueGerant;
use App\Entity\SuitePanoramiqueGerant;
use App\Entity\SuitePresidentielleGerant;
use App\Entity\EstablismentGerant;


class GerantController extends AbstractDashboardController
{
    #[Route('/adminGerant', name: 'adminGerant')]
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(EstablismentGerantCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hypnos Projet');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Establisment', 'fas fa-map-marker-alt', EstablismentGerant::class);
        yield MenuItem::linkToCrud('Suite Classique', 'fa fa-tags', SuiteClassiqueGerant::class);
        yield MenuItem::linkToCrud('Suite Panoramique', 'fa fa-tags', SuitePanoramiqueGerant::class);
        yield MenuItem::linkToCrud('Suite Presidentielle', 'fa fa-tags', SuitePresidentielleGerant::class);
    }
}
