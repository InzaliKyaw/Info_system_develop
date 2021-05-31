<?php

namespace App\Repositories\Lecturer;
use Illuminate\Support\Facades\Hash;

use App\Repositories\Repository;

class LecturerRepository extends Repository{
    function model()
    {
        return 'App\Models\Lecturer\Lecturer';
    }
    public function create(Array $data)
    {
        $lecturers = $this->model->create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'faculty' => $data['faculty'],
            'password'=> Hash::make($data['password'])
        ]);
        return $lecturers;
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

   

    

    // public function update(Array $data,$id){
    //     return $record = $this->model->update($data,$id);
    //     // $record->name = $data->name;
    //     // $record->password = $data->password;
    //     // $record->phone = $data->phone;
    //     // $record->faculty = $data->faculty;
    //     // $record->address = $data->address;
    // }
}
