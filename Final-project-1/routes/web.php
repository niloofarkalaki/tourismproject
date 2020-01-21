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

Route::get('/', function () {
    return view('home');
});
Route::get('/contactus', function () {
    return view('menuitems/contactus');
}); 
Route::get('/aboutus', function () {
    return view('menuitems/aboutus');
}); 
Route::get('/login', function () {
    return view('login');
}); 
Route::get('/userpage', function () {
    return view('userpage');
}); 
Route::get('/myprofile', function () {
    return view('profiles/myprofile');
}); 
Route::get('/mypost', function () {
    return view('posts/mypost');
}); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
