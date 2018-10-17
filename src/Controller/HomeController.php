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


class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(){
        return $this->render("home.html.twig");
    }

}