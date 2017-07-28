<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{

    public function homepageAction(){
        return $this->render("::base.html.twig");
    }
    public function viewBlogAction($id){
        var_dump($id);
        $em = $this->getDoctrine();
        $blogRepositories = $em->getRepository("BlogBundle:Blog");

        $blog = $blogRepositories->find($id);
        //var_dump($blog);

        return $this->render("::blog.html.twig", ['post' => $blog]);
    }
}