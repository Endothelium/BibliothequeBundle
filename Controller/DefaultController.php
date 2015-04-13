<?php

namespace Projet\BibliothequeBundle\Controller;

use Projet\BibliothequeBundle\Entity\Auteur;
use Projet\BibliothequeBundle\Entity\Cycle;
use Projet\BibliothequeBundle\Entity\Emprunt;
use Projet\BibliothequeBundle\Entity\Exemplaire;
use Projet\BibliothequeBundle\Entity\Faculte;
use Projet\BibliothequeBundle\Entity\Livre;
use Projet\BibliothequeBundle\Entity\Membre;
use Projet\BibliothequeBundle\Entity\Reservation;
use Projet\BibliothequeBundle\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
	  $user = $this->get('security.context')->getToken()->getUser();
      $chaineRoles = '';
      foreach ($user->getRoles() as $groupe)
         $chaineRoles .= ' '.$groupe;  
      return $this->render('ProjetBibliothequeBundle:Default:index.html.twig',array('roles' => $chaineRoles));

        // return $this->render('ProjetBibliothequeBundle:Default:index.html.twig');
    }
	
	public function test1Action(){
		echo("ACTION TEST");
		$entityManager = $this->getDoctrine()->getManager();
		$auteur = new Auteur();
		$cycle = new Cycle();
		$emprunt = new Emprunt();
		$exemplaire = new Exemplaire();
		$faculte = new Faculte();
		$livre = new Livre();
		$membre = new Membre();
		$reservation = new Reservation();
		$theme = new Theme();
		
		$auteur2 = new Auteur();
		$cycle2 = new Cycle();
		$emprunt2 = new Emprunt();
		$exemplaire2 = new Exemplaire();
		$faculte2 = new Faculte();
		$livre2 = new Livre();
		$membre2 = new Membre();
		$reservation2 = new Reservation();
		$theme2 = new Theme();
		
		$auteur->setNom('Pierre');
		$auteur->setPrenom('Paul');
		$auteur2->setNom('Bernard');
		$auteur2->setPrenom('Gerard');
		print_r($auteur);
		$entityManager->persist($auteur);
		$entityManager->persist($auteur2);
		$entityManager->flush();
		
		$cycle->setNbJours(15);
		$cycle->setNbLivres(100);
		$cycle2->setNbJours(30);
		$cycle2->setNbLivres(100);
		$entityManager->persist($cycle);
		$entityManager->persist($cycle2);
		$entityManager->flush();
		
		$faculte->setDesignation('Lycée louis thuillier');
		$faculte2->setDesignation('Lycée la providence');
		$entityManager->persist($faculte);
		$entityManager->persist($faculte2);
		$entityManager->flush();
		
		$theme->setDescription('Horreur');
		$theme2->setDescription('Comedie');
		$entityManager->persist($theme);
		$entityManager->persist($theme2);
		$entityManager->flush();
		
		$livre->setTitre('Harry Potter');
		$livre2->setTitre('Seigneur des anneaux');
		$livre->setNotice('Les histoires du sorcier');
		$livre2->setNotice('Les histoires de frodon');
		$livre->addAuteur($auteur);
		$livre2->addAuteur($auteur2);
		$entityManager->persist($livre);
		$entityManager->persist($livre2);
		$entityManager->flush();
		
		$membre->setIdentifiant('Gege');
		$membre->setPassword('abc');
		$membre->setNom('Hube');
		$membre->setPrenom('Momo');
		$membre->setFaculte($faculte);
		$membre->setCycle($cycle);
		$membre2->setIdentifiant('azer');
		$membre2->setPassword('sedfr');
		$membre2->setNom('Jgulmo');
		$membre2->setPrenom('Malou');
		$membre2->setFaculte($faculte2);
		$membre2->setCycle($cycle2);
		$entityManager->persist($membre);
		$entityManager->persist($membre2);
		$entityManager->flush();
		
		$exemplaire->setCodeRangement('C001');
		$exemplaire->setLivre($livre);
		$exemplaire2->setCodeRangement('C002');
		$exemplaire2->setLivre($livre2);
		$entityManager->persist($exemplaire);
		$entityManager->persist($exemplaire2);
		$entityManager->flush();
		
		$reservation->setDateReservation('02/03/2016');
		$reservation->setMembreRes($membre);
		$resercation->setExemplaireRes($exemplaire);
		$reservation2->setDateReservation('04/12/2013');
		$reservation2->setMembreRes($membre2);
		$reservation2->setExemplaireRes($exemplaire2);
		$entityManager->persist($reservation);
		$entityManager->persist($reservation2);
		$entityManager->flush();
		
		$emprunt->setDateDebut('03/06/2015');
		$emprunt->setDateRetour('06/06/2015');
		$emprunt->setMembreEmp($membre);
		$emprunt->setExemplaireEmp($exemplaire);
		$emprunt2->setDateDebut('09/08/2015');
		$emprunt2->setDateRetour('12/08/2015');
		$emprunt2->setMembreEmp($membre2);
		$emprunt2->setExemplaireEmp($exemplaire2);
		$entityManager->persist($emprunt);
		$entityManager->persist($emprunt2);
		$entityManager->flush();
		
		
	}
}
