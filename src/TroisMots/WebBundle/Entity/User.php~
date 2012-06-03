<?php

namespace TroisMots\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="TroisMots\WebBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */	
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */    
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */    
    protected $username;

    /**
     * @ORM\OneToMany(targetEntity="Opinion", mappedBy="receiver", cascade={"persist", "remove", "merge"}, orphanRemoval=true)
     */
    protected $opinionsReceived;

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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
    public function __construct()
    {
        $this->opinionsReceived = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add opinionsReceived
     *
     * @param TroisMots\WebBundle\Entity\Opinion $opinionsReceived
     */
    public function addOpinion(\TroisMots\WebBundle\Entity\Opinion $opinionsReceived)
    {
        $this->opinionsReceived[] = $opinionsReceived;
    }

    /**
     * Get opinionsReceived
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOpinionsReceived()
    {
        return $this->opinionsReceived;
    }
}