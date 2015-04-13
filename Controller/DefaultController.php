<?php

namespace BibliothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BibliothequeBundle\Entity\Auteur;
use BibliothequeBundle\Entity\Cycle;
use BibliothequeBundle\Entity\Emprunt;
use BibliothequeBundle\Entity\Exemplaire;
use BibliothequeBundle\Entity\Faculte;
use BibliothequeBundle\Entity\Livre;
use BibliothequeBundle\Entity\Membre;
use BibliothequeBundle\Entity\Reservation;
use BibliothequeBundle\Entity\Theme;
use Symfony\Component\Validator\Constraints\DateTime;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BibliothequeBundle:Default:index.html.twig', array('name' => ""));
    }
	
	public function addDonneesAction(){
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
		
		$datetime = new DateTime();
		$format = 'Y-m-d';
		$date = $datetime->createFromFormat($format, '2009-02-15');
		$date1 = $datetime->createFromFormat($format, '2015-04-15');
		$date2 = $datetime->createFromFormat($format, '2014-10-15');
		$date3 = $datetime->createFromFormat($format, '2015-12-15');
		$date4 = $datetime->createFromFormat($format, '2016-03-15');
		$date5 = $datetime->createFromFormat($format, '2009-02-15');
		
		
		$reservation->setDateReservation($date);
		$reservation->setReserve($membre);
		$reservation->setExemplaireRes($exemplaire);
		$reservation2->setDateReservation($date2);
		$reservation2->setReserve($membre2);
		$reservation2->setExemplaireRes($exemplaire2);
		$entityManager->persist($reservation);
		$entityManager->persist($reservation2);
		$entityManager->flush();
		
		$emprunt->setDateDebut($date3);
		$emprunt->setDateRetour($date4);
		$emprunt->setEmprunteur($membre);
		$emprunt->setExemplaireEmp($exemplaire);
		$emprunt2->setDateDebut($date5);
		$emprunt2->setDateRetour($date3);
		$emprunt2->setEmprunteur($membre2);
		$emprunt2->setExemplaireEmp($exemplaire2);
		$entityManager->persist($emprunt);
		$entityManager->persist($emprunt2);
		$entityManager->flush();
		
		return $this->render('BibliothequeBundle:Default:index.html.twig', array('name' => ""));
	}
}

?>