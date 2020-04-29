<?php

namespace App\Controller;

use App\service\Capitalize;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/article/")
 */
#pour préfixer les noms dans l'url
 class ArticleController extends AbstractController
{
    protected $articles;
    protected $capitalize;

    public function __construct(){
        $this->capitalize = new Capitalize();
        $this->articles = [
            [ "libelle" =>  $this->capitalize->firstUpper("ordiNaTeur"),
                "prix" => 555,
                "marque" => $this->capitalize->firstUpper("saMsung")
            ],
            [ "libelle" => $this->capitalize->firstUpper("voiture"),
                "prix" => 575,
                "marque" => $this->capitalize->firstUpper("phillLps")
            ],
        ];
    }
    /**
     * @Route("/liste", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', ["liste_articles" => $this->articles]);
    }
    /**
     * @Route("/desc/{id}", name="description")
     */

    public function showArticle($id){
        $article =
            ["libelle" =>  $this->capitalize->firstUpper("ordiNaTeur"),
            "prix" => 555,
            "marque" => $this->capitalize->firstUpper("saMsung")

        ];
        return $this->render("article/show.html.twig", ["art" => $article, "action" => $id]);
    }
}
#Ce qui se trouve dans les accolades du
# path est ce que l'on mets dans le href de la vue qu'on appelle