<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{

    
    #[Route('/', name: 'main_home')]
         
    public function home() {

        
        return $this->render(view: 'main/home.html.twig');
    }

    #[Route('/about-us', name: 'main_about_us')]
         
    public function about() {

        
        return $this->render(view: 'main/about_us.html.twig');
    }

    
}