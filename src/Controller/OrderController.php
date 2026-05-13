<?php

namespace App\Controller;

use App\Service\Order\OrderManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrderController extends AbstractController
{
    #[Route('/order')]
    public function index(OrderManager $manager): Response
    {
        $result = $manager->process(500);
        
        return $this->json($result);
    }
}
