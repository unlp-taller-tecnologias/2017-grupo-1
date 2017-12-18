<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscripto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use PHPExcel;
use PHPExcel_IOFactory;
use \Datetime;

/**
 * Inscripto controller.
 *
 * @Route("inscripto")
 */
class InscriptoController extends Controller
{

    /**
     * @Route("/altaExcelView", name="altaExcelView")
     */
    public function altaExcel(Request $request)
    {
        return $this->render('inscripto/altaExcel.html.twig');
    }

    /**
     * Lists all inscripto entities.
     *
     * @Route("/", name="inscripto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $inscriptos = $em->getRepository('AppBundle:Inscripto')->findAll();

        return $this->render('inscripto/index.html.twig', array(
            'inscriptos' => $inscriptos,
        ));
    }

    /**
     * Creates a new inscripto entity.
     *
     * @Route("/new", name="inscripto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscripto = new Inscripto();
        $form = $this->createForm('AppBundle\Form\InscriptoType', $inscripto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscripto);
            $em->flush();

            return $this->redirectToRoute('inscripto_show', array('id' => $inscripto->getId()));
        }

        return $this->render('inscripto/new.html.twig', array(
            'inscripto' => $inscripto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a inscripto entity.
     *
     * @Route("/{id}", name="inscripto_show")
     * @Method("GET")
     */
    public function showAction(Inscripto $inscripto)
    {
        $deleteForm = $this->createDeleteForm($inscripto);

        return $this->render('inscripto/show.html.twig', array(
            'inscripto' => $inscripto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscripto entity.
     *
     * @Route("/{id}/edit", name="inscripto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscripto $inscripto)
    {
        $deleteForm = $this->createDeleteForm($inscripto);
        $editForm = $this->createForm('AppBundle\Form\InscriptoType', $inscripto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inscripto_edit', array('id' => $inscripto->getId()));
        }

        return $this->render('inscripto/edit.html.twig', array(
            'inscripto' => $inscripto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inscripto entity.
     *
     * @Route("/{id}", name="inscripto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscripto $inscripto)
    {
        $form = $this->createDeleteForm($inscripto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscripto);
            $em->flush();
        }

        return $this->redirectToRoute('inscripto_index');
    }

    /**
     * Creates a form to delete a inscripto entity.
     *
     * @param Inscripto $inscripto The inscripto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscripto $inscripto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscripto_delete', array('id' => $inscripto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     * @Route("/altaExcel", name="altaExcel")
     */
    public function altaExcelAction(Request $request)
    {

        $nombreArchivo = $_FILES['excel']['name']; //captura el nombre del archivo
        $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)

        // Creo un nombre unico para el archivo (solucionar posibles problemas con nombres de archvios repetidos)
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = Date('Y.m.d.H.i.s-');
        $nombreArchivo = $date.$nombreArchivo;
        $destino = './uploads/'.$nombreArchivo; //lugar donde se copiara el archivo
 
        if (copy($_FILES['excel']['tmp_name'],$destino)){
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
            $continuar = 1;
            $i = 2;
            while ($i != 10){
                if ($sheet->getCell('A'.$i)->getValue() != ''){
                    $ficha = $sheet->getCell('A'.$i)->getValue();
                    
                    $nomYape = $sheet->getCell('B'.$i)->getValue(); // el nombre y apellido estan en una misma celda hay que separarlos.
                    list($apellido, $nombre) = explode(",", $nomYape); // la funcion explode divide un string en varios string
                    
                    $tipoYdoc = $sheet->getCell('C'.$i)->getValue(); // el tipo y documento estan en una misma celda hay que separarlos.
                    list($tipo, $documento) = explode(" ", $tipoYdoc); // la funcion explode divide un string en varios string
                    
                    $email = $sheet->getCell('H'.$i)->getValue();
                    
                    $fechaInsc = $sheet->getCell('L'.$i)->getValue();
                    $localidad = $sheet->getCell('U'.$i)->getValue();
                    $cp = $sheet->getCell('V'.$i)->getValue();
                    $partido = $sheet->getCell('W'.$i)->getValue();
                    $provincia = $sheet->getCell('X'.$i)->getValue();
                    $pais = $sheet->getCell('Y'.$i)->getValue();

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

                    $inscripto->setPartido($partido);
                    $inscripto->setTipoDocumento($tipo);
                    $inscripto->setNroDocumento($documento);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($inscripto);
                    $em->flush();

                    $i = $i + 1;
                }else{
                    $continuar = 0;
                }
            }
        }
        $this->get('session')->getFlashBag()->add('success', 'El excel se importo correctamente.');
        return ($this->indexAction($request));
    }
}