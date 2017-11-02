<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CommonBundle\Entity\Persona
 *
 * @ORM\Table(name="Persona", uniqueConstraints={
 *          @ORM\UniqueConstraint(name="unique_dni", columns={"tipoDocumento_id", "dni"}),
 *          @ORM\UniqueConstraint(  name="unique_email", columns={"email"})
 *      },indexes={
 *                  @ORM\Index(name="search_nombre", columns={"nombre"}),
 *                  @ORM\Index(name="search_apellido", columns={"apellido"}),
 *                  @ORM\Index(name="search_apellido_nombre", columns={"apellido","nombre"}),
 *                  @ORM\Index(name="search_dni", columns={"dni"})
 *      }
 * )
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 *
 * @ORM\DiscriminatorMap({
 *                          "persona"       = "Persona",
 *                          "competidor"    = "ResultadoBundle\Entity\Competidor",
 *                          "tecnico"       = "ResultadoBundle\Entity\DirectorTecnico",
 *                      })
 *                        "competitor"= "TournamentBundle\Entity\Competitor",
 *                        "coach"     = "TournamentBundle\Entity\Coach",
 *                        "companion" = "TournamentBundle\Entity\Companion",
 *                        "employee"  = "PersonalBundle\Entity\Employee"
 */
class Persona
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=70)
     * @Assert\NotBlank(
     *      message="name missing!"
     * )
     * @Assert\Type(
     *      type="string"
     * )
     * 
     * @Assert\NotBlank(groups={"datosPersonales"})
     * @Assert\Type(
     *      type="string",
     *      groups={"datosPersonales"}
     * )
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=70)
     * @Assert\NotBlank(
     *      message="lastname missing!"
     * )
     * @Assert\Type(
     *      type="string"
     * )
     * 
     * @Assert\NotBlank(groups={"datosPersonales"})
     * @Assert\Type(
     *      type="string",
     *      groups={"datosPersonales"}
     * )
     */
    private $apellido;

    /**
     * @var date $fNacimiento;
     *
     * @ORM\Column(name="fNacimiento", type="date", nullable=true)
     * @Assert\NotBlank(
     *      message="Falta la fecha de Nacimiento!"
     * )
     * @Assert\Date()
     */
    private $fNacimiento;

    /**
     * @var integer $dni
     *
     * @ORM\Column(name="dni", type="integer")
     * @Assert\NotBlank(
     *      message="dni missing!"
     * )
     * @Assert\Type(
     *      type="integer"
     * )
     * @Assert\GreaterThan(
     *      value = 0
     * )
     * 
     * @Assert\NotBlank(groups={"datosPersonales"})
     * @Assert\Type(
     *      type="numeric",
     *      groups={"datosPersonales"}
     * )
     * 
     */
    private $dni;

    /**
     * @var TipoDocumento $tipoDocumento
     *
     * @ORM\ManyToOne(targetEntity="TipoDocumento")
     * @ORM\JoinColumn(name="tipoDocumento_id", referencedColumnName="id")
     * 
     * @Assert\NotNull(groups={"datosPersonales"})
     * )
     */
    private $tipoDocumento;

    /**
     * @var Genero $genero
     *
     * @ORM\ManyToOne(targetEntity="ResultadoBundle\Entity\Genero")
     * @ORM\JoinColumn(name="genero_id", referencedColumnName="id")
     *
     *  @Assert\NotNull(groups={"datosPersonales"})
     */
    private $genero;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Assert\Email(
     *     message = "Dirección de correo electrónico no válida.",
     *     checkMX = true,
     *     checkHost = true
     * )
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="CommonBundle\Entity\Municipio")
     * @ORM\JoinColumn(name="municipio", referencedColumnName="id")
     */
    private $municipio;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=100, nullable=true)
     */
    private $telefono;

    /**
     * @var string $facebook
     *
     * @ORM\Column(name="facebook", type="string", length=30, nullable=true)
     * @Assert\Type(
     *      type="string"
     * )
     */
    private $facebook;

    /**
     * @var string $skype
     *
     * @ORM\Column(name="skype", type="string", length=30, nullable=true)
     * @Assert\Type(
     *      type="string"
     * )
     */
    private $skype;

    /**
     * @var string $twitter
     *
     * @ORM\Column(name="twitter", type="string", length=30, nullable=true)
     * @Assert\Type(
     *      type="string"
     * )
     */
    private $twitter;

    /**
     * @var string $linkedin
     *
     * @ORM\Column(name="linkedin", type="string", length=30, nullable=true)
     * @Assert\Type(
     *      type="string"
     * )
     */
    private $linkedin;

    /**
     * @var text $avatar
     * @ORM\Column(name="avatar", type="text", nullable=true)
     **/
    private $avatar;

    /**
     * @var text $observacion
     * @ORM\Column(name="observacion", type="text", nullable=true)
     **/
    private $observacion;

    /**
     * @ORM\OneToOne(targetEntity="SeguridadBundle\Entity\Usuario", mappedBy="persona")
     */
    private $usuario;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Assert\Date()
     */
    private $createdAt;

    /**
     * @var SeguridadBundle\Entity\Usuario $createdBy
     *
     * @ORM\ManyToOne(targetEntity="SeguridadBundle\Entity\Usuario")
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
     * @var SeguridadBundle\Entity\Usuario $updatedBy
     *
     * @ORM\ManyToOne(targetEntity="SeguridadBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="updatedBy", referencedColumnName="id")
     */
    private $updatedBy;

    /**
     * @var boolean $isActive
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    protected $isActive;

    /**
     * Constructor
     */
    public function __construct($user = null)
    {
        $this->createdBy = $user;
        $this->createdAt = new \DateTime();
        $this->isActive = true;
        $this->emails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * __toString
     */
    function __toString()
    {
        return (String)$this->dni;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Get nombreCompleto
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->apellido.", ".$this->nombre;
    }

    /**
     * Set fNacimiento
     *
     * @param \DateTime $fNacimiento
     *
     * @return Persona
     */
    public function setFNacimiento($fNacimiento)
    {
        $this->fNacimiento = $fNacimiento;

        return $this;
    }

    /**
     * Get fNacimiento
     *
     * @return \DateTime
     */
    public function getFNacimiento()
    {
        return $this->fNacimiento;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     *
     * @return Persona
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Persona
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Persona
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Persona
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Persona
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Persona
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        if (!is_null($this->avatar))
            return $this->avatar;
        return "data:image/jpeg;base64,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";
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Persona
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Persona
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Persona
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set tipoDocumento
     *
     * @param \CommonBundle\Entity\TipoDocumento $tipoDocumento
     *
     * @return Persona
     */
    public function setTipoDocumento(\CommonBundle\Entity\TipoDocumento $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \CommonBundle\Entity\TipoDocumento
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set usuario
     *
     * @param \SeguridadBundle\Entity\Usuario $usuario
     *
     * @return Persona
     */
    public function setUsuario(\SeguridadBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \SeguridadBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set createdBy
     *
     * @param \SeguridadBundle\Entity\Usuario $createdBy
     *
     * @return Persona
     */
    public function setCreatedBy(\SeguridadBundle\Entity\Usuario $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \SeguridadBundle\Entity\Usuario
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \SeguridadBundle\Entity\Usuario $updatedBy
     *
     * @return Persona
     */
    public function setUpdatedBy(\SeguridadBundle\Entity\Usuario $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \SeguridadBundle\Entity\Usuario
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set municipio
     *
     * @param \CommonBundle\Entity\Municipio $municipio
     * @return Persona
     */
    public function setMunicipio(\CommonBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \CommonBundle\Entity\Municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Persona
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function clearUsuario()
    {
        $this->usuario = NULL;

        return $this;
    }

    public function mismoMunicipio(Persona $persona)
    {
        return $this->getMunicipio()->mismoMunicipio($persona->getMunicipio());
    }

    public function toArray()
    {
        return array(
                        'id'            => $this->getId(),
                        'apellido'      => $this->getApellido(),
                        'nombre'        => $this->getNombre(),
                        'sexo'          => $this->getGenero() ? $this->getGenero()->getNombre() : '',
                        'tipoDocumento' => $this->getTipoDocumento()->getNombre(),
                        'dni'           => $this->getDni(),
                        'fNacimiento'   => $this->getFNacimiento()->format('d/m/Y'),
                        'telefono'      => $this->getTelefono(),
                        'municipio'     => $this->getMunicipio()->getNombre(),
                        'email'         => $this->getEmail(),
                        'observacion'   => $this->getObservacion()
                    );
    }

    /**
     * Load
     */
    public function loadFromJson($json)
    {
        if (isset($json->nombre))
            $this->setNombre($json->nombre);
        if (isset($json->apellido))
            $this->setApellido($json->apellido);
        if (isset($json->dni))
            $this->setDni($json->dni);
        if (isset($json->tipoDocumento) && is_object($json->tipoDocumento))
            $this->setTipoDocumento($json->tipoDocumento);
        if (isset($json->fNacimiento) && is_object($json->fNacimiento))
            $this->setFNacimiento($json->fNacimiento);
        if (isset($json->telefono))
            $this->setTelefono($json->telefono);
        if (isset($json->municipio) && is_object($json->municipio))
            $this->setMunicipio($json->municipio);
        if (isset($json->email) && strlen($json->email))
            $this->setEmail($json->email);
        if (isset($json->observacion))
            $this->setObservacion($json->observacion);
        if (isset($json->sexo) &&
            is_object($json->sexo) &&
            ($json->sexo->getNombre() == 'Masculino' || $json->sexo->getNombre() == 'Femenino')){
            $this->setGenero($json->sexo);
        }
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Persona
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set genero
     *
     * @param \ResultadoBundle\Entity\Genero $genero
     *
     * @return Persona
     */
    public function setGenero(\ResultadoBundle\Entity\Genero $genero = null)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return \ResultadoBundle\Entity\Genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    public function getTipoPersona()
    {
        return 'Usuario';
    }

    public function getClass()
    {
        return 'CommonBundle:Persona';
    }
}
