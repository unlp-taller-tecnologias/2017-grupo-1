<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuarios:index.html.twig');
    }

    /**
     * @Route("/altaUsuario", name="altaUsuario")
     */
    public function alta(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuarios:alta.html.twig');
    }
}