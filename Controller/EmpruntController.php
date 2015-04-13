<?php

namespace Projet\BibliothequeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projet\BibliothequeBundle\Entity\Emprunt;
use Projet\BibliothequeBundle\Form\EmpruntType;

/**
 * Emprunt controller.
 *
 */
class EmpruntController extends Controller
{

    /**
     * Lists all Emprunt entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetBibliothequeBundle:Emprunt')->findAll();

        return $this->render('ProjetBibliothequeBundle:Emprunt:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Emprunt entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Emprunt();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emprunt_show', array('id' => $entity->getId())));
        }

        return $this->render('ProjetBibliothequeBundle:Emprunt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Emprunt entity.
     *
     * @param Emprunt $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Emprunt $entity)
    {
        $form = $this->createForm(new EmpruntType(), $entity, array(
            'action' => $this->generateUrl('emprunt_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Emprunt entity.
     *
     */
    public function newAction()
    {
        $entity = new Emprunt();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProjetBibliothequeBundle:Emprunt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Emprunt entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Emprunt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emprunt entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Emprunt:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Emprunt entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Emprunt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emprunt entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Emprunt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Emprunt entity.
    *
    * @param Emprunt $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Emprunt $entity)
    {
        $form = $this->createForm(new EmpruntType(), $entity, array(
            'action' => $this->generateUrl('emprunt_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Emprunt entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Emprunt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emprunt entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('emprunt_edit', array('id' => $id)));
        }

        return $this->render('ProjetBibliothequeBundle:Emprunt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Emprunt entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProjetBibliothequeBundle:Emprunt')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Emprunt entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('emprunt'));
    }

    /**
     * Creates a form to delete a Emprunt entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emprunt_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
