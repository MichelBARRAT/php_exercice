<?php 

namespace App\Provider;

interface IProvider
{
    public function findAll(): array;

    public function findTop(): array;

    public function findActiv(): array;
}
