<?php

namespace Projet\BibliothequeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projet\BibliothequeBundle\Entity\Exemplaire;
use Projet\BibliothequeBundle\Form\ExemplaireType;

/**
 * Exemplaire controller.
 *
 */
class ExemplaireController extends Controller
{

    /**
     * Lists all Exemplaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjetBibliothequeBundle:Exemplaire')->findAll();

        return $this->render('ProjetBibliothequeBundle:Exemplaire:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Exemplaire entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Exemplaire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('exemplaire_show', array('id' => $entity->getId())));
        }

        return $this->render('ProjetBibliothequeBundle:Exemplaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Exemplaire entity.
     *
     * @param Exemplaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Exemplaire $entity)
    {
        $form = $this->createForm(new ExemplaireType(), $entity, array(
            'action' => $this->generateUrl('exemplaire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Exemplaire entity.
     *
     */
    public function newAction()
    {
        $entity = new Exemplaire();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProjetBibliothequeBundle:Exemplaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Exemplaire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Exemplaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exemplaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Exemplaire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Exemplaire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Exemplaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exemplaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjetBibliothequeBundle:Exemplaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Exemplaire entity.
    *
    * @param Exemplaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Exemplaire $entity)
    {
        $form = $this->createForm(new ExemplaireType(), $entity, array(
            'action' => $this->generateUrl('exemplaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Exemplaire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjetBibliothequeBundle:Exemplaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Exemplaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('exemplaire_edit', array('id' => $id)));
        }

        return $this->render('ProjetBibliothequeBundle:Exemplaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Exemplaire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProjetBibliothequeBundle:Exemplaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Exemplaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('exemplaire'));
    }

    /**
     * Creates a form to delete a Exemplaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('exemplaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
