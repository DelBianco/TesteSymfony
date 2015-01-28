<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acompanhantes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\AcompanhantesRepository")
 */
class Acompanhantes
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
     * @ORM\Column(name="numeroMaximo", type="integer")
     */
    private $numeroMaximo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="id")
     */
    private $Categoria;


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
     * @return Acompanhantes
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
     * Set numeroMaximo
     *
     * @param integer $numeroMaximo
     * @return Acompanhantes
     */
    public function setNumeroMaximo($numeroMaximo)
    {
        $this->numeroMaximo = $numeroMaximo;

        return $this;
    }

    /**
     * Get numeroMaximo
     *
     * @return integer 
     */
    public function getNumeroMaximo()
    {
        return $this->numeroMaximo;
    }

    /**
     * Set Categoria
     *
     * @param integer $Categoria
     * @return Acompanhantes
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
}
