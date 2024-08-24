<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;

interface  BrandInterface extends BaseRepositoryInterface{
    public function getById($id);
    public function getByIds(array $ids);
    public function getAll();
    public function create(array $data);
    public function update($id,array $data);
    public function delete($id);
}