<?php

namespace TroisMots\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="TroisMots\WebBundle\Repository\OpinionRepository")
 * @ORM\Table(name="opinion")
 */
class Opinion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */	
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="opinions")
     */
    protected $sender;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="opinions")
     */
    protected $receiver;

   /**
     * @ORM\ManyToMany(targetEntity="Word", inversedBy="opinions")
     * @ORM\JoinTable(name="opinion_word",
     *      joinColumns={@ORM\JoinColumn(name="opinion_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="word_id", referencedColumnName="id")}
     *      )
     */    
    protected $words;

    public function __construct()
    {
        $this->words = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set sender
     *
     * @param TroisMots\WebBundle\Entity\User $sender
     */
    public function setSender(\TroisMots\WebBundle\Entity\User $sender)
    {
        $this->sender = $sender;
    }

    /**
     * Get sender
     *
     * @return TroisMots\WebBundle\Entity\User 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param TroisMots\WebBundle\Entity\User $receiver
     */
    public function setReceiver(\TroisMots\WebBundle\Entity\User $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Get receiver
     *
     * @return TroisMots\WebBundle\Entity\User 
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Add words
     *
     * @param TroisMots\WebBundle\Entity\Word $words
     */
    public function addWord(\TroisMots\WebBundle\Entity\Word $words)
    {
        $this->words[] = $words;
    }

    /**
     * Get words
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getWords()
    {
        return $this->words;
    }
}