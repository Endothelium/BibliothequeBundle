<?php

namespace Projet\BibliothequeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projet\BibliothequeBundle\Entity\Cycle;
use Projet\BibliothequeBundle\Form\CycleType;

/**
 * Cycle controller.
 *
 */
class CycleController extends Controller
{

    /**
     * Lists all Cycle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetBibliothequeBundle:Cycle')->findAll();

        return $this->render('ProjetBibliothequeBundle:Cycle:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Cycle entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Cycle();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cycle_show', array('id' => $entity->getId())));
        }

        return $this->render('ProjetBibliothequeBundle:Cycle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cycle entity.
     *
     * @param Cycle $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cycle $entity)
    {
        $form = $this->createForm(new CycleType(), $entity, array(
            'action' => $this->generateUrl('cycle_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cycle entity.
     *
     */
    public function newAction()
    {
        $entity = new Cycle();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProjetBibliothequeBundle:Cycle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cycle entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Cycle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cycle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Cycle:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cycle entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Cycle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cycle entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Cycle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cycle entity.
    *
    * @param Cycle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cycle $entity)
    {
        $form = $this->createForm(new CycleType(), $entity, array(
            'action' => $this->generateUrl('cycle_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cycle entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Cycle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cycle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cycle_edit', array('id' => $id)));
        }

        return $this->render('ProjetBibliothequeBundle:Cycle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cycle entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProjetBibliothequeBundle:Cycle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cycle entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cycle'));
    }

    /**
     * Creates a form to delete a Cycle entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cycle_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
