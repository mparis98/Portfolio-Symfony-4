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


class VeilleController extends Controller
{
    /**
     * @Route("/technologique", name="techno")
     */
    public function techno(){
        return $this->render("Veille/techno.html.twig");
    }

    /**
     * @Route("/juridique", name="juridique")
     */
    public function juridique(){
        return $this->render("Veille/juridique.html.twig");
    }

}