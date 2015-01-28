<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\CategoriaRepository")
 */
class Categoria
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
     * @ORM\ManyToOne(targetEntity="Evento")
     * 
     */
    private $Evento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="comprovante", type="string", length=255, nullable=true)
     */
    private $comprovante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exigeCompParaLiberarPagamento", type="boolean")
     */
    private $exigeCompParaLiberarPagamento = false;
  

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
     * @return Categoria
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
     * Set nome
     *
     * @param string $nome
     * @return Categoria
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Categoria
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

    /**
     * Set comprovante
     *
     * @param string $comprovante
     * @return Categoria
     */
    public function setComprovante($comprovante)
    {
        $this->comprovante = $comprovante;

        return $this;
    }

    /**
     * Get comprovante
     *
     * @return string 
     */
    public function getComprovante()
    {
        return $this->comprovante;
    }

    /**
     * Set exigeCompParaLiberarPagamento
     *
     * @param boolean $exigeCompParaLiberarPagamento
     * @return Categoria
     */
    public function setExigeCompParaLiberarPagamento($exigeCompParaLiberarPagamento)
    {
        $this->exigeCompParaLiberarPagamento = $exigeCompParaLiberarPagamento;

        return $this;
    }

    /**
     * Get exigeCompParaLiberarPagamento
     *
     * @return boolean 
     */
    public function getExigeCompParaLiberarPagamento()
    {
        return $this->exigeCompParaLiberarPagamento;
    }
}
