<?php

namespace App\Controller;

use App\Repository\ShowsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingController extends AbstractController
{
    #[Route('/', name: 'app_landing')]
    public function index(ShowsRepository $showsRepository, Request $request): Response
    {
        $shows = $showsRepository->findAll();

        return $this->render('landing/index.html.twig', [
            'controller_name' => 'LandingController',
            'shows' => $shows,
        ]);
    }
}
