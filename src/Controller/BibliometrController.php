<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BibliometrController extends Controller {
    /**
     * @Route("/")
     */

     public function index() {
         return $this->render('base.html.twig');
     }
}