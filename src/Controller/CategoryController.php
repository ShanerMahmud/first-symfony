<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Category;

class CategoryController extends AbstractController
{
    #[Route('/category-add', name: 'create_category')]
    public function createProduct(ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();
        $category = new Category();
        $category->setName('vegetarian');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($category);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$category->getId());
    }
}
