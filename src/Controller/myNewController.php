<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class myNewController
{
    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): \Symfony\Component\HttpFoundation\Response
    {
        if($slug){
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "Dis be De Browse Section, Mon! WhaleCum!";
        }

        return new Response($title);
    }
}