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

//FrontendController Routes
Route::get('/','FrontendController@index');
Route::get('/publish/result','FrontendController@resultPublishGet');
Route::post('/publish/result','FrontendController@resultPublish');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//DepartmentController Routes
Route::get('department','DepartmentController@index');
Route::get('department/add','DepartmentController@create');
Route::post('department/add/post','DepartmentController@store');
Route::get('department/edit/{id}','DepartmentController@edit');
Route::post('department/update','DepartmentController@update');
Route::get('department/delete/{id}','DepartmentController@delete');

//SessionController Routes
Route::get('session','SessionController@index');
Route::post('session/add/post','SessionController@store');
Route::post('session/update','SessionController@sessionUpdate');
Route::get('session/delete/{id}','SessionController@delete');

//SemesterController Routes
Route::get('semester','SemesterController@index');
Route::get('semester/add','SemesterController@create');
Route::post('semester/add/post','SemesterController@store');
Route::get('semester/edit/{id}','SemesterController@edit');
Route::post('semester/update','SemesterController@update');
Route::get('semester/delete/{id}','SemesterController@delete');

//SubjectController Routes
Route::get('subject','SubjectController@index');
Route::get('subject/add','SubjectController@create');
Route::post('subject/add/post','SubjectController@store');
Route::get('subject/edit/{id}','SubjectController@edit');
Route::post('subject/update','SubjectController@update');
Route::get('subject/delete/{id}','SubjectController@delete');

//StudentController Routes
Route::get('student','StudentController@index');
Route::get('student/add','StudentController@create');
Route::post('student/add/post','StudentController@store');
Route::get('student/view/{id}','StudentController@viewStudent');
Route::get('student/edit/{id}','StudentController@edit');
Route::post('student/update','StudentController@studentUpdate');
Route::get('student/delete/{id}','StudentController@studentDelete');
Route::get('student/ok','StudentController@ok');

//ResultController Routes
Route::get('result','ResultController@index');
Route::get('result/add','ResultController@create');
Route::get('find/subject/{roll}/{semester}','ResultController@findSubject');
Route::post('result/add/post','ResultController@store');
Route::get('result/edit/{id}','ResultController@edit');
Route::post('result/update','ResultController@update');
Route::get('result/find','ResultController@resultFind');
Route::post('result/searching','ResultController@search');

//ProfileController Routes
Route::get('profile','ProfileController@index');
Route::post('change/password','ProfileController@passwordUpdate');
