<?php 

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController 
{

    /**
     * @Route("/" , name="homepage")
     */
    public function homepage_function() 
    {
            dump("123");
           
            return $this->render("home/index.html.twig", [
                
            ] );
    }



}