<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    #[Route('/équipe', name: 'app_team')]
    public function index(TeamRepository $teamRepository): Response
    {
        $teams = $teamRepository->findAll();
        // dd($teams);

        return $this->render('team/index.html.twig', [
            'teams' => $teams,
        ]);
    }
}
