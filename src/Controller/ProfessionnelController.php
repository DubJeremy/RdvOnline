<?php

namespace App\Controller;

use App\Entity\ProCategorie;
use App\Repository\JobRepository;
use App\Repository\ProCategorieRepository;
use App\Repository\ProfessionelRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfessionnelController extends AbstractController
{
    /**
     * @Route("/professionnel", name="app_professionnel_index")
     */
    public function index(ProfessionelRepository $prorepository, JobRepository $jobrepository): Response
    {
        $pros = $prorepository->findAll();
        $jobs = $jobrepository->findAll(); 

        return $this->render('professionnel/professionnel.html.twig', [
            'pros' => $pros, 'jobs' => $jobs,
        ]);
    }
}
