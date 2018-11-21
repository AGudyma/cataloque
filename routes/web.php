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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wel', function () {
    return 'wel';
});

Route::resource('standarts', 'StandartController');

// upload routes
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
//Search routes

//Route::post('search', function (){
//    return view('tables/standarts/search');
//});
//Route::post('standarts/search', 'SearchController@findByName');

//Auth routes
//Route::get('/main', 'MainController@index');
//Route::post('/main/checklogin', 'MainController@checklogin');
//Route::get('main/successlogin', 'MainController@successlogin');
//Route::get('main/logout', 'MainController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get(/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
        '/home', function() {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = App\User::all();
            return view('adminhome', $users);
        }
    });
});