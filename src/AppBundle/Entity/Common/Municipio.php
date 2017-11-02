<?php

namespace CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="Municipio",indexes={
 *                                      @ORM\Index(name="search_nombre", columns={"nombre"})}
 *)
 * @ORM\Entity(repositoryClass="CommonBundle\Entity\Repository\MunicipioRepository")
 */
class Municipio
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="seccionElectoral", type="string", length=10)
     */
    private $seccionElectoral;

    /**
     * @var string
     *
     * @ORM\Column(name="regionDeportiva", type="string", length=10)
     */
    private $regionDeportiva;

    /**
     * @var string
     *
     * @ORM\Column(name="cruceRegional", type="string", length=10, nullable=true)
     */
    private $cruceRegional;

     /**
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="municipios")
     * @ORM\JoinColumn(name="idProvincia", referencedColumnName="id")
     */
    private $provincia;

     /**
     * @ORM\OneToMany(targetEntity="Localidad", mappedBy="municipio", cascade={"persist"})
     */
    private $localidades;

    /**
     * @var integer $habitantes
     * @ORM\Column(name="habitantes", type="integer")
     */
    protected $habitantes;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="createdAt", type="datetime")
     * @Assert\Date()
     */
    private $createdAt;

    /**
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
    public function __construct()
    {
        $this->localidades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setActive(true);
        $this->createdAt = new \DateTime();
    }

    /**
     * __toString
     */
    public function __toString(){
        return $this->getNombre();
    }

    /**
     * Get cruceRegionalRaw
     *
     * @return string
     */
    public function getCruceRegionalRaw()
    {
        return "<small>".str_replace($this->regionDeportiva, "</small><strong>".$this->regionDeportiva."</strong><small>",  $this->cruceRegional)."</small>";
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
     * @return Municipio
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
     * Set seccionElectoral
     *
     * @param string $seccionElectoral
     *
     * @return Municipio
     */
    public function setSeccionElectoral($seccionElectoral)
    {
        $this->seccionElectoral = $seccionElectoral;

        return $this;
    }

    /**
     * Get seccionElectoral
     *
     * @return string
     */
    public function getSeccionElectoral()
    {
        return $this->seccionElectoral;
    }

    /**
     * Set regionDeportiva
     *
     * @param string $regionDeportiva
     *
     * @return Municipio
     */
    public function setRegionDeportiva($regionDeportiva)
    {
        $this->regionDeportiva = $regionDeportiva;

        return $this;
    }

    /**
     * Get regionDeportiva
     *
     * @return string
     */
    public function getRegionDeportiva()
    {
        return $this->regionDeportiva;
    }

    /**
     * Set cruceRegional
     *
     * @param string $cruceRegional
     *
     * @return Municipio
     */
    public function setCruceRegional($cruceRegional)
    {
        $this->cruceRegional = $cruceRegional;

        return $this;
    }

    /**
     * Get cruceRegional
     *
     * @return string
     */
    public function getCruceRegional()
    {
        return $this->cruceRegional;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Municipio
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
     * @return Municipio
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
     * @return Municipio
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
     * Set provincia
     *
     * @param \CommonBundle\Entity\Provincia $provincia
     *
     * @return Municipio
     */
    public function setProvincia(\CommonBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \CommonBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Add localidade
     *
     * @param \CommonBundle\Entity\Localidad $localidade
     *
     * @return Municipio
     */
    public function addLocalidade(\CommonBundle\Entity\Localidad $localidade)
    {
        $this->localidades[] = $localidade;

        return $this;
    }

    /**
     * Remove localidade
     *
     * @param \CommonBundle\Entity\Localidad $localidade
     */
    public function removeLocalidade(\CommonBundle\Entity\Localidad $localidade)
    {
        $this->localidades->removeElement($localidade);
    }

    /**
     * Get localidades
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocalidades()
    {
        return $this->localidades;
    }

    /**
     * Set habitantes
     *
     * @param integer $habitantes
     *
     * @return Segmento
     */
    public function setHabitantes($habitantes)
    {
        $this->habitantes = $habitantes;

        return $this;
    }

    /**
     * Get habitantes
     *
     * @return integer
     */
    public function getHabitantes()
    {
        return $this->habitantes;
    }

    /**
     * Set createdBy
     *
     * @param \SeguridadBundle\Entity\Usuario $createdBy
     *
     * @return Municipio
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
     * @return Municipio
     */
    public function setUpdatedBy(\SeguridadBundle\Entity\Usuario $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

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

    public function mismoMunicipio(Municipio $municipio)
    {
        return $this->id == $municipio->getId();
    }
}
