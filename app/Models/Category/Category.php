<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    protected $fillable = [
        'category_name',
        'category_desc',
        'creator_id'
    ];
}