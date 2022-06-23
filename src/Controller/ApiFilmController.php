<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiFilmController extends AbstractController
{
    #[Route('/api/film', name: 'app_api_film')]
    public function index(FilmRepository $filmrep): Response
    {
        $films = $filmrep->findAll();
        return $this->json($films, 200, []);
    }
}
