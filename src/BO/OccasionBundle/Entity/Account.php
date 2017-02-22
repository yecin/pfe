<?php

namespace BO\OccasionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="BO\OccasionBundle\Repository\accountRepository")
 */
class Account
{
    /**
     * @ORM\OneToOne(targetEntity="BO\OccasionBundle\Entity\Customer", inversedBy="account",cascade={"persist"})
     */
    private $customer;
    
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="lastpassword", type="string", length=255)
     */
    private $lastpassword;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;  
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inscriptiondate", type="datetime")
     */
    private $inscriptiondate;

    public function __construct()
    {
        $this->inscriptiondate = new \DateTime('now');
    }
    
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
     * Set email
     *
     * @param string $email
     *
     * @return account
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

    /**
     * Set login
     *
     * @param string $login
     *
     * @return account
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastpassword
     *
     * @param string $lastpassword
     *
     * @return account
     */
    public function setLastpassword($lastpassword)
    {
        $this->lastpassword = $lastpassword;

        return $this;
    }

    /**
     * Get lastpassword
     *
     * @return string
     */
    public function getLastpassword()
    {
        return $this->lastpassword;
    }

    /**
     * Set inscriptiondate
     *
     * @param \DateTime $inscriptiondate
     *
     * @return account
     */
    public function setInscriptiondate($inscriptiondate)
    {
        $this->inscriptiondate = $inscriptiondate;

        return $this;
    }

    /**
     * Get inscriptiondate
     *
     * @return \DateTime
     */
    public function getInscriptiondate()
    {
        return $this->inscriptiondate;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Account
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Account
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set customer
     *
     * @param \BO\OccasionBundle\Entity\Customer $customer
     *
     * @return Account
     */
    public function setCustomer(\BO\OccasionBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \BO\OccasionBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
