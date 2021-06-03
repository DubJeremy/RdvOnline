<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use App\Entity\User;
use App\Entity\ProCategorie;
use App\Entity\Professionel;
use App\Controller\Admin\UserCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
// ...

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());

        if ('jane' === $this->getUser()->getUsername()) {
            return $this->redirect('...');
        }

        return $this->render('some/path/my-dashboard.html.twig');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fas fa-bars');
        yield MenuItem::linkToCrud('Users', 'fas fa-angle-right', User::class);
        yield MenuItem::linkToCrud('Professionnel', 'fas fa-angle-right', Professionel::class);
        yield MenuItem::linkToCrud('Job', 'fas fa-angle-right', Job::class);
        yield MenuItem::linkToCrud('ProCategorie', 'fas fa-angle-right', ProCategorie::class);
        yield MenuItem::linkToRoute('Home', 'fa fa-home', "app_home_index");

    }
}