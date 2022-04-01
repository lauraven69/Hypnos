<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Establishment;
use App\Entity\Gerant;
use App\Entity\Property;
use App\Entity\Suite;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(EstablishmentCrudController::class)->generateUrl();  

                 return $this->redirect($url);
        }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hypnos Projet');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'Homepage');
        yield MenuItem::linkToCrud('Establishment', 'fas fa-map-marker-alt', Establishment::class);
        yield MenuItem::linkToCrud('Gerant', 'fas fa-comments', Gerant::class);
        yield MenuItem::linkToCrud('Property', 'fas fa-comments', Property::class);
        yield MenuItem::linkToCrud('Suite', 'fas fa-comments', Suite::class);
        yield MenuItem::linkToCrud('User', 'fas fa-comments', User::class);

    }
}
