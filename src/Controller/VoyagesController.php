<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of VoyagesController
 *
 * @author Théotim
 */
class VoyagesController extends AbstractController{
     
    /**
     * @Route("/voyages", name="voyages")
     * @return Response
     */
    public function voyages(): Response{
        return $this->render("pages/voyages.html.twig");
    }
    //put your code here
}
