<?php

namespace EventWeb\EventFormBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EventWeb\EventFormBundle\Entity\Categoria;
use EventWeb\EventFormBundle\Form\CategoriaType;


/**
 * Categoria controller.
 *
 */
class CategoriaController extends Controller
{
    /**
     * Lists all Categoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EventFormBundle:Categoria')->findAll();

        return $this->render('EventFormBundle:Categoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
 
    public function createAction(Request $request)
    {
        $entity = new Categoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_show', array('id' => $entity->getId())));
        }

        return $this->render('EventFormBundle:Categoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Categoria entity.
     *
     * @param Categoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categoria $entity)
    {
        $form = $this->createForm(new CategoriaType(), $entity, array(
            'action' => $this->generateUrl('categoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    /**
     * Persiste a nova categoria no banco retorna o evento a que pertence
     *
     */
    public function persistCategoria(Request $request, $evento_id){
        $Categoria = new Categoria();
        $form = $this->createFormBuilder($Categoria)
            ->add('Nome', 'text')
            ->add('Descricao', 'textarea')
            ->add('Comprovante', 'text')
            ->add('ExigeCompParaLiberarPagamento', 'checkbox')
            ->getForm();
        if('POST' == $request->getMethod()){
            $form->bind($request);
            $Evento = $this->getDoctrine()->getManager()->getRepository('EventWeb\EventFormBundle\Entity\Evento')->find($evento_id);
            if ($form->isValid()) {
                $Categoria = $form->getData();
                $Categoria->setEvento($Evento);
                $em = $this->getDoctrine()->getManager();
                $em->persist($Categoria);
                $em->flush();
                return $Evento;
            }
        }
        return $evento_id;
    }
    
    /**
     * Persiste a categora criada no banco e
     * chama novamente a Action para criar uma nova categoria
     * 
     */
    public function adicionarMaisCategoriasAction(Request $request, $evento_id){
        
        $this->persistCategoria($request, $evento_id);
        
        return $this->newAction($evento_id);
    }
    
    public function PersisteEProximoAction(Request $request, $evento_id){
        if('POST' == $request->getMethod()){
            $this->persistCategoria($request,$evento_id);
        }
        return $this->forward('EventFormBundle:MetodoDePagamento:new', array('evento_id' => $evento_id));
    }
    
    /**
     * Displays a form to create a new Categoria entity.
     *
     */
    public function newAction($evento_id)
    {
        $Categoria = new Categoria();
        
        $form = $this->createFormBuilder($Categoria)
            ->add('Nome', 'text')
            ->add('Descricao', 'textarea')
            ->add('Comprovante', 'text')
            ->add('ExigeCompParaLiberarPagamento', 'checkbox')
            ->getForm();
        
        return $this->render('EventFormBundle:Categoria:new.html.twig', array(
            'form'   => $form->createView(),
            'evento_id' => $evento_id,
            
        ));
    }

    /**
     * Finds and displays a Categoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:Categoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Categoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EventFormBundle:Categoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Categoria entity.
    *
    * @param Categoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categoria $entity)
    {
        $form = $this->createForm(new CategoriaType(), $entity, array(
            'action' => $this->generateUrl('categoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Categoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EventFormBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_edit', array('id' => $id)));
        }

        return $this->render('EventFormBundle:Categoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Categoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EventFormBundle:Categoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoria'));
    }

    /**
     * Creates a form to delete a Categoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
