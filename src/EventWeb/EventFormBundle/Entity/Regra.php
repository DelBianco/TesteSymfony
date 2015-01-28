<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Regra
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\RegraRepository")
 */
class Regra
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
     * @ORM\ManyToOne(targetEntity="Evento", inversedBy="id")
     * 
     */
    private $Evento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     * @Assert\Choice(callback = "regrasDefinidas")
     */
    private $regra;
    
    public function __construct($Evento, $regra) {
        $this->Evento = $Evento;
        $this->regra = $regra;
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
     * Set Evento
     *
     * @param integer $Evento
     * @return Regra
     */
    public function setEvento($Evento)
    {
        $this->Evento = $Evento;

        return $this;
    }

    /**
     * Get Evento
     *
     * @return integer 
     */
    public function getEvento()
    {
        return $this->Evento;
    }
    
    /**
     * Set regra
     *
     * @param string $regra
     * @return Regra
     */
    public function setRegra($regra)
    {
        if (in_array($regra, $this->regrasDefinidas()))
            {
                $this->regra = $regra;
                return $this;
            }else{
                die('Regra Inexistente!! crie a regra na entidade Regra');
            }

    }

    /**
     * Get regra
     *
     * @return string 
     */
    public function getRegra()
    {
        return $this->regra;
    }
    
    public static function regrasDefinidas()
    {
        return array('periodo_de_inscricao','sistema_de_socios','acompanhantes');
    }
}
