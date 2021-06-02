<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="app_profil_profil")
     */
    public function profil(): Response
    {
        return $this->render('profil/profil.html.twig', [
            'info' => 'info',
        ]);
    }
}
