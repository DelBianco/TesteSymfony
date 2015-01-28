<?php

namespace EventWeb\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventWeb\UserBundle\Entity\UserRepository")
 * @UniqueEntity(
 *     fields={"username", "email"},
 *     errorPath="register",
 *     message="Nome de usuário ou e-mail já cadastrado"
 * )
 */
class User implements AdvancedUserInterface
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
     * @ORM\Column(name="username", type="string", length=255)
     * 
     */
    private $username;

    /**
     * @var string
     * 
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;
    
    /**
     * @var array
     * @ORM\Column(type="array")
     */
    private $roles = array();
    
    
     /**
     * @var string
     * @ORM\Column(type="string",length=255)
     * @Assert\Email(message="Entre com um e-mail válido")
     */
    private $email;
    
    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    
     /**
     * @var string
     */
    private $plainPassword; //será removida pelo eraseCredentials
 
    
    public function __construct(){
        $this->salt = base_convert(sha1(uniqid(mt_rand(),true)), 16, 36);
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }
    
    public function getRoles(){
        $roles = $this->roles;
        $roles[] = "ROLE_USER";
        return array_unique($roles);
    }
    
    public function setRoles(array $roles){
        $this->roles = $roles;
    }
    
    public function equals(UserInterface $user){
        return $this->getId() == $user->getId();
        
    }
    function getIsActive() {
        return $this->isActive;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }
    public function eraseCredentials() {
        $this->setPlainPassword(null);
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->getIsActive();
    }
    
    public function serialize() {
        return serialize(
                array(
                    'id' => $this->getId() 
                ));
    }
    
    public function unserialize($serialized) {
        $data = unserialize($serialized);
        $this->id = $data['id'];
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
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
    public function getPlainPassword(){
        return $this->plainPassword;   
    }
    public function setPlainPassword($plainPassword){
        $this->plainPassword = $plainPassword;
    }



}
