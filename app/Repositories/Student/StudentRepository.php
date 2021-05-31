<?php
namespace App\Repositories\Student;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

class StudentRepository extends Repository{
    function model()
    {
        return 'App\Models\Student\Student';
    }

    public function create(Array $data)
    {
        // $students = $this->model->create($data);
        $students = $this->model->create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'academicYear' => $data['academicYear'],
            'major' => $data['major'],
            'password'=> Hash::make($data['password'])
        ]);
        return $students;
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