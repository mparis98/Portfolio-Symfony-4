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


class StageController extends Controller
{
    /**
     * @Route("/Stage1", name="stage1")
     */
    public function Stage1(){
        return $this->render("Stage/Stage1.html.twig");
    }

    /**
     * @Route("/Stage2", name="stage2")
     */
    public function Stage2(){
        return $this->render("Stage/Stage2.html.twig");
    }

}