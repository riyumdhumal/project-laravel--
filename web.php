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

Route::get('/', function () {
    return view('welcome');
});



/* passing string to browser*/
Route::get('/index',function(){
    return'<h1>Hello all</h1>';
});

/* passing  view
Route::get('/fruite',function(){
    return view('fruite');
});


//passing variable or data to view from routes

Route::get('/fruite',function(){

   return view('fruite',['name'=>'Mango']);
});

//passing array to view

Route::get('/fruite',function(){

    return view('fruite',['name'=>['Mango','Apple','jackfruit']]);
 });
//##############
*/
Route::get('/form',function(){

    return view('task');
 });



// syntax:
//Route::method('url pattern','Controlername@function_name');
Route::post('/insert','TodoController@index');

/*
//Route::post('/insert','TodoController@index');
 
/*
Route::get('/edit/{rid}',function($rid){
     return $rid;
});*/


//passing get parameter
/*
Route::get('/edit/{rid}',function($rid){
    return($rid);
});
*/








Route::get('/delete/{rid}','TodoController@delete'); 
Route::get('/dashboard','TodoController@display');
Route::get('/edit/{rid}','TodoController@edit');
Route::post('/update/{rid}','TodoController@updaterecord');




Route::get('/file',function(){

    return view('fileupload');
 });


 //Route::post('/upload','TodoController@store');

 Route::get('/dashboard','TodoController@display');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/index',function(){

    return view('child');
});