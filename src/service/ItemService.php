<?php 

namespace App\Service;

use App\Provider\IProvider;


class ItemService
{
    private $itemProvider;

    public function __construct(IProvider $IProvider)
    {
            $this->itemProvider = $IProvider;
    }
    public function findAll(): array
    {

        return $this->itemProvider->findAll();
    }
    public function findTop(): array
    {

        return $this->itemProvider->findTop();
    }
    public function findActiv(): array
    {

        return $this->itemProvider->findActiv();
    }
}