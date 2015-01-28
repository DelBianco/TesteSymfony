<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistemaDeSocios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\SistemaDeSociosRepository")
 */
class SistemaDeSocios
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
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255)
     */
    private $descricao;

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
     * @return SistemaDeSocios
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
     * Set descricao
     *
     * @param string $descricao
     * @return SistemaDeSocios
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}
