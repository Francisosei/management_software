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

Route::get('/', function () {
    return view('welcome');
});


Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('registered','UserController@index');
Route::get('adduser','ProfileController@create');
Route::post('save','ProfileController@save');

Route::get('/record/{id}/edit',['as'=>'profile','uses'=>'ProfileController@edit']);
Route::post('/record/{id}/edit','ProfileController@update');

Route::put('delete','UserController@destroy');




//Route::get('/register','AuthController')
/*Route::get('/subscribe','SubscribeController@create');
Route::post('store','SubscribeController@store');

Route::get('/form','FormenquiryController@create');
Route::post('/post','FromenquiryController@store');

Route::get('/reminder','SubscribeController@reminder');


//Route::get('/form','FormenquiryController@create');
//Route::post('/form','FromenquiryController@store');
//Route::get('/form', function(){

  //  return view('form');
//});
//Route::post('');

/*Route::get('/home', 'HomeController@index');
Route::post('/create','MailController@store');

Route::get('news_letter', function() {
    return view('news_letter');
});

Route::get('Thanyou', function() {
    return view('Thanyou');
});


Route::post('/subscribe','NewsletterController@subscribe');

Route::get('Thanyou', function() {
    return view('Thanyou');
});

/*Route::get('/suscribe',function(){
    return view('news_letter');
});
*/