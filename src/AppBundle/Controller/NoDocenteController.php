<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NoDocente;
use AppBundle\Entity\Observacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Componente;
use AppBundle\Entity\RegistroVacunacion;
use PHPExcel;
use PHPExcel_IOFactory;
use \Datetime;



/**
 * Nodocente controller.
 *
 * @Route("nodocente")
 */
class NoDocenteController extends Controller
{
    /**
     * Lists all noDocente entities.
     *
     * @Route("/", name="nodocente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noDocentes = $em->getRepository('AppBundle:NoDocente')->findAll();

        return $this->render('nodocente/index.html.twig', array(
            'noDocentes' => $noDocentes,
        ));
    }

    /**
     * Alta registro
     *
     * @Route("/{id}/altaRegistro", name="alta_registro")
     * @Method("GET")
     */
    public function altaRegistro(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $vacunas = $em->getRepository('AppBundle:Vacuna')->findAll();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("id"));
        return $this->render('registrovacunacion/altaRegistro.html.twig', array('visitante' => $visitante, 'vacunas' => $vacunas));
    }

    /**
     * Alta registro
     *
     * @Route("/altaRegistroAction", name="alta_registro_action")
     * @Method("POST")
     */
    public function altaRegistroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $registrovacunacion = new registrovacunacion();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get('idVisitante'));
        
        // El usuario que creo la publicacion, todavia no estan hechas la sesiones.
        $usuario = $em->getRepository('AppBundle:Usuario')->find(3);

        $registrovacunacion->setPropietario($visitante);
        $registrovacunacion->setCreador($usuario);
        $registrovacunacion->setActualizadoPor($usuario);
        if ($request->get('cumple')){
            $registrovacunacion->setCumple(TRUE);
        }else{
            $registrovacunacion->setCumple(FALSE);
        }
        

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechaCreacion = new DateTime(date("Y-m-d H:i:s"));
        $registrovacunacion->setFechaCreacion($fechaCreacion);

        // Creo las observaciones
        if ($request->get('observacionPublica') != '') {
          $observacionPublica = new Observacion();
          $observacionPublica->setContenido($request->get('observacionPublica'));
          $observacionPublica->setFechaCreacion($fechaCreacion);
          $observacionPublica->setCreadoPor($usuario);
          $observacionPublica->setRegistroVacunacion($registrovacunacion);
          $observacionPublica->setEsPrivada(FALSE);
          $registrovacunacion->addObservacion($observacionPublica);
          $em->persist($observacionPublica);
        }

        if ($request->get('observacionPrivada') != '') {
          $observacionPrivada = new Observacion();
          $observacionPrivada->setContenido($request->get('observacionPrivada'));
          $observacionPrivada->setFechaCreacion($fechaCreacion);
          $observacionPrivada->setCreadoPor($usuario);
          $observacionPrivada->setRegistroVacunacion($registrovacunacion);
          $observacionPrivada->setEsPrivada(TRUE);
          $registrovacunacion->addObservacion($observacionPrivada);
          $em->persist($observacionPrivada);
        }

        $cantVacunas = $request->get('cantVacunas');

        for ($i=1; $i <= $cantVacunas ; $i++) { 
            $componente = new Componente();
            
            if ($request->get('vencimiento'.$i) != ''){
                $fechaVencimiento = new DateTime($request->get('vencimiento'.$i));
                $componente->setVencimiento($fechaVencimiento);
            }
            
            if ($request->get('cumple'.$i)){
                $componente->setCumple(TRUE);
            }else{
                $componente->setCumple(FALSE);
            }
            
            $componente->setDosisRecibidas($request->get('dosisRecibidas'.$i));

            $vacuna = $em->getRepository('AppBundle:Vacuna')->find($request->get('idVacuna'.$i));
            $componente->setVacuna($vacuna);

            $componente->setRegistroVacunacion($registrovacunacion);
            $registrovacunacion->addComponente($componente);

            $em->persist($componente);
        } 
     
        $visitante->setRegistroVacunacion($registrovacunacion);

        $em->persist($visitante);
        $em->persist($registrovacunacion);
        try {
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'El registro se dio de alta exitosamente.');
            if ($visitante->getTipo() == 'Inscripto') {
                return $this->redirectToRoute("inscripto_index");
            }else{
                return $this->redirectToRoute("nodocente_index");
            }
            
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'No se ha podido dar de alta el registro. Detalle: ' . $e->getMessage());
        }    

        return $this->redirectToRoute("inscripto_index");
    }

    /**
     * Editar registro
     *
     * @Route("/{id}/editarRegistro", name="editar_registro")
     * @Method("GET")
     */
    public function editarRegistro(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("id"));
        $registrovacunacion = $visitante->getRegistroVacunacion();
        $componentes = $registrovacunacion->getComponentes();
        $vacunas = $em->getRepository('AppBundle:Vacuna')->findAll();
        $observaciones = $registrovacunacion->getObservaciones();

        return $this->render('registrovacunacion/editarRegistro.html.twig', 
            array('observaciones' => $observaciones, 'visitante' => $visitante, 'vacunas' => $vacunas, 'registrovacunacion' => $registrovacunacion, 'componentes'=> $componentes));
    }

    /**
     * Editar registro action
     *
     * @Route("/editarRegistroAction", name="editar_registro_action")
     * @Method("POST")
     */
    public function editarRegistroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("idVisitante"));
        $registrovacunacion = $visitante->getRegistroVacunacion($request->get("idRegistro"));

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechaActualizacion = new DateTime(date("Y-m-d"));
        $registrovacunacion->setFechaActualizacion($fechaActualizacion);
        if ($request->get('cumple')){
            $registrovacunacion->setCumple(TRUE);
        }else{
            $registrovacunacion->setCumple(FALSE);
        }

        // El usuario que creo la observacion, todavia no estan hechas la sesiones.
        $usuario = $em->getRepository('AppBundle:Usuario')->find(3);

        // Creo las observaciones
        if ($request->get('observacionPublica') != '') {
          $observacionPublica = new Observacion();
          $observacionPublica->setContenido($request->get('observacionPublica'));
          $observacionPublica->setFechaCreacion($fechaActualizacion);
          $observacionPublica->setCreadoPor($usuario);
          $observacionPublica->setRegistroVacunacion($registrovacunacion);
          $observacionPublica->setEsPrivada(FALSE);
          $registrovacunacion->addObservacion($observacionPublica);
          $em->persist($observacionPublica);
        }

        if ($request->get('observacionPrivada') != '') {
          $observacionPrivada = new Observacion();
          $observacionPrivada->setContenido($request->get('observacionPrivada'));
          $observacionPrivada->setFechaCreacion($fechaActualizacion);
          $observacionPrivada->setCreadoPor($usuario);
          $observacionPrivada->setRegistroVacunacion($registrovacunacion);
          $observacionPrivada->setEsPrivada(TRUE);
          $registrovacunacion->addObservacion($observacionPrivada);
          $em->persist($observacionPrivada);
        }

        $cantVacunas = $request->get('cantVacunas');

        for ($i=1; $i <= $cantVacunas ; $i++) {
            if ($request->get("idComponente".$i)){
                $componente = $em->getRepository('AppBundle:Componente')->find($request->get("idComponente".$i));
            }else{
                $componente = new Componente();
            }

            if ($request->get('vencimiento'.$i)){
                $fechaVencimiento = new DateTime($request->get('vencimiento'.$i));
                $componente->setVencimiento($fechaVencimiento);
            }

            if ($request->get('cumple'.$i)){
                $componente->setCumple(TRUE);
            }else{
                $componente->setCumple(FALSE);
            }
            
            $componente->setDosisRecibidas($request->get('dosisRecibidas'.$i));

            $vacuna = $em->getRepository('AppBundle:Vacuna')->find($request->get('idVacuna'.$i));
            $componente->setVacuna($vacuna);

            $componente->setRegistroVacunacion($registrovacunacion);
            $registrovacunacion->addComponente($componente);

            $em->persist($componente);                
        }

        $visitante->setRegistroVacunacion($registrovacunacion);
        $em->persist($visitante);
        $em->persist($registrovacunacion);
        try {
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'El registro se edito exitosamente.');
            if ($visitante->getTipo() == 'Inscripto') {
                return $this->redirectToRoute("inscripto_index");
            }else{
                return $this->redirectToRoute("nodocente_index");
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el registro. Detalle: ' . $e->getMessage());
        }    

        return $this->render('registrovacunacion/index.html.twig', array('registroVacunacion' => $registroVacunacion, 'vacunas' => $vacunas));
    }


    /**
     * Creates a new noDocente entity.
     *
     * @Route("/new", name="nodocente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noDocente = new Nodocente();
        $form = $this->createForm('AppBundle\Form\NoDocenteType', $noDocente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $noDocente->setBorrado(FALSE);
            $em->persist($noDocente);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El usuario se agregó al sistema correctamente.');
                return $this->redirectToRoute("nodocente_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar el usuario en el sistema. Detalle: ' . $e->getMessage());
            }
          }
          if ($form->isSubmitted() && !$form->isValid()) {
              $validator = $this->get('validator');
              $errors = $validator->validate($noDocente);
              foreach ($errors as $error) {
                  $this->get('session')->getFlashBag()->add('error', $error->getMessage());
              }
          }
          return $this->render('nodocente/new.html.twig', array(
                      'form' => $form->createView(),
          ));
    }

    /**
     * Show a No docente entity.
     *
     * @Route("/{id}/show", name="nodocente_show")
     * @Method("GET")
     */
    public function showAction(Request $request, NoDocente $noDocente) {
        $form = $this->createForm('AppBundle\Form\NoDocenteType', $noDocente);
        return $this->render('nodocente/show.html.twig', array(
                    'noDocente' => $noDocente,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing noDocente entity.
     *
     * @Route("/{id}/edit", name="nodocente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, NoDocente $noDocente)
    {
        $em = $this->getDoctrine()->getManager();
        $editForm = $this->createForm('AppBundle\Form\NoDocenteType', $noDocente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($noDocente);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El No docente se editó correctamente.');
                return $this->redirectToRoute("nodocente_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar al No docente. Detalle: ' . $e->getMessage());
            }
        }

        if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($editForm);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }

        return $this->render('nodocente/edit.html.twig', array(
            'noDocente' => $noDocente,
            'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a noDocente entity.
     *
     * @Route("/{id}/delete", name="nodocente_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, NoDocente $noDocente)
    {
      $em = $this->getDoctrine()->getManager();
      try {
          $noDocente->setBorrado(TRUE);
          $em->flush();
          return new JsonResponse(array('success' => true, 'message' => 'El no docente fue eliminado con éxito'));
      } catch (\Exception $e) {
          return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el no docente del sistema'));
      }
    }

}
