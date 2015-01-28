<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoDeInscricao
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\PeriodoDeInscricaoRepository")
 */
class PeriodoDeInscricao
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
     * @ORM\ManyToOne(targetEntity="Regra", inversedBy="id")
     */
    private $Regra;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Periodo", inversedBy="id")
     */
    private $Periodo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="id")
     */
    private $Categoria;

    /**
     * @var float
     *
     * @ORM\Column(name="preco", type="float")
     */
    private $preco;
    

    public function __construct($Regra, $Periodo, $Categoria, $preco = null) {
        $this->Regra = $Regra;
        $this->Periodo = $Periodo;
        $this->Categoria = $Categoria;
        $this->preco = $preco;
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
     * Set Regra
     *
     * @param integer $Regra
     * @return PeriodoDeInscricao
     */
    public function setRegra($Regra)
    {
        $this->Regra = $Regra;

        return $this;
    }

    /**
     * Get Regra
     *
     * @return integer 
     */
    public function getRegra()
    {
        return $this->Regra;
    }
    
    /**
     * Set Periodo
     *
     * @param integer $Periodo
     * @return Evento
     */
    public function setPeriodo($Periodo)
    {
        $this->Periodo = $Periodo;

        return $this;
    }

    /**
     * Get Periodo
     *
     * @return integer 
     */
    public function getPeriodo()
    {
        return $this->Periodo;
    }
    /**
     * Set Categoria
     *
     * @param integer $Categoria
     * @return PeriodoDeInscricao
     */
    public function setCategoria($Categoria)
    {
        $this->Categoria = $Categoria;

        return $this;
    }

    /**
     * Get Categoria
     *
     * @return integer 
     */
    public function getCategoria()
    {
        return $this->Categoria;
    }

    /**
     * Set preco
     *
     * @param float $preco
     * @return PeriodoDeInscricao
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return float 
     */
    public function getPreco()
    {
        return $this->preco;
    }
}
