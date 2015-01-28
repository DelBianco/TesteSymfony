<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MetodoDePagamento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\MetodoDePagamentoRepository")
 */
class MetodoDePagamento
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     * @Assert\Choice(callback = "metodosDePagamentoDefinidos")
     */
    private $tipo;

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
     * @return MetodoDePagamento
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
     * @return MetodoDePagamento
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
     * Set tipo
     *
     * @param string $tipo
     * @return MetodoDePagamento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function metodosDePagamentoDefinidos(){
        return array('boleto_bancario','credito_cielo','credito_redecard','paypal','pagseguro');
    }
}
