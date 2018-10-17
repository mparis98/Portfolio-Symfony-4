<?php
/**
 * Created by PhpStorm.
 * User: matthieuparis
 * Date: 17/10/2018
 * Time: 10:37
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class ProjetController extends Controller
{
    /**
     * @Route("/CVVEN", name="cvven")
     */
    public function CVVEN(){
        return $this->render("Projet/CVVEN.html.twig");
    }

    /**
     * @Route("/CVVENJAVA", name="cvvenJava")
     */
    public function CVVENJAVA(){
        return $this->render("Projet/CVVENJAVA.html.twig");
    }

}