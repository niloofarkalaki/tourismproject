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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');


Route::group(['middleware' => ['auth']] ,function(){
    //  Route::get('/userpage', function() {
    //      return view('userpage');
    Route::resource('roles','RolesController');
    Route::resource('users','UsersController');
    Route::resource('posts','PostsController');
    }); 
    Route::get('/myprofile', function () {
        return view('profiles/myprofile');
    }); 
   

Route::get('/home','homeController@show');
Route::get('/contactus', function () {
    return view('menuitems/contactus');
}); 
Route::get('/aboutus', function () {
    return view('menuitems/aboutus');
}); 




Auth::routes();

Route::get('/myprofile/{user}', 'ProfilesController@show')->name('myprofile.show');

Route::get('/create' , 'PostsController@create');

Route::post('/p' , 'PostsController@store');
Route::get('/p/{post}' , 'PostsController@show');
Route::get('/p/{post}/edit' , 'PostsController@edit')->name('post.edit');
Route::patch('/p/{post}' , 'PostsController@update')->name('post.update');
Route::delete('/p/{post}' , 'PostsController@destroy')->name('post.destroy');

Route::post('/comment/store', 'CommentsController@store')->name('comment.add');
Route::post('/reply/store', 'CommentsController@replyStore')->name('reply.add');
Route::post('/search', 'PostsController@search')->name('search');

 
