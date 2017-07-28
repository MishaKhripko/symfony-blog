<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Forms\Authorization as FormAuthorization;
use BlogBundle\Entity\Forms\Register as FormRegister;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    public function authorizationAction(Request $request){
        $auth_form = $this->createForm(FormAuthorization::class);
        $regs_form = $this->createForm(FormRegister::class);
        $auth_form->handleRequest($request);

        return $this->render("::auhorization.html.twig", [
            'auth' => $auth_form->createView(),
            'reg' => $regs_form->createView(),
            'title' => 'Authorization',
        ]);
    }
}