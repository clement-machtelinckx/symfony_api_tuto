<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class AdminController extends AbstractController 
{

    #[Route('/admin')]
    public function dashboard(): Response
    {

        return $this->render('admin/dashboard.html.twig');
    }

}