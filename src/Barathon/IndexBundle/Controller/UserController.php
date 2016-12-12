<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/12/12
 * Time: 9:30
 */



namespace Barathon\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


// à ajouter pour utiliser "Method" get post put delete dans les routes
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class UserController extends Controller

{
    /**
     * @Route("/connexion",name="user.connexion")
     * @Method({"GET"})
     */
    public function connexionAction()
    {
        return $this->render('BarathonIndexBundle:User:connexion.html.twig');
    }
}