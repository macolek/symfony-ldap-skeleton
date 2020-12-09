<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
    * @Route("/")
    */
class IndexController
{

    /**
    * @Route("/", name="index")
    */
    public function index()
    {
        
        return new Response(
            '<html><body>Hello. It\' me</body></html>'
        );
    }
    /**
    * @Route("/desktop", name="desktop")
    */
    public function desktop()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}