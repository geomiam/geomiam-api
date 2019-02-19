<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class ItemController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/api/items")
     */
    public function getAllItems(ItemRepository $itemRepository)
    {
        return $this->json($itemRepository->findAll());
    }
}
