<?php

namespace App\Repositories\Category;

use App\Repositories\Repository;

class CategoryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'App\Models\Category\Category';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Category\Contracts\Category
     */
    public function create(array $data)
    {

        $category = $this->model->create($data);
        return $category;
    }
}