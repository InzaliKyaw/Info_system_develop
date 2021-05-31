<?php
namespace App\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model{
    public $timestamps = false;

    protected $table = 'classes';

    protected $fillable = [
        'id',
        'name',
        'lecturers_id',
        'lectures',
        'lecturerName'
    ];
    
    public function lecturer(){
        return $this->hasOne('App\Models\Lecturer\Lecturer','lecturers_id','id');
    }
}