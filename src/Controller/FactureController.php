<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Form\FactureType;
use App\Repository\FactureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class FactureController extends AbstractController
{
    #[Route('/facture', name:'app_facture')]
    public function index(FactureRepository $repository): Response
    {
        $factures = $repository->findAll();
        return $this->render('facture/index.html.twig', [
            'factures' => $factures,
        ]);
    }

    #[Route('/facture/create', name: 'app_facture_create')]
    public function create(Request $request, EntityManagerInterface $em): Response{
        $facture = new Facture();
        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($facture);
            $em->flush();
            return $this->redirectToRoute('app_facture');
        }
        return $this->render('facture/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/facture/{id}/update', name: 'app_facture_update')]
    public function update(Facture $facture, Request $request, EntityManagerInterface $em): Response{
        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_facture');
        }
        return $this->render('facture/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/facture/{id}/delete', name: 'app_facture_delete')]
    public function delete(Facture $facture, EntityManagerInterface $em): Response{
        $em->remove($facture);
        $em->flush();
        return $this->redirectToRoute('app_facture');
    }

}
