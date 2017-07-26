<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function register(){
        return $this->render("::base.html.twig");
    }
}