<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Entreprise;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage_accueil")
     */
    public function index()
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    /**
     * @Route("/filtrer/entreprises", name="prostage_filtre_entreprises")
     */
    public function afficherFiltreEntreprises()
    {
      //Recuperer le repository de l'entité entreprises
      $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);

      //Recuperer les entreprises enregistrées en BD
      $entreprises = $repositoryEntreprise->findAll();

      //Envoyer les entreprises récuprérées à la vue chargée des les afficher
        return $this->render('prostage/affichageFiltreEntreprises.html.twig', [
            'controller_name' => 'ProstageController',
            'entreprises' => $entreprises
        ]);
    }

    /**
     * @Route("/filtrer/formations", name="prostage_filtre_formations")
     */
    public function afficherFiltreFormations()
    {
        return $this->render('prostage/affichageFiltreFormations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    /**
     * @Route("/resultatRecherche/entreprises/{id}", name="prostage_resultatRecherche_entreprises")
     */
    public function afficherResultatRechercheEntreprises($id)
    {
        return $this->render('prostage/affichageResultatRechercheEntreprises.html.twig', [
            'controller_name' => 'ProstageController',
            'idEntreprise' => $id,
        ]);
    }

    /**
     * @Route("/resultatRecherche/formations/{id}", name="prostage_resultatRecherche_formations")
     */
    public function afficherResultatRechercheFormations($id)
    {
        return $this->render('prostage/affichageResultatRechercheFormations.html.twig', [
            'controller_name' => 'ProstageController',
            'idFormation' => $id,
        ]);
    }

    /**
     * @Route("/stage/{id}", name="prostage_stage")
     */
    public function afficherStage($id)
    {
        return $this->render('prostage/affichageStage.html.twig', [
            'controller_name' => 'ProstageController',
            'idStage' => $id,
        ]);
    }
}
