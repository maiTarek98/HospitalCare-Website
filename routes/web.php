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

use App\User;

Route::get('/', function () {
    
    return view('/index');
});

Route::group(['prefix'=>'admin'],function()
{
    Route::get('/','adminController@index');
    Route::resource('user','userController');
    Route::resource('team','teamController');
    Route::resource('slider','sliderController');
    Route::resource('chosen','chosenController');
    Route::resource('service','serviceController');

    // Route::post('/section/{one}/store','chosenController@store');
    // Route::get('/section/{one}/show2','chosenController@show');
    // Route::get('/section/{one}/edit2','chosenController@edit');
    // Route::post('/section/{one}/update','chosenController@update');

    Route::resource('gallery','galleryController');
    Route::resource('health','healthController');
    Route::resource('openion','openionController');
    Route::resource('contact','contactController');
    Route::resource('setting','settingController');
    Route::resource('opening','openingController');

});

 
 Route::resource('/','siteController');

 Route::get('/index','siteController@index');
 Route::get('/about','siteController@about');
 Route::get('/service','siteController@service');

Route::get('/gallery','siteController@gallery');
// Route::any('/service','siteController@search');
Route::group(['middleware'=>'guest'],function()
{
Route::get('/signup','siteController@signup');

Route::post('/signup','siteController@create');
Route::post('/signup','siteController@store');
});
Route::group(['middleware'=>'pro'],function()
{
Route::get('/profile','siteController@profile');
Route::get('/profile/{id}','siteController@show');

});

Route::get('/team','siteController@team');
Route::get('/health','siteController@health');
Route::get('/contact','siteController@contact');
// Route::post('/contact','siteController@createContact');
Route::post('/contact','siteController@storeContact');
// Route::get('/','siteController@search');

// Route::post('Hospital/index','siteController@createBooking');
Route::post('/','siteController@storeBooking');

// Route::post('/',function(){
//     $q=Input::get('q');
//     if(q !=" ")
//     {
//         $user=User::where('name','like','%'.$q.'%');
//     }
//     return "No data";
// });

// //Route::post('/contact','siteController@store2');
// Route::get('/gallery/{onepost}/category','siteController@category');



// Route::get('/','siteController@login');
    Route::post('/','siteController@signin');
    
    Route::get('/logoutt','siteController@destroy');
////////

Route::get('/login','loginController@create');
    Route::post('/login','loginController@store');
    
    Route::get('/logout','loginController@destroy');


