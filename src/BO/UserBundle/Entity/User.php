<?php
// src/UserBundle/Entity/User.php

namespace BO\UserBundle\Entity;

//use FOS\UserBundle\Entity\User as BaseUser;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

//**
// * @ORM\Entity
// * @ORM\Table(name="fos_user")
// */
//class User extends BaseUser

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements ParticipantInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//
   /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $usernameCanonical;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $emailCanonical;

    /**
     * @var bool
     * 
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    protected $enabled;

    /**
     * The salt to use for hashing
     *
     * @ORM\Column(name="salt", type="string")
     */
    protected $salt;

    /**
    * @ORM\Column(name="password",
     *  type="string", nullable=false)
    * @Assert\NotBlank(message="Please enter a password.")
    * @Assert\Length(
    *     min = 7,
    *     minMessage = "Your password must be at least {{ limit }} characters long."
    * )
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @Assert\NotBlank(message="Please enter a confirmation password.")
     */
    protected $plainPassword;

    /**
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * Random string sent to the user email address in order to verify it
     *
     * @var string
     * @ORM\Column(name="confirmation_token", type="string", nullable=true)
     */
    protected $confirmationToken;

    /**
     * @var \DateTime
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    protected $passwordRequestedAt;

    /**
     * @var bool
     * 
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    protected $locked;

    /**
     * @var bool
     * 
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    protected $expired;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="expires_At", type="datetime", nullable=true)
     */
    protected $expiresAt;

    /**
     * @ORM\Column(type="array")
     */
    protected $roles;

    /**
     * @var bool
     * 
     * @ORM\Column(name="credentials_Expired", type="boolean", nullable=false)
     */
    protected $credentialsExpired;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="credentials_Expire_At", type="datetime", nullable=true)
     */
    protected $credentialsExpireAt;
      
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//    
//****************************************************************************//
    /**
     * @ORM\ManyToOne(targetEntity="BO\UserBundle\Entity\Governate")
     * @ORM\JoinColumn(nullable=true)
     */
    private $governate;
    
    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     */
    private $tel;

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set governate
     *
     * @param \BO\UserBundle\Entity\Governate $governate
     *
     * @return User
     */
    public function setGovernate(\BO\UserBundle\Entity\Governate $governate)
    {
        $this->governate = $governate;

        return $this;
    }

    /**
     * Get governate
     *
     * @return \BO\UserBundle\Entity\Governate
     */
    public function getGovernate()
    {
        return $this->governate;
    }
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_USER');
    }
}