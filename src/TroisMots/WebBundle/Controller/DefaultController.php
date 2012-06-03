<?php

namespace TroisMots\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TroisMotsWebBundle:Default:index.html.twig');
    }
}
