<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{

    $Isloggedin=Auth::check();
    if($Isloggedin!=true){
         return  View::make('index');
    }
    else{
         return  View::make('schedule.index');
    }

 
 
  
      
});
 Route::post('/users/processlogin','usersController@processlogin');
 Route::get('/users/list','usersController@list_users');
 Route::get('/users/logout','usersController@logout');
 Route::resource('users','usersController');







