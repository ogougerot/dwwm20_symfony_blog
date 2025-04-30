<?php

namespace App\Controller\Admin\Category;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatheroyController extends AbstractController
{
    #[Route('/admin/category/catheroy', name: 'app_admin_category_catheroy')]
    public function index(): Response
    {
        return $this->render('admin/category/catheroy/index.html.twig', [
            'controller_name' => 'CatheroyController',
        ]);
    }
}
