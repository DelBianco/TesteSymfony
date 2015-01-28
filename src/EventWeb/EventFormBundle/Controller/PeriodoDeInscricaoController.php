<?php

namespace EventWeb\EventFormBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EventWeb\EventFormBundle\Entity\PeriodoDeInscricao;
use EventWeb\EventFormBundle\Form\PeriodoDeInscricaoType;

/**
 * PeriodoDeInscricao controller.
 *
 */
class PeriodoDeInscricaoController extends Controller
{

    /**
     * Lists all PeriodoDeInscricao entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventFormBundle:PeriodoDeInscricao')->findAll();

        return $this->render('EventFormBundle:PeriodoDeInscricao:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PeriodoDeInscricao entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PeriodoDeInscricao();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('periododeinscricao_show', array('id' => $entity->getId())));
        }

        return $this->render('EventFormBundle:PeriodoDeInscricao:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PeriodoDeInscricao entity.
     *
     * @param PeriodoDeInscricao $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PeriodoDeInscricao $entity)
    {
        $form = $this->createForm(new PeriodoDeInscricaoType(), $entity, array(
            'action' => $this->generateUrl('periododeinscricao_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PeriodoDeInscricao entity.
     *
     */
    public function newAction()
    {
        $entity = new PeriodoDeInscricao();
        $form   = $this->createCreateForm($entity);

        return $this->render('EventFormBundle:PeriodoDeInscricao:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PeriodoDeInscricao entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:PeriodoDeInscricao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PeriodoDeInscricao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:PeriodoDeInscricao:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PeriodoDeInscricao entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:PeriodoDeInscricao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PeriodoDeInscricao entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:PeriodoDeInscricao:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PeriodoDeInscricao entity.
    *
    * @param PeriodoDeInscricao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PeriodoDeInscricao $entity)
    {
        $form = $this->createForm(new PeriodoDeInscricaoType(), $entity, array(
            'action' => $this->generateUrl('periododeinscricao_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PeriodoDeInscricao entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:PeriodoDeInscricao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PeriodoDeInscricao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('periododeinscricao_edit', array('id' => $id)));
        }

        return $this->render('EventFormBundle:PeriodoDeInscricao:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PeriodoDeInscricao entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventFormBundle:PeriodoDeInscricao')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PeriodoDeInscricao entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('periododeinscricao'));
    }

    /**
     * Creates a form to delete a PeriodoDeInscricao entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('periododeinscricao_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
