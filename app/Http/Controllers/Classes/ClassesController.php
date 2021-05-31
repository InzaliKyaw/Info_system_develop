<?php

namespace App\Http\Controllers\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Http\Controllers\Controller;
use App\Repositories\Classes\ClassesRepository;
use App\Repositories\Lecturer\LecturerRepository;
use Illuminate\Support\Facades\Log;

class ClassesController extends Controller{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var Repositories\Lecturer\ClassesRepository
     */
    protected $classRepository;
    protected $lecturerRepository;

    /**
     * Create a new controller instance.
     *
     * @param  Repositories\Lecturer\ClassesRepository  $lecturerRepository
     * @return void
     */
    public function __construct(ClassesRepository $classesRepository,LecturerRepository $lecturerRepository) {

        // $this->_config = request('_config');

        $this->classRepository = $classesRepository;
        $this->lecturerRepository = $lecturerRepository;
    }

    public function getLecturer(){
         $lecturers=$this->lecturerRepository->all();
         return view('class/newClasses')
          ->with('lecturers',$lecturers);
        // return view('class/newClasses');
    }

    public function createClass(Request $request){
            Log::debug("lecturer name".$request->lecturerName);
            $data = collect(request()->input())->toArray();
            $classes = $this->classRepository->create($data);
            $lecturers=$this->lecturerRepository->all();
            return view('class/newClasses')
            ->with('lecturers', $lecturers);
    }

}