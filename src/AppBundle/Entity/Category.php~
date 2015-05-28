<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * 
     */
    private $name;

    /**
     * @var string
     * 
     *  
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     * 
     */
    private $sons;
    
    
    /**
     * @var string
     * 
     * @ORM\ManyToOne(targetEntity="Category" , inversedBy="sons")
     * @ORM\ JoinColumn(name="parent_id" , referencedColumnName="id")
     */
    private $parent;
    
    
    /**
     *
     * @var type 
     * 
     * @ORM\OneToMany(targetEntity="Formation" , mappedBy="formation")
     */
    private $formations;


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    

    
    /**
     * Set parent
     *
     * @param string $parent
     * @return Category
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sons
     *
     * @param \AppBundle\Entity\Category $sons
     * @return Category
     */
    public function addSon(\AppBundle\Entity\Category $sons)
    {
        $this->sons[] = $sons;

        return $this;
    }

    /**
     * Remove sons
     *
     * @param \AppBundle\Entity\Category $sons
     */
    public function removeSon(\AppBundle\Entity\Category $sons)
    {
        $this->sons->removeElement($sons);
    }

    /**
     * Get sons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSons()
    {
        return $this->sons;
    }

    /**
     * Add formations
     *
     * @param \AppBundle\Entity\Formation $formations
     * @return Category
     */
    public function addFormation(\AppBundle\Entity\Formation $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \AppBundle\Entity\Formation $formations
     */
    public function removeFormation(\AppBundle\Entity\Formation $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormations()
    {
        return $this->formations;
    }
}
