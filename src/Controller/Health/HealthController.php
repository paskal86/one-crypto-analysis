<?php

namespace App\Controller\Health;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController
{
    #[Route('/ping', methods: [Request::METHOD_GET])]
    public function ping(): Response
    {
        return new Response("pong", 200, ['Content-Type' => 'text/plain']);
    }
}