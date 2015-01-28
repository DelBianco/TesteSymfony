<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Interage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\InterageRepository")
 */
class Interage
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
     * @var integer
     * @ORM\ManyToOne(targetEntity="EventWeb\UserBundle\Entity\User", inversedBy="id")
     */
    private $user;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Evento", inversedBy="id")
     */
    private $evento;

    /**
     * @var string
     *
     * @ORM\Column(name="interacao", type="string", length=255)
     * @Assert\Choice(callback = "possiveisInteracoes")
     */
    private $interacao;


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
     * Set user
     *
     * @param integer $user
     * @return Interage
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set evento
     *
     * @param integer $evento
     * @return Interage
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento
     *
     * @return integer 
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Set interacao
     *
     * @param string $interacao
     * @return Interage
     */
    public function setInteracao($interacao)
    {
        $this->interacao = $interacao;

        return $this;
    }

    /**
     * Get interacao
     *
     * @return string 
     */
    public function getInteracao()
    {
        return $this->interacao;
    }
    
    
    public static function possiveisInteracaoes(){
        return array('create','read','update','delete');
        
    }
}
