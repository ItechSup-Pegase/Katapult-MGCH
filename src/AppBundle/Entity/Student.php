<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Person;

/**
 * Student
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\StudentRepository")
 */
class Student extends Person
{
    /**
     *
     * @var Client 
     * 
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="students")
     * @ORM\JoinColumn(name="client_id" , referencedColumnName="id")
     */
    private $client;
    
    /**
     * @var Arraycollection
     * 
     * @ORM\ManyToMany(targetEntity="Event", mappedBy="students")
     * 
     */
    private $events;

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     * @return Student
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add events
     *
     * @param \AppBundle\Entity\Event $events
     * @return Student
     */
    public function addEvent(\AppBundle\Entity\Event $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \AppBundle\Entity\Event $events
     */
    public function removeEvent(\AppBundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    
    public function __toString() {
        return $this->getFirstName().' '.$this->getLastName();
    }
     
    
}
