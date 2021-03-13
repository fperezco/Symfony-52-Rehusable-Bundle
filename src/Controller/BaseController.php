<?php

namespace App\Controller;

use Paco\CustomPacoBundle\PacoNumberGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/base", name="base")
     */
    public function index(PacoNumberGenerator $pacoNumberGenerator): Response
    {
        $number = $pacoNumberGenerator->getNumber();
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
