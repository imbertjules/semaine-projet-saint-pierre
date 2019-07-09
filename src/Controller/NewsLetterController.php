<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsLetterController extends AbstractController
{
    /**
     * @Route("/admin/letter", name="news_letter")
     */
    public function index()
    {
        return $this->render('news_letter/index.html.twig', [
            'controller_name' => 'NewsLetterController',
        ]);
    }
}
