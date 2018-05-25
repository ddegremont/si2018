<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Article;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index", methods="GET")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);
        $articles = $repo->findCount(3);
        /** @var Article[] $articles */
        return $this->render('index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/contact", name="contact", methods="GET|POST")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}
