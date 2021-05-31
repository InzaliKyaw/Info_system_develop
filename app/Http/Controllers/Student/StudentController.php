<?php
namespace App\Http\Controllers\Student;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Http\Controllers\Controller;
use App\Repositories\Student\StudentRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var Repositories\Student\StudentRepository
     */
    protected $studentRepository;
    protected $userRepository;
    
    
    /**
     * Create a new controller instance.
     *
     * @param  Repositories\Student\StudentRepository  $studentsRepository
     * @return void
     */
    public function __construct(StudentRepository $studentsRepository, UserRepository $userRepository ) {

        // $this->_config = request('_config');
      
        $this->studentRepository = $studentsRepository;
        $this->userRepository = $userRepository;

        return view('students/registerStudents');
    }

    public function registerStudent(){
        return view('students/registerStudents');
    }

    public function createStudent(Request $request){
        $validator = $request->validate([
            'name'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);

        $data = collect(request()->input())->toArray();
        $students = $this->studentRepository->create($data);
        $users = $this->userRepository->create($data);
        $students = $this->studentRepository->all();
        return view('students/student')->with('students', $students);

        // if($validator->passes()){
        //     $data = collect(request()->input())->toArray();
        //     $students = $this->studentRepository->create($data);
        //     return view('students/registerStudents')->with('students', $students);
        // }else{
        //     return view('students/registerStudents')->withErrors($validator);
        // }
    }

    public function studentList(){
        $students = $this->studentRepository->all();
        return view('students/student')
        ->with('students',$students);
    }

    public function deleteStudent(Request $request){
        Log::debug($request->id);
        $deletedRow = $this->studentRepository->delete($request->id);
        $students = $this->studentRepository->all();
        return view('students/student')
        ->with('students',$students);
    }
    
    public function editStudent(Request $request){
        Log::debug("Edit Id ".$request->id);
        $data = collect(request()->input())->toArray();
        $students = $this->studentRepository->show($request->id);
        $students->save();
        return view('students/updateStudents')
        ->with('students',$students);
    }

    public function updateStudent(Request $request){
        Log::debug("Update Id ".$request->id);
        $data = collect(request()->input())->toArray();
        $students = $this->studentRepository->update($data,$request->id);
        $students = $this->studentRepository->all();
        return view('students/student')
        ->with('students',$students);
    }

}