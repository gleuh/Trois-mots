<?php

namespace TroisMots\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends Controller
{
    /**
     * @Route("/{id}", requirements={"id" = "\d+"})
     */ 
    public function indexAction($id)
    {
	$user     = $this->getDoctrine()->getRepository('TroisMotsWebBundle:User')->find($id);
	$opinions = $user->getOpinionsReceived();

	return $this->render('TroisMotsWebBundle:Profile:index.html.twig', array(
            'user'     => $user,
	    'opinions' => $opinions,
	));
    }
}
