<?php

namespace AppBundle\Repository;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends \Doctrine\ORM\EntityRepository {

    /**
     * Retorna los usuarios del sistema ordenados ASC por username
     */
    public function findAllOrderedByUsername() {
        return $this->createQueryBuilder('usuario')
                        ->orderBy("usuario.username", "ASC")
                        ->getQuery()->getResult();
    }

}
