<?php

namespace AppBundle\Entity\Seguridad\Usuario;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="usuario", uniqueConstraints={
 *          @ORM\UniqueConstraint(name="unique_username", columns={"username"})
 *      },indexes={
 *                  @ORM\Index(name="search_username", columns={"username"})
 *      }
 * )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class Usuario implements UserInterface, \Serializable {

    /**
     * @ORM\Column(type="integer")
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

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="usuario_role",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="RESTRICT")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id",onDelete="RESTRICT")}
     *      )
     */
    private $roles;

    /**
     * @ORM\OneToOne(targetEntity="CommonBundle\Entity\Persona", inversedBy="usuario", cascade={"all"})
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $persona;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Assert\Date()
     */
    private $createdAt;

    /**
     * @var User $createdBy
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="createdBy", referencedColumnName="id")
     */
    private $createdBy;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     * @Assert\Date()
     */
    private $updatedAt;

    /**
     * @var User $updatedBy
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="updatedBy", referencedColumnName="id")
     */
    private $updatedBy;

    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->isActive = true;
        $this->roles = new ArrayCollection();
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

    /**
     * Get Roles implement Interface
     *
     * @return Array
     */
    public function getRoles() {
        return $this->roles;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Usuario
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Usuario
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function eraseCredentials() {
        
    }

    /**
     * Add role
     *
     * @param \AppBundle\Entity\Seguridad\Role $role
     *
     * @return Usuario
     */
    public function addRole(\AppBundle\Entity\Seguridad\Role $role) {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \AppBundle\Entity\Seguridad\Role $role
     */
    public function removeRole(\AppBundle\Entity\Seguridad\Role $role) {
        $this->roles->removeElement($role);
    }

    /**
     * Set persona
     *
     * @param \CommonBundle\Entity\Persona $persona
     *
     * @return Usuario
     */
    public function setPersona(\CommonBundle\Entity\Persona $persona = null) {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \CommonBundle\Entity\Persona
     */
    public function getPersona() {
        return $this->persona;
    }

    /**
     * Set createdBy
     *
     * @param \SeguridadBundle\Entity\Usuario $createdBy
     *
     * @return Usuario
     */
    public function setCreatedBy(\SeguridadBundle\Entity\Usuario $createdBy = null) {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \SeguridadBundle\Entity\Usuario
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \SeguridadBundle\Entity\Usuario $updatedBy
     *
     * @return Usuario
     */
    public function setUpdatedBy(\SeguridadBundle\Entity\Usuario $updatedBy = null) {
        $this->updatedBy = $updatedBy;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \SeguridadBundle\Entity\Usuario
     */
    public function getUpdatedBy() {
        return $this->updatedBy;
    }

    public function hasRole($role = '') {
        return in_array($role, $this->getRoles());
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

    /**
     * __toString
     */
    public function __toString() {
        return $this->username;
    }

}
