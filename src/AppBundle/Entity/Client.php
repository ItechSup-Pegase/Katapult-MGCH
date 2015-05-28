<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Person;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Client
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ClientRepository")
 */
class Client extends Person
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
     * @ORM\Column(name="factAdr", type="string", length=255)
     */
    private $factAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;
    
    /**
     *
     * @var type 
     * 
     * @ORM\OneToMany(targetEntity="Student" , mappedBy="student")
     */
    private $students;
    
      
    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Address", mappedBy="client" )
     */
    private $adresses;
    
    public function __construct() {
        $this->addresses = new ArrayCollection();
        $this->students = new ArrayCollection();
    
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return parent::getId();
    }

    /**
     * Set factAdr
     *
     * @param string $factAdr
     * @return Client
     */
    public function setFactAdr($factAdr)
    {
        $this->factAdr = $factAdr;

        return $this;
    }

    /**
     * Get factAdr
     *
     * @return string 
     */
    public function getFactAdr()
    {
        return $this->factAdr;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     * @return Client
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Add students
     *
     * @param \AppBundle\Entity\Student $students
     * @return Client
     */
    public function addStudent(\AppBundle\Entity\Student $students)
    {
        $this->students[] = $students;

        return $this;
    }

    /**
     * Remove students
     *
     * @param \AppBundle\Entity\Student $students
     */
    public function removeStudent(\AppBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Add adresses
     *
     * @param \AppBundle\Entity\Address $adresses
     * @return Client
     */
    public function addAdress(\AppBundle\Entity\Address $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \AppBundle\Entity\Address $adresses
     */
    public function removeAdress(\AppBundle\Entity\Address $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
