<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Forms\Authorization;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AuthorizationController extends Controller
{
    public function formAuthorizationAction(){
        $objForm = new Authorization();
        $objForm->setLogin('login');
        $objForm->setPswd('pswd');

        $form = $this->createFormBuilder($objForm)
            ->add('login', TextType::class)
            ->add('pswd', TextType::class)
            ->add('save', SubmitType::class, ['attr' => ['name' => 'authorization']])
            ->getForm();
        return $form;
    }

}