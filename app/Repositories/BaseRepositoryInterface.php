<?php
namespace App\Repositories;

interface BaseRepositoryInterface{
    public function getById($id);
    public function getByIds(array $ids);
    public function getAll();
    public function create(array $data);
    public function update($id,array $data);
    public function delete($id);
}