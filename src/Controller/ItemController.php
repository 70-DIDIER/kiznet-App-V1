<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends AbstractController{
    #[Route("/item/index", name: "app_item_index")]
    public function index():Response{
        return $this->render('item/index.html.twig');
    }
    #[Route("/didier", name: "app_didier")]
    public function didier(){
        return "bonjour didier";
    }
    
}
