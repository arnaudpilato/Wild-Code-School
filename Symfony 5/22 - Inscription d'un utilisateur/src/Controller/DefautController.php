<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Class DefaultController
 * @package App\Controller
 */
class DefautController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}