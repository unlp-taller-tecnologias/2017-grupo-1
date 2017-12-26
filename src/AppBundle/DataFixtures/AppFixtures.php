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
        for ($index = 0; $index < 20; $index++) {
            $vacuna = new Vacuna();
            $vacuna->setNombre("Nombre de vacuna del calendario " . $index)->setAbreviatura("Abreviatura de vacuna del calendario" . $index)->setDosisRequeridas(rand(1, 5))->setEsObligatoria(true)->setObservacion("Observacion de la vacuna del calendario " . $index)->setTieneVencimiento(true);
            $manager->persist($vacuna);
        }

        for ($index = 30; $index < 50; $index++) {
            $vacuna = new Vacuna();
            $vacuna->setNombre("Nombre de vacuna optativa " . $index)->setAbreviatura("Abreviatura de vacuna optativa" . $index)->setDosisRequeridas(rand(1, 5))->setEsObligatoria(false)->setObservacion("Observacion de la vacuna optativa " . $index)->setTieneVencimiento(true);
            $manager->persist($vacuna);
        }

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
