<?php 
namespace App\Models\Lecturer;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model{

    public $timestamps = false;

  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lecturers';

    protected $fillable = [
        'id',
        'name',
        'password',
        'phone',
        'address',
        'faculty'
    ];

    public function classes(){
        return $this->belongsTo('App\Models\Classes\Classes','lecturers_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User\User','lecturers_id');
    }

}