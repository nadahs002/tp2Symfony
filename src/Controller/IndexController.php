<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    
/**
*@Route("/{name}")
*/
public function home($name) : Response
{
return $this->render('index/index.html.twig',['name' => $name]);
}
}
