<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\RegistroVacunacion;

/**
 * Visitante
 *
 * @ORM\Table(name="visitante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitanteRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="tipoVisitante", type="string")
 * @ORM\DiscriminatorMap({"inscripto" = "Inscripto", "noDocente" = "NoDocente"})
 */
abstract class Visitante {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank(message="El campo nombre no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El nombre deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El nombre no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+$/",
     *     match=true,
     *     message="El nombre no puede contener numeros ni caracteres especiales"
     * )
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     * @Assert\NotBlank(message="El campo apellido no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El apellido deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El apellido no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+$/",
     *     match=true,
     *     message="El apellido no puede contener numeros ni caracteres especiales"
     * )

     */
    protected $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Assert\Email(
     *     message = "El email {{ value }} no es un email valido.",
     *     checkMX = true
     * )
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     * @Assert\NotBlank(message="El campo pais no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El campo pais deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El campo pais no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Züàèìòùáéíóúâãñ]+$/",
     *     match=true,
     *     message="El campo pais no puede contener numeros ni caracteres especiales"
     * )
     */
    protected $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255)
     * @Assert\NotBlank(message="El campo provincia no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El campo pais deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El campo pais no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Züàèìòùáéíóúâãñ]+$/",
     *     match=true,
     *     message="El campo provincia no puede contener numeros ni caracteres especiales"
     * )

     */
    protected $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="El campo partido no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El campo partido deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El campo partido no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Züàèìòùáéíóúâãñ]+$/",
     *     match=true,
     *     message="El campo partido no puede contener numeros ni caracteres especiales"
     * )

     */
    protected $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="El campo localidad no puede estar en blanco")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "El campo localidad deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El campo localidad no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Züàèìòùáéíóúâãñ]+$/",
     *     match=true,
     *     message="El campo localidad no puede contener numeros ni caracteres especiales"
     * )

     */
    protected $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoPostal", type="string", length=255, nullable=true)
     * 
     * El codigo postal debe permitir caracteres especiales, asi como longitudes iguales a 1.
     * Por lo que no se hacen validaciones en este campo
     */
    protected $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoDocumento", type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "El tipo documento deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El tipo documento no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]+$/",
     *     match=true,
     *     message="El tipo documento no puede contener numeros ni caracteres especiales"
     * )
     */
    protected $tipoDocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroDocumento", type="string", length=255, unique=true)
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "El documento deberá tener al menos {{ limit }} caracteres",
     *      maxMessage = "El documento no puede tener más de {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z0-9]+$/",
     *     match=true,
     *     message="El documento no puede contener caracteres especiales"
     * )
     */
    protected $nroDocumento;

    /**
     * @var RegistroVacunacion
     * 
     * @ORM\OneToOne(targetEntity="RegistroVacunacion", inversedBy="propietario")
     * @ORM\JoinColumn(name="registroVacunacion_id", referencedColumnName="id")
     */
    protected $registroVacunacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrado", type="boolean", length=1)
     */
    private $borrado;

    function getRegistroVacunacion(): RegistroVacunacion {
        return $this->registroVacunacion;
    }

    function setRegistroVacunacion(RegistroVacunacion $registroVacunacion) {
        $this->registroVacunacion = $registroVacunacion;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Visitante
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Visitante
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Visitante
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Visitante
     */
    public function setPais($pais) {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais() {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Visitante
     */
    public function setProvincia($provincia) {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia() {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return localidad
     */
    public function setLocalidad($localidad) {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad() {
        return $this->localidad;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return localidad
     */
    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal() {
        return $this->codigoPostal;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     *
     * @return Visitante
     */
    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string
     */
    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    /**
     * Get partido
     * 
     * @return string
     */
    function getPartido() {
        return $this->partido;
    }

    /**
     * Get nroDocumento
     * 
     * @return integer
     */
    function getNroDocumento() {
        return $this->nroDocumento;
    }

    /**
     * Set partido
     *
     * @param string $partido
     *
     * @return Visitante
     */
    function setPartido($partido) {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Set nroDocumento
     * 
     * @param integer $nroDocumento
     * 
     * @return Visitante
     */
    function setNroDocumento($nroDocumento) {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

    /**
     * Set borrado
     *
     * @param boolean $borrado
     *
     * @return Visitante
     */
    public function setBorrado($borrado) {
        $this->borrado = $borrado;

        return $this;
    }

    /**
     * Get borrado
     *
     * @return Visitante
     */
    public function getBorrado() {
        return $this->borrado;
    }

}
