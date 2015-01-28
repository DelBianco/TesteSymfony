<?php

namespace EventWeb\EventFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\EventFormBundle\Entity\EventoRepository")
 */
class Evento
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="inicio", type="datetime")
     */
    private $inicio;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="fim", type="datetime")
     */
    private $fim;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255)
     */
    private $telefone;


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
     * Set nome
     *
     * @param string $nome
     * @return Evento
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
     * Get inicio
     *
     * @return \DateTime 
     */
    function getInicio() {
        return $this->inicio;
    }
    
    /**
     * Get fim
     *
     * @return \DateTime 
     */
    function getFim() {
        return $this->fim;
    }
    
    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Evento
     */
    function setInicio($inicio) {
        $this->inicio = $inicio;
    }
    
    /**
     * Set fim
     *
     * @param \DateTime $fim
     * @return Evento
     */
    function setFim($fim) {
        $this->fim = $fim;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Evento
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Evento
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Evento
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
}
