<?php
/**
 * Created by PhpStorm.
 * owner: rydkey
 * Date: 13/12/16
 * Time: 11:29
 */

namespace Barathon\ownerSpaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OwnerEventController extends Controller
{
    public function eventAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $this->render('BarathonownerSpaceBundle:ownerSpace:event.html.twig',array(
            'user' => $user,));
    }
}