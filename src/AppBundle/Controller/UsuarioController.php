<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Usuario controller.
 *
 * @Route("usuario")
 */
class UsuarioController extends Controller {

    /**
     * Listar los usuarios del sistema
     *
     * @Route("/", name="usuario_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllOrderedByUsername();
        return $this->render('usuario/index.html.twig', array(
                    'usuarios' => $usuarios,
        ));
    }

    /**
     * Crear nuevo usuaro del sistema
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entity = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $entity);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($entity);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El usuario se agregó al sistema correctamente.');
                return $this->redirectToRoute("usuario_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar el usuario en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($entity);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('usuario/new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * Editar usuario del sistema
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuario $usuario) {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $form->add('password', PasswordType::class, array(
                    'required' => false,
                    'data' => $usuario->getPassword(),
                ))
                ->add('passwordConfirm', PasswordType::class, array(
                    'mapped' => false,
                    'required' => false,
                    'data' => $usuario->getPassword(),
        ));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($usuario);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El usuario se editó correctamente.');
                return $this->redirectToRoute("usuario_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el usuario. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($usuario);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('usuario/edit.html.twig', array(
                    'form' => $form->createView(),
                    'entity' => $usuario
        ));
    }

}
