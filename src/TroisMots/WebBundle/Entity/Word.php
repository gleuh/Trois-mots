<?php

namespace TroisMots\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="TroisMots\WebBundle\Repository\WordRepository")
 * @ORM\Table(name="word")
 */
class Word
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
    protected $word;

    //protected $opinions;

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
     * Set word
     *
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }
}