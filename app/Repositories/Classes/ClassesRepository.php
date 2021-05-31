<?php
namespace App\Repositories\Classes;

use App\Repositories\Repository;

class ClassesRepository extends Repository{
    function model()
    {
        return 'App\Models\Classes\Classes';
    }

    public function create(Array $data)
    {
        $classes = $this->model->create($data);
        return $classes;
    }
   
}