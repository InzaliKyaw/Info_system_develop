<?php
namespace App\Repositories\User;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository{

    function model()
    {
        return 'App\Models\User\User';
    }
    public function create(Array $data)
    {
        $users = $this->model->create([
            'name' => $data['name'],
            'password'=> Hash::make($data['password']),
            'owners_id'=>$data['owners_id'],
            'lecturers_id' => $data['lecturers_id'],
            'students_id' => $data['students_id'],
            'type' => $data['type'],
            'remember_token' => $data['remember_token'],
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at']
        ]);
        return $users;
    }

    public function delete($id){
        $deletedRows = $this->model->destroy($id);
        return $deletedRows;
    }

    public function show($id)
    {
        $data = $this->model->findOrFail($id);
        return $data;
    }
}
