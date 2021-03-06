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
     * @var Address
     * 
     * @ORM\OneToOne(targetEntity="Address", inversedBy="client", cascade={"persist"})
     * 
     */
    private $factAddress;

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
     * @ORM\OneToMany(targetEntity="Student" , mappedBy="client")
     * 
     */
    private $students;
    
 
    
    
    public function __construct() {
        
        parent::__construct();
        $this->students = new ArrayCollection();
    
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
     * Set factAddress
     *
     * @param \AppBundle\Entity\Address $factAddress
     * @return Client
     */
    public function setFactAddress(\AppBundle\Entity\Address $factAddress = null)
    {
        $this->factAddress = $factAddress;
        $factAddress->setClient($this);

        return $this;
    }

    /**
     * Get factAddress
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getFactAddress()
    {
        return $this->factAddress;
    }
    
}
