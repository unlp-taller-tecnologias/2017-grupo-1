<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VisitanteController extends Controller
{
    /**
     * @Route("/visitantes", name="visitantes")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Visitantes:index.html.twig');
    }

    /**
     * @Route("/altaVisitante", name="altaVisitante")
     */
    public function alta(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Visitantes:alta.html.twig');
    }
}