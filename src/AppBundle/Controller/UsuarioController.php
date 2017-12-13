<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Usuario controller.
 *
 * @Route("usuario")
 */
class UsuarioController extends Controller {

    /**
     * Lists all usuario entities.
     *
     * @Route("/", name="usuario_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('AppBundle:Usuario')->findAll();

        return $this->render('usuario/index.html.twig', array(
                    'usuarios' => $usuarios,
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{id}/show", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(Usuario $usuario) {

        return $this->render('usuario/show.html.twig', array(
                    'usuario' => $usuario,
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        //$em = $this->getDoctrine()->getManager();
        $entity = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $entity);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
        }
        return $this->render('usuario/new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
