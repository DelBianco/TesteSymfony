<?php

namespace EventWeb\EventFormBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EventWeb\EventFormBundle\Entity\Acompanhantes;
use EventWeb\EventFormBundle\Form\AcompanhantesType;

/**
 * Acompanhantes controller.
 *
 */
class AcompanhantesController extends Controller
{

    /**
     * Lists all Acompanhantes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventFormBundle:Acompanhantes')->findAll();

        return $this->render('EventFormBundle:Acompanhantes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Acompanhantes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Acompanhantes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('acompanhantes_show', array('id' => $entity->getId())));
        }

        return $this->render('EventFormBundle:Acompanhantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Acompanhantes entity.
     *
     * @param Acompanhantes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Acompanhantes $entity)
    {
        $form = $this->createForm(new AcompanhantesType(), $entity, array(
            'action' => $this->generateUrl('acompanhantes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Acompanhantes entity.
     *
     */
    public function newAction()
    {
        $entity = new Acompanhantes();
        $form   = $this->createCreateForm($entity);

        return $this->render('EventFormBundle:Acompanhantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acompanhantes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Acompanhantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acompanhantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:Acompanhantes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acompanhantes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Acompanhantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acompanhantes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:Acompanhantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Acompanhantes entity.
    *
    * @param Acompanhantes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Acompanhantes $entity)
    {
        $form = $this->createForm(new AcompanhantesType(), $entity, array(
            'action' => $this->generateUrl('acompanhantes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Acompanhantes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Acompanhantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acompanhantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('acompanhantes_edit', array('id' => $id)));
        }

        return $this->render('EventFormBundle:Acompanhantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Acompanhantes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventFormBundle:Acompanhantes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Acompanhantes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('acompanhantes'));
    }

    /**
     * Creates a form to delete a Acompanhantes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acompanhantes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
