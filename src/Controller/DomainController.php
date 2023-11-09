<?php

namespace App\Controller;

use App\Repository\DomainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DomainController extends AbstractController
{
    #[Route('/domaines', name: 'app_domain')]
    public function index(DomainRepository $domainRepository): Response
    {
        $domains = $domainRepository->findAll();
        // dd($domains);

        return $this->render('domain/index.html.twig', [
            'domains' => $domains,
        ]);
    }
}
