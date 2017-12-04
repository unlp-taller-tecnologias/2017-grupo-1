<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface, \Serializable {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /* @var Rol  $rol
     * 
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumn(name="rol", referencedColumnName="id")
     */
    private $rol;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct() {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername() {
        return $this->username;
    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        /* $roles = array();
          foreach ($this->roles as $rol) {
          $roles[] = $rol->getNombre();
          }
          return $roles; */
        return $this->rol;
    }

    public function eraseCredentials() {
        
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
                // see section on salt below
                // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->password,
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    function getIsActive() {
        return $this->isActive;
    }

    function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function hasRole($role = '') {
        return in_array($role, $this->getRoles());
    }

    function getRol() {
        return $this->rol;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

}
