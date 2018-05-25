<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    /**
     * @Route("/article/{slug}", name="article_show")
     */
    public function show(Article $article)
    {
        return new Response('Mdr');
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/articles/{page}", requirements={"page" = "\d+"}, name="article_list")
     *
     * @param int $page
     */
    public function list(int $page)
    {
        $maxArticles = 6;

        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository(Article::class)
            ->findPaginated($page, $maxArticles);

        $pagination = [
            'page' => $page,
            'nbPages' => ceil(\count($articles) / $maxArticles),
            'routeName' => 'article_list',
            'routeParam' => []
        ];

        return $this->render('articles_list.html.twig', [
            'pagination' => $pagination,
            'articles' => $articles
        ]);
    }
}
