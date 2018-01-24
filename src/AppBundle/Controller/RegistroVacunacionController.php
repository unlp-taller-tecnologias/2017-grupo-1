<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroVacunacion;
use AppBundle\Entity\Observacion;
use AppBundle\Entity\Visitante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Componente;
use PHPExcel;
use PHPExcel_IOFactory;
use \Datetime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Registrovacunacion controller.
 *
 * @Route("registrovacunacion")
 */
class RegistroVacunacionController extends Controller {

    /**
     * Alta registro
     *
     * @Route("/{id}/altaRegistro", name="alta_registro")
     * @Method("GET")
     */
    public function altaRegistro(Request $request, Visitante $visitante) {
        $em = $this->getDoctrine()->getManager();
        $vacunas_obligatorias = $em->getRepository('AppBundle:Vacuna')->findByEsObligatoria(TRUE);
        $vacunas_optativas = $em->getRepository('AppBundle:Vacuna')->findByEsObligatoria(FALSE);
        return $this->render('registrovacunacion/altaRegistro.html.twig', array(
                    'visitante' => $visitante,
                    'vacunas_optativas' => $vacunas_optativas,
                    'vacunas_obligatorias' => $vacunas_obligatorias,
        ));
    }

    /**
     * Alta registro
     *
     * @Route("/{id}/altaRegistroAction", name="alta_registro_action")
     * @Method("POST")
     */
    public function altaRegistroAction(Request $request, Visitante $visitante) {
        $em = $this->getDoctrine()->getManager();
        $registrovacunacion = new registrovacunacion();
        //$visitante = $em->getRepository('AppBundle:Visitante')->find($request->get('idVisitante'));
        // El usuario que creo la observacion, todavia no estan hechas la sesiones.
        //$idIsuario = $this->getUser()->getId();
        //$usuario = $em->getRepository('AppBundle:Usuario')->find($idIsuario);
        $usuario = $this->getUser();
        $registrovacunacion->setPropietario($visitante);
        $registrovacunacion->setCreador($usuario);
        $registrovacunacion->setActualizadoPor($usuario);
        $registrovacunacion->setCumple($request->get('cumple') ? TRUE : FALSE);
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
        for ($i = 1; $i <= $cantVacunas; $i++) {
            $componente = new Componente();
            if ($request->get('vencimiento' . $i) != '') {
                $fechaVencimiento = new DateTime($request->get('vencimiento' . $i));
                $componente->setVencimiento($fechaVencimiento);
            }
            if ($request->get('cumple' . $i)) {
                $componente->setCumple(TRUE);
            } else {
                $componente->setCumple(FALSE);
            }
            //$componente->setDosisRecibidas($request->get('dosisRecibidas'.$i));
            $componente->setDosisRecibidas($request->get('dosisRecibidas' . $i) == '' ? NULL : $request->get('dosisRecibidas' . $i));
            $componente->setComentario($request->get('comentario' . $i));
            $vacuna = $em->getRepository('AppBundle:Vacuna')->find($request->get('idVacuna' . $i));
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
            } else {
                return $this->redirectToRoute("nodocente_index");
            }
        } catch (\Exception $e) {
            //echo $e->getMessage();
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
    public function editarRegistro(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("id"));
        $registrovacunacion = $visitante->getRegistroVacunacion();
        $componentes = $registrovacunacion->getComponentes();
        $vacunas = $em->getRepository('AppBundle:Vacuna')->findAll();
        $observaciones = $registrovacunacion->getObservaciones();

        return $this->render('registrovacunacion/editarRegistro.html.twig', array('observaciones' => $observaciones, 'visitante' => $visitante, 'vacunas' => $vacunas, 'registrovacunacion' => $registrovacunacion, 'componentes' => $componentes));
    }

    /**
     * Editar registro action
     *
     * @Route("/editarRegistroAction", name="editar_registro_action")
     * @Method("POST")
     */
    public function editarRegistroAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("idVisitante"));
        $registrovacunacion = $visitante->getRegistroVacunacion($request->get("idRegistro"));

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechaActualizacion = new DateTime(date("Y-m-d"));
        $registrovacunacion->setFechaActualizacion($fechaActualizacion);
        if ($request->get('cumple')) {
            $registrovacunacion->setCumple(TRUE);
        } else {
            $registrovacunacion->setCumple(FALSE);
        }

        // El usuario que creo la observacion, todavia no estan hechas la sesiones.
        $idIsuario = $this->getUser()->getId();
        $usuario = $em->getRepository('AppBundle:Usuario')->find($idIsuario);

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

        for ($i = 1; $i <= $cantVacunas; $i++) {
            if ($request->get("idComponente" . $i)) {
                $componente = $em->getRepository('AppBundle:Componente')->find($request->get("idComponente" . $i));
            } else {
                $componente = new Componente();
            }

            if ($request->get('vencimiento' . $i)) {
                $fechaVencimiento = new DateTime($request->get('vencimiento' . $i));
                $componente->setVencimiento($fechaVencimiento);
            }

            if ($request->get('cumple' . $i)) {
                $componente->setCumple(TRUE);
            } else {
                $componente->setCumple(FALSE);
            }

            $componente->setDosisRecibidas($request->get('dosisRecibidas' . $i));

            $componente->setComentario($request->get('comentario' . $i));

            $vacuna = $em->getRepository('AppBundle:Vacuna')->find($request->get('idVacuna' . $i));
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
                return $this->redirectToRoute("editar_registro", array('id' => $request->get("idVisitante")));
            } else {
                return $this->redirectToRoute("nodocente_index", array('id' => $request->get("idVisitante")));
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el registro. Detalle: ' . $e->getMessage());
        }

        return $this->render('registrovacunacion/index.html.twig', array('registroVacunacion' => $registroVacunacion, 'vacunas' => $vacunas));
    }

    /**
     * Lists all registroVacunacion entities.
     *
     * @Route("/{id}/eliminarObservacion", name="eliminar_observacion")
     * @Method("GET")
     */
    public function deleteObservacionAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $idObservacion = $request->get("id");
        $observacion = $em->getRepository('AppBundle:Observacion')->find($idObservacion);
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("idVisitante"));
        $em->remove($observacion);
        try {
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La observacion se elimino exitosamente.');
            if ($visitante->getTipo() == 'Inscripto') {
                return $this->redirectToRoute("editar_registro", array('id' => $request->get("idVisitante")));
            } else {
                return $this->redirectToRoute("nodocente_index", array('id' => $request->get("idVisitante")));
            }
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el no docente del sistema'));
        }
    }

}
