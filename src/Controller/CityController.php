<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/city", name="city")
     * Affiche la liste de toutes les cities
     * @Route ("/cities", name="city_index")
     */
    public function index(): Response
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }

    /**
     * affiche le detail d'une city
     * @Route ("/city/{city}", name="city_show", methods={"GET"})
     * @param City $city
     */
    public function show(City $city)
    {

    }

    /**
     * Traite la requete de creation d'une city
     * @Route ("/city", name="city_create", methods={"POST"})
     */
    public function create()
    {

    }

    /**
     * Affiche le formulaire d'édition d'une city (GET)
     * Traite le formulaire d'édition d'un city (POST)
     * @Route ("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
     * @param City $city
     */
    public function edit(City $city)
    {

    }

    /**
     * Supprime une city
     * @Route ("/city/{city}", name="city_delete", methods={"DELTE"})
     * @param City $city
     */
    public function delete(City $city)
    {

    }
}
