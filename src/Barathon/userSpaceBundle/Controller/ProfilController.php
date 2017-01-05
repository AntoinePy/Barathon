<?php
/**
 * Created by PhpStorm.
 * User: rydkey
 * Date: 13/12/16
 * Time: 11:29
 */

namespace Barathon\userSpaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function profilAction()
    {
        return $this->render('BarathonuserSpaceBundle:userSpace:profile.html.twig');
    }
}