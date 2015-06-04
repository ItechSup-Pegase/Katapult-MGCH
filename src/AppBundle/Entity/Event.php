<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\EventRepository")
 */
class Event
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
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Address",inversedBy="events", cascade={"persist"})
     * @ORM\JoinColumn(name="address_id" , referencedColumnName="id")
     */
    private $address;
    
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Student",inversedBy="events")
     * @ORM\JoinTable(name="event_student")
     */
    private $students;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Teacher",inversedBy="events")
     * @ORM\JoinColumn(name="teacher_id" , referencedColumnName="id")
     */
    private $teacher;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Formation",inversedBy="events")
     * @ORM\JoinColumn(name="formation_id" , referencedColumnName="id")
     */
    private $formation;


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
     * Set date
     *
     * @param string $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set addresses
     *
     * @param \AppBundle\Entity\Address $addresses
     * @return Event
     */
    public function setAddresses(\AppBundle\Entity\Address $addresses = null)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Get addresses
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Set students
     *
     * @param \AppBundle\Entity\Student $students
     * @return Event
     */
    public function setStudents(\AppBundle\Entity\Student $students = null)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return \AppBundle\Entity\Student 
     */
    public function getStudents()
    {
        return $this->students;
    }


    /**
     * Set formations
     *
     * @param \AppBundle\Entity\Formation $formation
     * @return Event
     */
    public function setFormation(\AppBundle\Entity\Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formations
     *
     * @return \AppBundle\Entity\Formation 
     */
    public function getFormation()
    {
        return $this->formation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add students
     *
     * @param \AppBundle\Entity\Student $students
     * @return Event
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
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     * @return Event
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set teacher
     *
     * @param \AppBundle\Entity\Teacher $teacher
     * @return Event
     */
    public function setTeacher(\AppBundle\Entity\Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \AppBundle\Entity\Teacher 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
