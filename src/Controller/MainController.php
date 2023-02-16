<?php

namespace App\Controller;

use App\Repository\CharacterRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index()
    {
        return $this->render('lucky/home.html.twig');
    }
    #[Route('/contact')]
    public function contact()
    {
        return $this->render('lucky/contact.html.twig');
    }
    #[Route('/login')]
    public function login()
    {
        return $this->render('lucky/login.html.twig');
    }
    #[Route('/home')]
    public function homepage(): Response
    {

        return $this->render('lucky/home.html.twig');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug): Response
    {
        if($slug){
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "Hello World";
        }

        return new Response($title);
    }

    #[Route('/lucky')]
    public function lucky(CharacterRepository $characterRepository): Response
    {
      $character = $characterRepository->findAll();
        return $this->render('lucky/home.html.twig', [
            'characters' => $character
        ]);



    }

    #[Route('/inloggen')]
    public function logingIn(): Response
    {
        return new Response
        ('<html><body><img src="https://cdn.searchenginejournal.com/wp-content/uploads/2022/06/image-search-1600-x-840-px-62c6dc4ff1eee-sej.png" alt="">

</body></html>');
    }




}