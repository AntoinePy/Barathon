<?php
/**
 * Created by PhpStorm.
 * User: rydkey
 * Date: 13/12/16
 * Time: 11:29
 */

namespace Barathon\userSpaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BarController extends Controller
{
    public function barAction()
    {
        return $this->render('BarathonuserSpaceBundle:userSpace:bar.html.twig');
    }
}