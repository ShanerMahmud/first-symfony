<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Main / Home / Index page');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if($slug){
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "Dis be De Browse Section, Mon! WhaleCum!";
        }

        return new Response($title);
    }

    #[Route('/lucky')]
    public function lucky(): Response
    {
      $luckyNumber = random_int(1,100);
        return new Response("My lucky number is: -" . $luckyNumber);
    }

    #[Route('/inloggen')]
    public function login(): Response
    {
        return new Response
        ('<html><body><img src="https://cdn.searchenginejournal.com/wp-content/uploads/2022/06/image-search-1600-x-840-px-62c6dc4ff1eee-sej.png" alt="">

</body></html>');
    }
    #[Route('/home')]
    public function index()
    {
        $number = random_int(0, 100);
        $title = "Hello World";

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'title' => $title
        ]);
    }



}