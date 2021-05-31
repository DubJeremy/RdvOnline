<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home_index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/registration", name="app_home_new", methods="GET|POST")
    */
public function createUser(EntityManagerInterface $em, Security $security, Request $request)
{
        $user = new User();
        $form = $this->createForm(CreateEntityType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $security->getUser();
            $entity->setAuthor($user);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Your __entity__ has been created successfully.');

            return $this->redirectToRoute('app_home_index');
        }

        return $this->render('home/create.html.twig', [
            'form' => $form->createView(),
        ]);
}
}
