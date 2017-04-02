<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* To co jest po @ to jest "zapytanie" w klasie czyli tym co przed @. Nie może być 2-óch takich samych
 * zapytań w jednej klasie.
 * */
 
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('doctor', array('as' => 'Read_Doctors', 'uses' => 'DoctorController@show')); //wszystkie doktory
Route::get('doctor/{id}', array('as' => 'Read_Doctor', 'uses' => 'DoctorController@get')); //doktor z parametrem
Route::get('doctor/{id}/appointment', array('as' => 'Read_Doctor_Appointments', 'uses' => 'DoctorController@getappointments'));

