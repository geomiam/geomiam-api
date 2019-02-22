<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends AbstractFOSRestController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('<h1>42</h1>');
    }

    /**
     * @Rest\Get("/api/items")
     */
    public function getAllItems(ItemRepository $itemRepository)
    {
        return $this->json($itemRepository->findAll());
    }
}
