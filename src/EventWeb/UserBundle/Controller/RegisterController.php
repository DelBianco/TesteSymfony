<?php

namespace EventWeb\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use EventWeb\UserBundle\Entity\User;
use EventWeb\UserBundle\Form\RegisterFormType;

class RegisterController extends Controller{
    
    /**
     * @Route("/register", name="user_register")
     * @Template()
     */
    
    public function registerAction(Request $request){
        
        $defaultData = new User;
        $form = $this->createForm(new RegisterFormType(),$defaultData);
        
        if('POST'==$request->getMethod()){
            $form->bind($request);
            if ($form->isValid()){
                
                $user = $form->getData();
                $user->setPassword($this->encodePassword($user,$user->getPlainPassword()));
                $user->setRoles(array('USER_ROLE'));
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                return $this->redirect('/');
            }
        }
        return array("form" => $form->createView());
    }
    
     private function encodePassword($user,$plainPassword){
        $encoder = $this->container->get("security.encoder_factory")
                ->getEncoder($user);
        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
    
}

