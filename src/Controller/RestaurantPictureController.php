<?php

namespace App\Controller;

use App\Entity\RestaurantPicture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantPictureController extends AbstractController
{
    /**
     * @Route("/restaurant/picture", name="restaurant_picture")
     * affiche la liste des images de restaurant
     * @Route ("/restaurants/pictures", name="restaurant_picture_index")
     */
    public function index(): Response
    {
        return $this->render('restaurant_picture/index.html.twig', [
            'controller_name' => 'RestaurantPictureController',
        ]);
    }


    /**
     * affiche le detail d'une picture
     * @Route ("/picture/{picture}", name="picture_show", methods={"GET"})
     * @param RestaurantPicture $picture
     */
    public function show(RestaurantPicture $picture)
    {

    }

    /**
     * traite la requete d'un formulaire de creation de picture
     * @Route ("/picture", name="picture_create", methods={"POST"})
     */
    public function create()
    {

    }

    /**
     * affiche le formulaire d'édition d'une pîcture (GET)
     * traite le formulaire d'édition d'une picture (POST)
     * @Route ("/picture/{picture}/edit", name="picture_edit", methods={"GET", "POST"})
     * @param RestaurantPicture $picture
     */
    public function edit(RestaurantPicture $picture)
    {

    }

    /**
     * Supprimer une picture
     * @Route ("/picture/{picture}", name="picture_delete", methods={"DELETE"})
     * @param RestaurantPicture $picture
     */
    public function delete(RestaurantPicture $picture)
    {

    }
}
