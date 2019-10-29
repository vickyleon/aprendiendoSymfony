<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola Mundo con Sympony 4'
        ]);
    }
    public function animales($nombre,$apellidos){
        $title = 'Bienvenido a la pagina de animales';
        $animales = array('perro','gato','paloma','rata');
        $aves = array(
           'tipo' => 'paloma', 'color' => 'gris' , 'edad' => '4');

        return $this->render('home/animales.html.twig',[
            'title'      => $title,
            'nombre'     => $nombre,
            'apellidos'  => $apellidos,
            'animales'   => $animales,
            'aves'       => $aves
        ]); //pintar una vista 
    }
    public function redirigir(){
       /* return $this->redirectToRoute('animales',[
            'nombre' => 'Juan',
            'apellidos' => 'Lopez'
        ]);*/

        return $this->redirect('https://google.com');

    }
}
