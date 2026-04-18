<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
         $url = $this->container->get(AdminUrlGenerator::class)
        ->setController(QuizCrudController::class) 
        ->generateUrl();

    return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Quizz');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkTo(QuizCrudController::class, 'Quiz', 'fas fa-list');
        yield MenuItem::linkTo(QuestionCrudController::class, 'Questions', 'fas fa-list');
        yield MenuItem::linkTo(AnswerCrudController::class, 'Answers', 'fas fa-list');
        yield MenuItem::linkTo(UserCrudController::class, 'User', 'fas fa-list');
    }
}
