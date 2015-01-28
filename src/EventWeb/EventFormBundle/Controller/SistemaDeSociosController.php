<?php

namespace EventWeb\EventFormBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EventWeb\EventFormBundle\Entity\SistemaDeSocios;
use EventWeb\EventFormBundle\Form\SistemaDeSociosType;

/**
 * SistemaDeSocios controller.
 *
 */
class SistemaDeSociosController extends Controller
{

    /**
     * Lists all SistemaDeSocios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventFormBundle:SistemaDeSocios')->findAll();

        return $this->render('EventFormBundle:SistemaDeSocios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SistemaDeSocios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SistemaDeSocios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sistemadesocios_show', array('id' => $entity->getId())));
        }

        return $this->render('EventFormBundle:SistemaDeSocios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a SistemaDeSocios entity.
     *
     * @param SistemaDeSocios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SistemaDeSocios $entity)
    {
        $form = $this->createForm(new SistemaDeSociosType(), $entity, array(
            'action' => $this->generateUrl('sistemadesocios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SistemaDeSocios entity.
     *
     */
    public function newAction()
    {
        $entity = new SistemaDeSocios();
        $form   = $this->createCreateForm($entity);

        return $this->render('EventFormBundle:SistemaDeSocios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SistemaDeSocios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:SistemaDeSocios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SistemaDeSocios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:SistemaDeSocios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SistemaDeSocios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:SistemaDeSocios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SistemaDeSocios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:SistemaDeSocios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SistemaDeSocios entity.
    *
    * @param SistemaDeSocios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SistemaDeSocios $entity)
    {
        $form = $this->createForm(new SistemaDeSociosType(), $entity, array(
            'action' => $this->generateUrl('sistemadesocios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SistemaDeSocios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:SistemaDeSocios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SistemaDeSocios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sistemadesocios_edit', array('id' => $id)));
        }

        return $this->render('EventFormBundle:SistemaDeSocios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SistemaDeSocios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventFormBundle:SistemaDeSocios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SistemaDeSocios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sistemadesocios'));
    }

    /**
     * Creates a form to delete a SistemaDeSocios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sistemadesocios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
