<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Rol;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 * @UniqueEntity(
 *     fields={"username"},
 *     errorPath="username",
 *     message="El nombre de usuario ya se encuentra registrado en el sistema"
 * )
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
     * @ORM\Column(type="string", length=25)
     * @Assert\NotBlank(message="El campo nombre de usuario no puede estar en blanco")
     * @Assert\Length(
     *      min = 6,
     *      max = 30,
     *      minMessage = "El nombre de usuario deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El nombre de usuario no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/\W/",
     *     match=false,
     *     message="El nombre de usuario no debe contener espacios ni caracteres especiales"
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank(message="El campo contraseña de usuario no puede estar en blanco")
     * @Assert\Length(
     *      min = 6,
     *      minMessage = "La contraseña deberá tener al menos {{ limit }} caracteres"
     * )
     */
    private $password;

    /**
     * @var Rol $rol
     * 
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * @Assert\NotNull(message="El rol no puede estar sin asignar")
     */
    private $rol;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     * @Assert\Type("bool")
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
        return array($this->getRol()->getRol());
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
        return $this->rol == $role;
    }

    function getRol() {
        return $this->rol;
    }

    function setRol(Rol $rol) {
        $this->rol = $rol;
    }

}
