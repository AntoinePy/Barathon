<?php
/**
 * Created by PhpStorm.
 * User: rydkey
 * Date: 13/12/16
 * Time: 11:29
 */

namespace Barathon\userSpaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class EventController extends Controller
{
    public function eventAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        return $this->render('BarathonuserSpaceBundle:userSpace:event.html.twig',array(
            'user' => $user,));
    }
}