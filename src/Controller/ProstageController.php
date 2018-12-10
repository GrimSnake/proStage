<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/filtrer/{id}", name="prostage_filtre")
     */
    public function afficherFiltres($id)
    {
        return $this->render('prostage/affichageFiltre.html.twig', [
            'controller_name' => 'ProstageController',
            'idFiltre' => $id,
        ]);
    }

    /**
     * @Route("/resultatRecherche/{filtre}", name="prostage_resultatRecherche")
     */
    public function afficherResultatRecherche($filtre)
    {
        return $this->render('prostage/affichageResultatRecherche.html.twig', [
            'controller_name' => 'ProstageController',
            'idFiltre' => $filtre,
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
