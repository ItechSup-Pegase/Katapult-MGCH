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
     * @var Address
     * 
     * @ORM\OneToOne(targetEntity="Address", mappedBy="client")
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;


    /**
     * Set factAddress
     *
     * @param \AppBundle\Entity\Address $factAddress
     * @return Client
     */
    public function setFactAddress(\AppBundle\Entity\Address $factAddress = null)
    {
        $this->factAddress = $factAddress;

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

    /**
     * Add addresses
     *
     * @param \AppBundle\Entity\Address $addresses
     * @return Client
     */
    public function addAddress(\AppBundle\Entity\Address $addresses)
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \AppBundle\Entity\Address $addresses
     */
    public function removeAddress(\AppBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}
