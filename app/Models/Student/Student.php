<?php
namespace App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    protected $fillable = [
        'id',
        'name',
        'password',
        'phone',
        'address',
        'academicYear',
        'major'
    ];

    protected $attributes = [
        'type' => 'students',
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User\User','students_id');
    }
}