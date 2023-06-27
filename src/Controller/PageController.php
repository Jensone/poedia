<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'Home Page',
        ]);
    }
    
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'About Page',
        ]);
    }
}
