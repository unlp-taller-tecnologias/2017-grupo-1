<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Visitante;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPExcel;
use PHPExcel_IOFactory;

class VisitanteController extends Controller
{
    /**
     * @Route("/visitante", name="visitante")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $visitantes = $em->getRepository('AppBundle:Visitante')->findAll();

        return $this->render('visitante/index.html.twig', array(
            'visitantes' => $visitantes,
        ));
    }

    /**
     * @Route("/altaVisitante", name="altaVisitante")
     */
    public function alta(Request $request)
    {
        return $this->render('visitante/alta.html.twig');
    }

    /**
     * @Route("/altaExcelView", name="altaExcelView")
     */
    public function altaExcel(Request $request)
    {
        return $this->render('visitante/altaExcel.html.twig');
    }

    /**
     * @Route("/altaExcel", name="altaExcel")
     */
    public function altaExcelAction(Request $request)
    {

        $nombreArchivo = $_FILES['excel']['name']; //captura el nombre del archivo
        $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)

        // se cambia el nombre del archivo concatenando la fecha y hora actual al inicio del nombre real del archivo
        // para evitar errores en caso de que se ingresen dos archivos excel con el mismo nombre 
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

                    $visitante = new Visitante();
                    $visitante->setNombre($nombre);
                    $visitante->setApellido($apellido);
                    $visitante->setEmail($email);
                    $visitante->setPais($pais);
                    $visitante->setProvincia($provincia);
                    //$visitante->setLocalidad($localidad);
                    //$visitante->setCp($cp);
                    //$visitatnte->setFechaInsc($fechaInscripcion);
                    $visitante->setPartido($partido);
                    $visitante->setTipoDocumento($tipo);
                    $visitante->setNroDocumento($documento);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($visitante);
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