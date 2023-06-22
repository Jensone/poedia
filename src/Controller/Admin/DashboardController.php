<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Edition;
use App\Entity\Category;
use App\Entity\Client;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="images/core/poedia-icon.svg" alt="Poedia" width="50"> Poedia Admin')
            ->setFaviconPath('images/core/poedia-icon.svg');
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/custom.css');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::section('La bibliothèque');
        yield MenuItem::linkToCrud('Les auteurs', 'fas fa-pen', Author::class);
        yield MenuItem::linkToCrud('Les catégories', 'fas fa-tag', Category::class);
        yield MenuItem::linkToCrud('Les livres', 'fas fa-book', Book::class);
        yield MenuItem::linkToCrud('Maisons d\'édition', 'fas fa-house-signal', Edition::class);
        yield MenuItem::section('Les utilisateurs');
        yield MenuItem::linkToCrud('Les emprunts', 'fas fa-cart-shopping', Order::class);
        yield MenuItem::linkToCrud('Les clients', 'fas fa-users', Client::class);
        yield MenuItem::section('');
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'homepage');
        yield MenuItem::section('');    }
}
