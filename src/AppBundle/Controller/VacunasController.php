<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VacunasController extends Controller
{
    /**
     * @Route("/vacunas", name="vacunas")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:vacunas:index.html.twig');
    }

	/**
     * @Route("/altaVacuna", name="altaVacuna")
     */
    public function altaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:vacunas:alta.html.twig');
    }
}
