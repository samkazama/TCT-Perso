<?php

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


//Employés
Route::get('/employes','EmployeController@index');
Route::get('/employes(a-z)','EmployeController@indexalpha');
Route::get('/employes/ajout','EmployeController@create');
Route::get('/employes/warning','EmployeController@warning');
Route::get('/employes/delete','EmployeController@delete');
Route::get('/employes/{employe}','EmployeController@show');
Route::post('/employes','EmployeController@store');
Route::get('/employes/{employe}/editer','EmployeController@edit');
Route::post('/employes/{employe}','EmployeController@update');
Route::get('/employes/{employe}/supprimer','EmployeController@destroy');
Route::get('/employes/{employe}/conges','EmployeController@conges');

//Grades
Route::get('/grades','GradeController@index');
Route::get('/grades/ajout','GradeController@create');
Route::post('/grades','GradeController@store');
Route::get('/grades/warning','GradeController@warning');
Route::get('/grades/delete','GradeController@delete');
Route::get('/grades/{grade}/editer','GradeController@edit');
Route::post('/grades/{grade}','GradeController@update');
Route::get('/grades/{grade}/supprimer','GradeController@destroy');

//Congés
Route::get('/conges','CongeController@index');
Route::get('/conges/ajout','CongeController@create');
Route::get('/conges/warning','CongeController@warning');
Route::get('/conges/delete','CongeController@delete');
Route::get('/conges/{conge}','CongeController@show');
Route::get('/conges/{conge}/pdf','CongeController@PDF');
Route::post('/conges','CongeController@store');
Route::get('/conges/{conge}/editer','CongeController@edit');
Route::post('/conges/{conge}','CongeController@update');
Route::get('/conges/{conge}/supprimer','CongeController@destroy');

//PDF
Route::get('/employes/{employe}/attestation','PdfController@attestationTravail');
//Auth
Route::get('/register','AuthController@register');
Route::post('/register','AuthController@store');
Route::get('/','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');
Route::post('/login','AuthController@send');
