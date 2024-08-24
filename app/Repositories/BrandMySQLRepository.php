<?php
namespace App\Repositories;

use App\Repositories\BrandInterface;
use App\Models\Brand;
use App\Repositories\BaseMysqlRepository;

class  BrandMySQLRepository extends BaseMySqlRepository implements BrandInterface{

    public function __construct(Brand $model)
    {
        parent::__construct($model); 
    }
    public function create(array $data){
    return parent::create($data);
    }
    public function update($id,array $data){
        return parent::update($id,$data);
    }
    public function delete($id){
        return parent::delete($id);
    }
    public function getAll(){
        return parent::getAll();
    }
    public function getById($id){
        return parent::getById($id);
    }
    public function getByIds(array $ids){
        return parent::getByIds($ids);
    }   

}