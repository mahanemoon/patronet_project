<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseMysqlRepository implements BaseRepositoryInterface{

    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getById($id)
    {
        return  $this->model::find($id);
    }

    public function getByIds(array $ids)
    {
        $entity=[];
        foreach($ids as $id){
            $data=$this->model::find($id);
            array_push($entity,$data);
            
        }
        return $entity;
    }

    public function getAll()
    {
        return $this->model::all();
    }

    public function create(array $data)
    {
        $this->model::create($data)->save();   
    }

    public function update($id, array $data)
    {
        $update=$this->model::find($id);
        $update=$update->update($data);
        return $update;
    }

    public function delete($id)
    {
        $this->model::destroy($id);
    }
}