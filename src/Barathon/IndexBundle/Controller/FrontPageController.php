<?php
/**
 * Created by PhpStorm.
 * User: rydkey
 * Date: 06/12/16
 * Time: 14:13
 */

namespace Barathon\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontPageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BarathonIndexBundle:Index:index.html.twig');
    }
}
