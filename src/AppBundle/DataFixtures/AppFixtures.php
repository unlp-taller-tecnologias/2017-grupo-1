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

class AppFixtures extends Fixture {

    public function load(ObjectManager $manager) {

        $rol = new Rol();
        $rol->setNombre("ADMINISTRADOR");
        $rol->setDescripcion("Es el rol de Administrador del Sistema de Control de Vacunacion. Con el mismo se pueden realizar operaciones como carga de usuarios del Sistema, modificacion y eliminación de los mismo, carga de Vacunas entre otras.");
        $manager->persist($rol);

        $rol = new Rol();
        $rol->setNombre("COORDINADOR");
        $rol->setDescripcion("Es el rol de Coordinador del Sistema de Control de Vacunacion. Con el mismo se pueden realizar el registro de vacunas a los usuarios visitantes del sistema y visualizar reportes estadìsticos.");
        $manager->persist($rol);

        $manager->flush();
    }

}
