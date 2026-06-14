<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;

final class LoginController extends AbstractController
{
    #[Route('/api/login', name: 'api_login')]
    public function index(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        return $this->json([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'username' => $user->getUsername(),
            'roles' => $user->getRoles(),
        ]);
    }

    #[Route('/login/link', name: 'login_check')]
    public function loginCheck(): Response
    {
        return $this->json([
            'message' => 'Login successful',
        ]);
    }

    #[Route('/login/link/generate', name: 'login_generate')]
    public function _generateLoginLink(LoginLinkHandlerInterface $loginLinkHandler): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $loginLinkDetails = $loginLinkHandler->createLoginLink($user);
        dd($loginLinkDetails->getUrl());
        // return $this->json([
        //     'login_link' => $loginLinkDetails->getUrl(),
        //     'expires_at' => $loginLinkDetails->getExpiresAt()->format('Y-m-d H:i:s'),
        // ]);
    }
}
