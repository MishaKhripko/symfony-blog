<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

    public function homepageAction(){
        return $this->render("::base.html.twig");
    }
}