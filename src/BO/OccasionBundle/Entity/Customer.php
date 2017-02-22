<?php

namespace BO\OccasionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="BO\OccasionBundle\Repository\CustomerRepository")
 */
class Customer
{



    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lnamecust", type="string", length=255, nullable=true)
     */
    private $lnamecust;

    /**
     * @var string
     *
     * @ORM\Column(name="fnamecust", type="string", length=255, nullable=true)
     */
    private $fnamecust;
    
    /**
     * @var int
     *
     * @ORM\Column(name="telcust", type="integer", nullable=true)
     */
    private $telcust;

    /**
     * @ORM\ManyToOne(targetEntity="BO\OccasionBundle\Entity\Governate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governate;

    
    /*
     * @ORM\OneToOne(targetEntity="BO\OccasionBundle\Entity\Account", mappedBy="customer", cascade={"persist", "remove"})
     * @Assert\Valid()
     *
    private $account; */   
    
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lnamecust
     *
     * @param string $lnamecust
     *
     * @return Customer
     */
    public function setLnamecust($lnamecust)
    {
        $this->lnamecust = $lnamecust;

        return $this;
    }

    /**
     * Get lnamecust
     *
     * @return string
     */
    public function getLnamecust()
    {
        return $this->lnamecust;
    }

    /**
     * Set fnamecust
     *
     * @param string $fnamecust
     *
     * @return Customer
     */
    public function setFnamecust($fnamecust)
    {
        $this->fnamecust = $fnamecust;

        return $this;
    }

    /**
     * Get fnamecust
     *
     * @return string
     */
    public function getFnamecust()
    {
        return $this->fnamecust;
    }

    /**
     * Set civilcust
     *
     * @param string $civilcust
     *
     * @return Customer
     */
    public function setCivilcust($civilcust)
    {
        $this->civilcust = $civilcust;

        return $this;
    }

    /**
     * Get civilcust
     *
     * @return string
     */
    public function getCivilcust()
    {
        return $this->civilcust;
    }

    /**
     * Set funccust
     *
     * @param string $funccust
     *
     * @return Customer
     */
    public function setFunccust($funccust)
    {
        $this->funccust = $funccust;

        return $this;
    }

    /**
     * Get funccust
     *
     * @return string
     */
    public function getFunccust()
    {
        return $this->funccust;
    }

    /**
     * Set levelcust
     *
     * @param string $levelcust
     *
     * @return Customer
     */
    public function setLevelcust($levelcust)
    {
        $this->levelcust = $levelcust;

        return $this;
    }

    /**
     * Get levelcust
     *
     * @return string
     */
    public function getLevelcust()
    {
        return $this->levelcust;
    }

    /**
     * Set citycust
     *
     * @param string $citycust
     *
     * @return Customer
     */
    public function setCitycust($citycust)
    {
        $this->citycust = $citycust;

        return $this;
    }

    /**
     * Get citycust
     *
     * @return string
     */
    public function getCitycust()
    {
        return $this->citycust;
    }

    /**
     * Set telcust
     *
     * @param integer $telcust
     *
     * @return Customer
     */
    public function setTelcust($telcust)
    {
        $this->telcust = $telcust;

        return $this;
    }

    /**
     * Get telcust
     *
     * @return int
     */
    public function getTelcust()
    {
        return $this->telcust;
    }

    /**
     * Set sexcust
     *
     * @param string $sexcust
     *
     * @return Customer
     */
    public function setSexcust($sexcust)
    {
        $this->sexcust = $sexcust;

        return $this;
    }

    /**
     * Get sexcust
     *
     * @return string
     */
    public function getSexcust()
    {
        return $this->sexcust;
    }

    /**
     * Set governate
     *
     * @param \BO\OccasionBundle\Entity\Governate $governate
     *
     * @return Customer
     */
    public function setGovernate(\BO\OccasionBundle\Entity\Governate $governate)
    {
        $this->governate = $governate;

        return $this;
    }

    /**
     * Get governate
     *
     * @return \BO\OccasionBundle\Entity\Governate
     */
    public function getGovernate()
    {
        return $this->governate;
    }
}
