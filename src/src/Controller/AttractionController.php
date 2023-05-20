<?php

namespace App\Controller;

use App\Entity\Attraction;
use App\Repository\AttractionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttractionController extends AbstractController
{
    #[Route('/attraction', name: 'app_attraction')]
    public function index(AttractionRepository $attractionRepository): Response
    {
        return $this->render('attraction/index.html.twig', [
            'attractions' => $attractionRepository->findAll(),
        ]);
    }

    #[Route('/attraction/{id}', name: 'app_attraction_view')]
    public function view(Attraction $attraction): Response
    {
        return $this->render('attraction/view.html.twig', [
            'attraction' => $attraction,
        ]);
    }
}
