<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Periodo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\PeriodoRepository")
 */
class Periodo
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
     */
    private $Evento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="datetime")
     */
    private $dataInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="datetime")
     */
    private $dataFinal;
    
    
    public function __construct($Evento, \DateTime $dataInicio, \DateTime $dataFinal) {
        $this->Evento = $Evento;
        $this->dataInicio = $dataInicio;
        $this->dataFinal = $dataFinal;
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
     * @return Periodo
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
     * Set dataInicio
     *
     * @param \DateTime $dataInicio
     * @return Periodo
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get dataInicio
     *
     * @return \DateTime 
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     * @return Periodo
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime 
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }
}
