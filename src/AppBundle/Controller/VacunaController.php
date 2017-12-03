<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VacunaController extends Controller
{
    /**
     * @Route("/vacuna", name="vacuna")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/index.html.twig');
    }

	/**
     * @Route("/altaVacuna", name="altaVacuna")
     */
    public function altaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/alta.html.twig');
    }

        /**
     * @Route("/modificarVacuna", name="modificarVacuna")
     */
    public function modificarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/modificar.html.twig');
    }
}
