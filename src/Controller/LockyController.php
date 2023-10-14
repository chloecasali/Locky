<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LockyController extends AbstractController
{
    #[Route('/locky', name: 'app_locky')]
    public function index(): Response
    {
        return $this->render('locky/index.html.twig', [
            'controller_name' => 'LockyController',
        ]);
    }
}
