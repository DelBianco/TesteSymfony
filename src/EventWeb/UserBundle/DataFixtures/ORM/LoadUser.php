<?php


namespace EventWeb\UserBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use EventWeb\UserBundle\Entity\User;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadUser extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername("user");
        $user->setPassword($this->encodePassword($user,"userpass"));
        $user->setEmail("user@aptor.com");
        $user->setRoles(array("ROLE_USER"));
        $user->setIsActive(true);
        $manager->persist($user);
        
        $this->addReference("user-user", $user);
        
        $admin = new User();
        $admin->setUsername("admin");
        $admin->setEmail("admin@aptor.com");
        $admin->setRoles(array("ROLE_ADMIN"));
        
        $admin->setPassword($this->encodePassword($admin,"adminpass"));
        $manager->persist($admin);
        
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    private function encodePassword($user,$plainPassword){
        $encoder = $this->container->get("security.encoder_factory")
                ->getEncoder($user);
        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }

    public function getOrder() {
        return 10;
    }

}