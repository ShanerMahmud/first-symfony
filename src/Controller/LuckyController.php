<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

    public function number(): Response
    {
        $number = random_int(1,250);
        return new Response("Lucky number: " . $number);
    }
}