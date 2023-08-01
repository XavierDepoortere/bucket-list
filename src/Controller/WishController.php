<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    #[Route('/wishes', name: 'wish_list')]
    public function wish(): Response
    {
        return $this->render('wish/list.html.twig', [
            
        ]);
    }

    #[Route('/wishes/details', name: 'wish_details',requirements: ['id' => '\d+'])]
    public function details(int $id): Response
    {
        return $this->render('wish/details.html.twig', [
            
        ]);
    }
}
