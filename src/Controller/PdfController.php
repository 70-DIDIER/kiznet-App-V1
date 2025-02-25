<?php
namespace App\Controller;

use App\Repository\FactureRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\ItemRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PdfController extends AbstractController
{
    #[Route('/pdf/facture/{factureId}', name: 'app_facture_pdf')]
    public function facturePdf(ItemRepository $itemRepository, FactureRepository $factureRepository, int $factureId): Response
    {
        // Récupérer la facture et les items associés
        $facture = $factureRepository->find($factureId);
        if (!$facture) {
            throw $this->createNotFoundException("Facture non trouvée");
        }
        $items = $itemRepository->findBy(['facture' => $factureId]);

        // Rendre la vue Twig en HTML
        $html = $this->renderView('pdf/index.html.twig', [
            'facture' => $facture,
            'items' => $items,
        ]);

        // Configurez Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true); // Permet de charger des images distantes
        $dompdf = new Dompdf($options);

        // Chargez le code HTML généré
        $dompdf->loadHtml($html);

        // Définir le format de papier et l'orientation
        $dompdf->setPaper('A4', 'portrait');

        // Générer le PDF
        $dompdf->render();

        // Renvoie le PDF dans la réponse HTTP
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="facture.pdf"',
        ]);
    }
}