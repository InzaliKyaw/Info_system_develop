<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('auth/login');
    //return view('master');
});

Route::get('/home', 'HomeController@index')->name('home');

// Category routes
Route::get('/category', 'Category\CategoryController@index')->defaults('_config', [
        'view' => 'category/index',
    ])->name('category.index');

//LecturersList
Route::get('/lecturers','Lecturer\LecturerController@lecturerList')->name('lecturers');

//CreateLecturers
Route::post('/submitLecturers','Lecturer\LecturerController@createLecturer')->name('submitLecturers');

//RegisterAsLectures
Route::get('/registerAsLecturer','Lecturer\LecturerController@registerLecture')->name('registerAsLecturer');

//UpdateLecturers
Route::get('/editLecturer/{id}','Lecturer\LecturerController@editLecturer')->name('editLecturer');
Route::post('/updateLecturer/{id}','Lecturer\LecturerController@updateLecturer')->name('updateLecturer');

//DeleteLecturers
Route::post('/deleteLecturers/{id}','Lecturer\LecturerController@deleteLecturer')->name('deleteLecturers');

//RegisterAsStudents
Route::get('/registerAsStudent','Student\StudentController@registerStudent')->name('registerAsStudents');

//CreateStudents
Route::post('/submitStudents','Student\StudentController@createStudent')->name('submitStudents');

//StudentsList
Route::get('/Students','Student\StudentController@studentList')->name('students');

//DeleteStudents
Route::post('/deleteStudents/{id}','Student\StudentController@deleteStudent')->name('deleteStudents');

//UpdateStudents
Route::get('/editStudents/{id}','Student\StudentController@editStudent')->name('editStudent');
Route::post('/updateStudents/{id}','Student\StudentController@updateStudent')->name('updateStudent');

//NewClasses
Route::get('/newClasses','Classes\ClassesController@getLecturer')->name('newClass');

//CreateClasses
Route::post('/submitClasses','Classes\ClassesController@createClass')->name('submitClasses');
