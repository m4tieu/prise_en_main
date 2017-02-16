<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Ce controller s'occupe de retourner les vues de l'application
 *
 * @author mathieu-becerra
 */
class viewController extends Controller{

    /**
     * La route correspond à l'URI passée dans la requet HTTP
     * La methode getRed prend en param $r qui est de type Request
     * ici l'URI = yellow
     * @Route("/yellow", name = "yellow")
     * @return Response correspond a la couleur passée dans l'URI
     */
    public function getYellow(Request $r){
        // getMethod() retourne le type de la request
        // Si $r est de type GET
        if($r->getMethod() == "GET"){
            // on retroune une page WEB
            return $this->render("default/couleurs/yellow.html.twig");
        } else {
            $response =new Response("Yellow");
            return $response;
        }
    }
    /**
     * @Route("/red" , name= "red")
     * @return type Response correspond a la couleur passée dans l'URI
     */
    public function getRed(Request $r){
        return $this->render('default/couleurs/red.html.twig');
    }
    /**
     * @Route("/blue", name= "blue") 
     * 
     */
    public function getBlue(Request $r){
        return $this->render('default/couleurs/blue.html.twig');
    }
    /**
     * @Route("/green" , name= "green")
     */
    public function getGreen(Request $r){
        return $this->render('default/couleurs/green.html.twig');
    }
}
