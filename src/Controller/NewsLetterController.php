<?php

namespace App\Controller;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use http\Url;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsLetterController extends AbstractController
{
    /**
     * @Route("/admin/letter", name="news_letter")
     */
    public function index(Request $request)
    {

        $defaultData = ['message' => 'Type your message here'];
        $form = $this->createFormBuilder($defaultData)
            ->add('message', CKEditorType::class)
            ->add('envoyer à tous', SubmitType::class,[
                "attr"=>[
                    "formaction"=> "{{path('envois')}}"
                ]
            ])
            ->add('envoyer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();

        }
    }



}
