<?php

namespace App\Repositories\Contracts;

interface ShoeRepositoryInterface
{
    public function getPopularShoes(int $limit);
    public function searchByName(string $keyword);
    public function getAllNewShoes();
    public function find(int $id);
    public function getPrice(int $shoeId);
    public function getAllBrands();
}
