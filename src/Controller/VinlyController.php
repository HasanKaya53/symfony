<?php
/**
 * Created by PhpStorm.
 * User: Hasan Kaya (GitHub: @hasankaya53 )
 * Date: 21.08.2022
 * Time: 22:46
 */


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinlyController
{
    //Rota Oluşturma
    #[Route('/')]
    public function homepage()
    {

        return new Response('Title: PB and Jams');
    }

    //Slug Rota Oluşturma ..
    #[Route('/browse/{slug}')]
    public function browse(string $slug): Response{
        return new Response('You are browsing: '. $slug);
    }
}