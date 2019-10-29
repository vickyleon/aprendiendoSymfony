<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Animal;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function index()
    {

        //todos los animales 
        $animales_repo = $this->getDoctrine()->getRepository(Animal::class);
        $animales = $animales_repo->findAll();

        $animal = $animales_repo->findBy([
            'raza' => 'africana'
        ],[
            'id' => 'DESC'
        ]);
        var_dump($animal);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales'        => $animales
        ]);
    }


    public function save(){
        //guardar en la tabla de la BD 

        //Cargo el em 
        $entityManager = $this->getDoctrine()->getManager();
        
        //Creo el objeto y doy valores 
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('Verde');
        $animal->setRaza('Africana');

        //Guardar el objeto en doctrine
        $entityManager->persist($animal);

        //volcar datos en la tabla 
        $entityManager->flush();

        return new Response('El animal guardado tiene el id'.$animal->getId());
    }
    
    public function animal($id){
       
        //Cargar repositorio
        $animal_repo =  $this->getDoctrine()->getRepository(Animal::class);

        //Consulta 
        $animal = $animal_repo->find($id);

        //comprobar si el resultado es correcto
        if(!$animal){
            $message = 'El animal no existe';
        }else{
            $message = 'Tu animal elegido es : '. $animal->getTipo()." - ".$animal->getRaza();
        }
        return new Response($message);

    }
}
