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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['auth']] ,function(){
    Route::get('/userpage', function () {
        return view('userpage');
    }); 
    Route::get('/myprofile', function () {
        return view('profiles/myprofile');
    }); 
    Route::get('/mypost', function () {
        return view('posts/mypost');
    }); 

});
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contactus', function () {
    return view('menuitems/contactus');
}); 
Route::get('/aboutus', function () {
    return view('menuitems/aboutus');
}); 




Auth::routes();

Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
Route::get('/mypost/{user}', 'PostsController@show')->name('mypost.show');
Route::get('/create' , 'PostsController@create');

Route::post('/p' , 'PostsController@store');
Route::get('/p/{post}' , 'PostsController@show');


 
