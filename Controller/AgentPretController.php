<?php

namespace BibliothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PretController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BibliothequeBundle:Default:index.html.twig', array('name' => $name));
    }
}

?>