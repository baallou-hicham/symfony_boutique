<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Proxies\__CG__\App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $superadmin = ["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_EDITOR", "ROLE_USER"];
        $admin = ["ROLE_ADMIN", "ROLE_EDITOR", "ROLE_USER"];
        $editor = ["ROLE_EDITOR", "ROLE_USER"];
        $user = [];

        $user = $userRepository->find(2);
        $user->setRoles($superadmin);
        $entityManager->flush();

        return $this->render('home_page/index.html.twig', []);
    }

    #[Route('/super-admin/dashboard', name:'app_super_admin_dashboard')]
    public function dashboard(): Response
    {
        dd('coucou super admin');
        return $this->render('home_page/super_admin_dashboard.html.twig', []);
    }

    #[Route('/user/dashboard', name:'app_user_dashboard')]
    public function userDashboard(): Response
    {
        dd('coucou user');
        return $this->render('home_page/user_dashboard.html.twig', []);
    }
}
