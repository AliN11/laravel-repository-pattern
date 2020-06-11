<?php
namespace App\Repositories;

class CategoriesRepository extends Repository
{
    public function model()
    {
        return \App\Models\Category::class;
    }
}