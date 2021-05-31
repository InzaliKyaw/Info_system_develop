<?php 
namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Lecturer\LecturerRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Log;


class LecturerController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var Repositories\Lecturer\LecturerRepository
     */
    protected $lectureRepository;
    protected $userRepository;


    /**
     * Create a new controller instance.
     *
     * @param  Repositories\Lecturer\LecturerRepository  $lecturerRepository
     * @return void
     */
    public function __construct(LecturerRepository $lecturerRepository,UserRepository $userRepository) {

        // $this->_config = request('_config');

        $this->lectureRepository = $lecturerRepository;
        $this->userRepository = $userRepository;
        return view('lecturer/registerLecturer');
    }

    public function registerLecture(){
        return view('lecturer/registerLecturer');
    }

    public function lecturerList(){

        $lecturers = $this->lectureRepository->all();
        return view('lecturer/lecturer')
        ->with('lecturers',$lecturers);
    }

    public function createLecturer(Request $request){
        // $validator = $request->validate([
        //     'name'=>'required',
        //     'password'=>'required',
        //     'phone'=>'required',
        //     'address'=>'required'
        // ]);

        
        
        $data = collect(request()->input())->toArray();
        $lecturers = $this->lectureRepository->create($data);

        $users = $this->userRepository->create($data);
        return view('lecturer/registerLecturer')->with('lecturers', $lecturers);
        
        // if($validator->passes()){
           
        // }else{
        //     return view('lecturer/registerLecturer')->withErrors($validatedData);
        // }
    }

    public function updateLecturer(Request $request){
        Log::debug("Update Id ".$request->id);
        $data = collect(request()->input())->toArray();
        $lecturers = $this->lectureRepository->update($data,$request->id);
        $lecturers = $this->lectureRepository->all();
        return view('lecturer/lecturer')
        ->with('lecturers',$lecturers);
    }

    public function editLecturer(Request $request){
        Log::debug("Edit Id ".$request->id);
        $data = collect(request()->input())->toArray();
        $lecturers = $this->lectureRepository->show($request->id);
        $lecturers->save();
        return view('lecturer/updateLecturer')
        ->with('lecturers', $lecturers);
    }

    public function deleteLecturer(Request $request){
        Log::debug($request->id);
        $deletedRow = $this->lectureRepository->delete($request->id);
        $lecturers = $this->lectureRepository->all();
        return view('lecturer/lecturer')
        ->with('lecturers',$lecturers);
    }
} 
