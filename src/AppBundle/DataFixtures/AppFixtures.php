<?php

/**
 * Description of AppFixtures
 *
 * @author kibunke
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Rol;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Vacuna;
use AppBundle\Entity\Usuario;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture {

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {

        /**
         * PERSISTIR LOS ROLES DEL SISTEMA
         */
        $rolAdmin = new Rol();
        $rolAdmin->setRol("ROLE_ADMIN");
        $rolAdmin->setNombre('ADMINISTRADOR');
        $rolAdmin->setDescripcion("Es el rol de Administrador del Sistema de Control de Vacunacion. Con el mismo se pueden realizar operaciones como carga de usuarios del Sistema, modificacion y eliminación de los mismo, carga de Vacunas entre otras.");
        $manager->persist($rolAdmin);

        $rolCoord = new Rol();
        $rolCoord->setNombre('COORDINADOR');
        $rolCoord->setRol("ROLE_COORD");
        $rolCoord->setDescripcion("Es el rol de Coordinador del Sistema de Control de Vacunacion. Con el mismo se pueden realizar el registro de vacunas a los usuarios visitantes del sistema y visualizar reportes estadìsticos.");
        $manager->persist($rolCoord);

        /**
         * PERSISTIR LAS VACUNAS DEL CALENDARIO Y OPTATIVAS
         */
        $vacuna = new Vacuna();
        $vacuna->setNombre("AntihepatitisB")->setAbreviatura("AB")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("dT doble adulto")->setAbreviatura("dT")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("dTp acelular")->setAbreviatura("dTp")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Triple viral SRP")->setAbreviatura("SRP")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(false)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Doble viral SR")->setAbreviatura("SR")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Influenza anual")->setAbreviatura("influenza")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Hepatitis A")->setAbreviatura("HA")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Hepatitis A+B")->setAbreviatura("HAB")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(false)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Varicela")->setAbreviatura("Varicela")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Fiebre amarilla")->setAbreviatura("FA")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(false)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Meningococica AC")->setAbreviatura("MAC")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Meningococica AB")->setAbreviatura("MAB")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Meningococica ACWY")->setAbreviatura("MACWY")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Meningococica B")->setAbreviatura("MB")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(false)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("HPV bivalente")->setAbreviatura("HPVB")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("HPV tetravalente")->setAbreviatura("HPVT")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(false)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        $vacuna = new Vacuna();
        $vacuna->setNombre("Antineumococica")->setAbreviatura("Antineumococica")->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna del calendario ")->setTieneVencimiento(true)->setBorrado(FALSE);;
        $manager->persist($vacuna);

        /**
         * PERSISTIR LOS USUARIOS DEL SISTEMA
         * 
         * administrador
         * 123456
         */
        $usuario = new Usuario();
        $usuario->setRol($rolAdmin);
        $usuario->setIsActive(true);
        $usuario->setUsername('administrador');
        $password = $this->encoder->encodePassword($usuario, '123456');
        $usuario->setPassword($password);
        $manager->persist($usuario);


        $manager->flush();
    }

}
