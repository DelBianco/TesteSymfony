<?php

namespace EventWeb\EventFormBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EventWeb\EventFormBundle\Entity\MetodoDePagamento;
use EventWeb\EventFormBundle\Form\MetodoDePagamentoType;

/**
 * MetodoDePagamento controller.
 *
 */
class MetodoDePagamentoController extends Controller
{

    /**
     * Lists all MetodoDePagamento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventFormBundle:MetodoDePagamento')->findAll();

        return $this->render('EventFormBundle:MetodoDePagamento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MetodoDePagamento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MetodoDePagamento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('metododepagamento_show', array('id' => $entity->getId())));
        }

        return $this->render('EventFormBundle:MetodoDePagamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MetodoDePagamento entity.
     *
     * @param MetodoDePagamento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MetodoDePagamento $entity)
    {
        $form = $this->createForm(new MetodoDePagamentoType(), $entity, array(
            'action' => $this->generateUrl('metododepagamento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MetodoDePagamento entity.
     *
     */
    public function newAction($evento_id)
    {
        $MetodoDePagamento = new MetodoDePagamento();
        $form = $this->createFormBuilder($MetodoDePagamento)
            ->add('Nome', 'text')
            ->add('Tipo', 'textarea')
            ->getForm();
        
        return $this->render('EventFormBundle:MetodoDePagamento:new.html.twig', array(
            'form'   => $form->createView(),
            'evento_id' => $evento_id,
            
        ));
    }

    /**
     * Finds and displays a MetodoDePagamento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:MetodoDePagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MetodoDePagamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:MetodoDePagamento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MetodoDePagamento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:MetodoDePagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MetodoDePagamento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:MetodoDePagamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MetodoDePagamento entity.
    *
    * @param MetodoDePagamento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MetodoDePagamento $entity)
    {
        $form = $this->createForm(new MetodoDePagamentoType(), $entity, array(
            'action' => $this->generateUrl('metododepagamento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MetodoDePagamento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:MetodoDePagamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MetodoDePagamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('metododepagamento_edit', array('id' => $id)));
        }

        return $this->render('EventFormBundle:MetodoDePagamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MetodoDePagamento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventFormBundle:MetodoDePagamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MetodoDePagamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('metododepagamento'));
    }

    /**
     * Creates a form to delete a MetodoDePagamento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('metododepagamento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
