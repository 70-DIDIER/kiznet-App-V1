<?php

namespace App\Controller;

use App\Entity\Item;
use App\Entity\Facture;
use App\Form\ItemType;
use App\Repository\ItemRepository;
use App\Repository\FactureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemController extends AbstractController
{
    #[Route('/facture/{factureId}/item/index', name: "app_item_index")]
    public function index(ItemRepository $repository, int $factureId): Response
    {
        $items = $repository->findBy(['facture' => $factureId]);
        return $this->render('item/index.html.twig', [
            'items' => $items,
            'factureId' => $factureId,
        ]);
    }

    #[Route('/item/create/{factureId}', name: "app_item_create")]
    public function create(Request $request, EntityManagerInterface $em, FactureRepository $factureRepository, int $factureId): Response {
        $item = new Item();

        // Récupère la facture à associer
        $facture = $factureRepository->find($factureId);
        if (!$facture) {
            throw $this->createNotFoundException("Facture non trouvée");
        }
        $item->setFacture($facture);

        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($item);
            $em->flush();
            return $this->redirectToRoute('app_item_index', ['factureId' => $factureId]);
        }
        return $this->render('item/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/item/update/{id}', name: "app_item_update")]
    public function update(Item $item, Request $request, EntityManagerInterface $em): Response {
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // La relation facture ne change généralement pas lors de l'update
            $em->flush();
            // Récupère l'id de la facture associée pour la redirection
            $factureId = $item->getFacture()->getId();
            return $this->redirectToRoute('app_item_index', ['factureId' => $factureId]);
        }

        return $this->render('item/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/item/delete/{id}', name: "app_item_delete")]
    public function delete(Item $item, EntityManagerInterface $em): Response {
        // Récupère l'id de la facture associée avant la suppression
        $factureId = $item->getFacture()->getId();

        $em->remove($item);
        $em->flush();

        return $this->redirectToRoute('app_item_index', ['factureId' => $factureId]);
    }
}
