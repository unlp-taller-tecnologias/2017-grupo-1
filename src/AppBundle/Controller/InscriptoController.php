<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscripto;
use AppBundle\Entity\Componente;
use AppBundle\Entity\RegistroVacunacion;
use AppBundle\Entity\NoCargado;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PHPExcel;
use PHPExcel_IOFactory;
use \Datetime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Inscripto controller.
 *
 * @Route("inscripto")
 */
class InscriptoController extends Controller
{

    /**
     * Lists all inscripto entities.
     *
     * @Route("/", name="inscripto_index")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {  
        $anoActual = date("Y");
        if ($request->get('ano')){
            $anoIngreso = $request->get('ano');
        }else{
            $anoIngreso = $anoActual;
        }

        $em = $this->getDoctrine()->getManager();

        $inscriptos = $em->getRepository('AppBundle:Inscripto')->findAllOrderedByApellido($anoIngreso);

        return $this->render('inscripto/index.html.twig', array(
            'inscriptos' => $inscriptos,
            'hastaAno' => ($anoActual+1),
            'anoIngreso'=>$anoIngreso,
        ));
    }

    /**
     * @Route("/altaExcelView", name="altaExcelView")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function altaExcel(Request $request)
    {
        return $this->render('inscripto/altaExcel.html.twig');
    }

    /**
     * Lists all noCargados entities.
     *
     * @Route("/noCargados", name="noCargados")
     * @Method("GET")
     */
    public function noCargadosAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noCargados = $em->getRepository('AppBundle:NoCargado')->findAll();

        return $this->render('inscripto/noCargados.html.twig', array(
            'noCargados' => $noCargados,
        ));
    }

    /**
     * Creates a new inscripto entity.
     *
     * @Route("/new", name="inscripto_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Inscripto();
        $form = $this->createForm('AppBundle\Form\InscriptoType', $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($entity);
            try {
                $entity->setBorrado(FALSE);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El inscripto se agregó al sistema correctamente.');
                return $this->redirectToRoute("inscripto_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar al inscripto en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($entity);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }

        return $this->render('inscripto/new.html.twig', array(
            'inscripto' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscripto entity.
     *
     * @Route("/{id}/edit", name="inscripto_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Inscripto $inscripto)
    {
        $em = $this->getDoctrine()->getManager();
        $editForm = $this->createForm('AppBundle\Form\InscriptoType', $inscripto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($inscripto);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El inscripto se editó correctamente.');
                return $this->redirectToRoute("inscripto_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el inscripto. Detalle: ' . $e->getMessage());
            }
        }

        if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($editForm);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }

        return $this->render('inscripto/edit.html.twig', array(
            'inscripto' => $inscripto,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a inscripto entity.
     *
     * @Route("/{id}/delete", name="inscripto_delete")
     * @Method("POST")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Inscripto $inscripto) {
        $em = $this->getDoctrine()->getManager();
        try {
            $inscripto->setBorrado(TRUE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'El inscripto fue eliminado con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el inscripto del sistema'));
        }
    }


    /**
     * @Route("/altaExcel", name="altaExcel")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function altaExcelAction(Request $request)
    {
        $nombreArchivoReal = $_FILES['excel']['name']; //captura el nombre del archivo
        $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)

        // Creo un nombre unico para el archivo (solucionar posibles problemas con nombres de archvios repetidos)
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = Date('Y.m.d.H.i.s-');
        $nombreArchivo = $date.$nombreArchivoReal;
        $destino = './uploads/'.$nombreArchivo; //lugar donde se copiara el archivo
 
        if (copy($_FILES['excel']['tmp_name'],$destino)) {
            $filename = $this->container->getParameter('kernel.root_dir').'/../web/uploads/'.$nombreArchivo;
            // load the factory
            /** @var \Liuggio\ExcelBundle\Factory $reader */
            $factory = $this->get('phpexcel');
            // create a reader
            /** @var \PHPExcel_Reader_IReader $reader */
            $inputFileType = PHPExcel_IOFactory::identify($filename); // Le digo de que tipo es el archivo ej: excel5, excel2007, ect.
            $reader = $factory->createReader($inputFileType);
            // check that the file can be read
            $canread = $reader->canRead($filename);
            // check that an empty temporary file cannot be read
            $someFile = tempnam($this->getParameter('kernel.root_dir'), "tmp");
            $cannotread = $reader->canRead($someFile);
            unlink($someFile);
            // load the excel file
            $phpExcelObject = $reader->load($filename);
            // read some data
            $sheet = $phpExcelObject->getActiveSheet();
                
            set_time_limit(300); // Maximum execution time of each script, in seconds 

            // Recorro el excel dando de alta 1 por 1 
            $i = 2;
            $noCargados = 0;
            $arrNoCargados = array ();
            $dnis = array ();
            $indiceDnis = 0;
            $em = $this->getDoctrine()->getManager();
            $enm = $this->getDoctrine()->getManager();


            while ($sheet->getCell('A'.$i)->getValue() != ''){
                $tipoYdoc = $sheet->getCell('C'.$i)->getValue(); // el tipo y documento estan en una misma celda hay que separarlos.
                list($tipo, $documento) = explode(" ", $tipoYdoc); // la funcion explode divide un string en varios string                
               
                $ficha = $sheet->getCell('A'.$i)->getValue();
                
                $nomYape = $sheet->getCell('B'.$i)->getValue(); // el nombre y apellido estan en una misma celda hay que separarlos.
                list($apellido, $nombre) = explode(",", $nomYape); // la funcion explode divide un string en varios string
                
                $email = $sheet->getCell('H'.$i)->getValue();
                
                $fechaInsc = $sheet->getCell('L'.$i)->getValue();
                $localidad = $sheet->getCell('U'.$i)->getValue();
                $cp = $sheet->getCell('V'.$i)->getValue();
                $partido = $sheet->getCell('W'.$i)->getValue();
                $provincia = $sheet->getCell('X'.$i)->getValue();
                $pais = $sheet->getCell('Y'.$i)->getValue();
                $anoIngreso = $sheet->getCell('AI'.$i)->getValue();

                $existe = $em->getRepository('AppBundle:Inscripto')->findByNroDocumento($documento);
                $tiposDoc = $em->getRepository('AppBundle:TipoDocumento')->findall();      

                $existeEnExcel = false;
                $tam = sizeof($dnis);
                for ($x= 0; $x<$tam; $x++) {
                    if ($dnis[$x] == $documento) {
                        $existeEnExcel = true;
                    }
                }
                
                if (!$existe && !$existeEnExcel) {
                    $dnis[$indiceDnis] = $documento;
                    $indiceDnis++;

                    $inscripto = new Inscripto();
                    $inscripto->setNroFicha($ficha);
                    $inscripto->setNombre($nombre);
                    $inscripto->setApellido($apellido);
                    $inscripto->setEmail($email);
                    $inscripto->setPais($pais);
                    $inscripto->setProvincia($provincia);
                    $inscripto->setLocalidad($localidad);
                    $inscripto->setCodigoPostal($cp);

                    $fecha = gmdate("Y-m-d", (($fechaInsc - 25569) * 86400));
                    $date = new DateTime($fecha);
                    $inscripto->setFechaInscripcion($date);

                    if ($anoIngreso == '') {    
                        $fechaIngreso = date($fecha);
                        $anoIngreso = date("Y", strtotime($fechaIngreso));  
                        $anoIngreso = $anoIngreso+1;
                    }
                    
                    $inscripto->setAnoIngreso($anoIngreso);

                    $inscripto->setPartido($partido);
                    
                    foreach ($tiposDoc as $tipoD) {
                        if ($tipoD->getTipo() == $tipo) {
                            $idTipo = $tipoD;
                        }
                    }

                    $inscripto->setTipoDocumento($idTipo);
                    $inscripto->setNroDocumento($documento);
                    $inscripto->setBorrado(FALSE);

                
                    $em->persist($inscripto);

                } else {
                
                    $noCargados = $noCargados + 1;

                    $noCargado = new NoCargado();
                    $noCargado->setNombre($nombre);
                    $noCargado->setApellido($apellido);
                    $noCargado->setFicha($ficha);
                    $noCargado->setDni($documento);
                    $noCargado->setNombreExcel($nombreArchivoReal);

                    date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $date = new DateTime("now");
                    $noCargado->setFecha($date);
                    if ($existe) { //existe en la base de datos
                        $noCargado->setMotivo("Ya existe una persona con este numero de documento en la base de datos");
                    }else{ //existe en el archvio excel
                        $noCargado->setMotivo("Ya existe una persona con este numero de documento en el archivo excel que se importo");
                    }
                    

                    $enm->persist($noCargado);
                }
                $i = $i + 1;
            }

            try {
                $enm->flush(); //No cargados
                $em->flush(); // Importados
                $total = ($i - 2);
                if ($noCargados == 0){
                    $this->get('session')->getFlashBag()->add('success', 'Se importaron '.$total.' inscriptos correctamente');
                    return $this->redirectToRoute("inscripto_index");
                }else{
                    $this->get('session')->getFlashBag()->add('warning', 'No se han podido importar '.$noCargados.' inscriptos de un total de '.$total);
                    return $this->redirectToRoute("noCargados");
                }
            } catch (Exception $e) {
                    $this->get('session')->getFlashBag()->add('Error', 'No se pudo cargar el excel, uno o varios campos incompatibles, verificar el archivo.');
                    return $this->redirectToRoute("inscripto_index");
            }
            
            
        }
    }

    /**
     * Show a inscripto entity.
     *
     * @Route("/{id}/show", name="inscripto_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request, Inscripto $inscripto) {
        return $this->render('inscripto/show.html.twig', array(
                    'inscripto' => $inscripto
        ));
    }

    /**
     * Show a inscripto entity.
     *
     * @Route("/importar", name="importar")
     * @Method({"GET", "POST"})
     */
    public function importarAction(Request $request) {
        return $this->render('inscripto/importar.html.twig');
    }

    /**
     * Show a inscripto entity.
     *
     * @Route("/cargarExcel", name="cargarExcel")
     * @Method({"GET", "POST"})
     */
    public function cargarExcelAction(Request $request) {
        return $this->render('inscripto/cargarExcel.html.twig');
    }

    /**
     * Alta de inscripto entity.
     *
     * @Route("/{id}/altaInscripto", name="inscripto_alta")
     * @Method("POST")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function altaAction(Request $request, Inscripto $inscripto) {
        $em = $this->getDoctrine()->getManager();
        try {
            $inscripto->setBorrado(FALSE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'El inscripto se dio de alta con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar la vacuna del sistema'));
        }
    }
}
