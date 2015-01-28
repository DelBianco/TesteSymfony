<?php

namespace EventWeb\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class UserRepository extends EntityRepository Implements UserProviderInterface
{
    public function findOneByUsernameOrEmail($user){
        
        return $this->createQueryBuilder("u")
                ->where("u.username = :username or u.email = :email")
                ->setParameter("username", $user)
                ->setParameter("email", $user)
                ->getQuery()
                ->getOneOrNullResult();
        
    }

    public function loadUserByUsername($username) {
        $user = $this->findOneByUsernameOrEmail($username);
        
        if(!$user){
            throw new UsernameNotFoundException("Usuário não existe ou nao foi possivel acessa-lo");
        }
        return $user;
    }

    public function refreshUser(UserInterface $user) {
        $class = get_class($user);
        if (!$this->supportsClass($class)){
            throw new UnsupportedUserException("Erro. Classe nao suportada");
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return $this->getEntityName() == $class || is_subclass_of($class, $this->getEntityName());
    }

}
