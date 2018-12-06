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

use App\Standart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wel', function () {
    return 'wel';
});
//items routes
Route::resource('standarts', 'StandartController');
Route::resource('reagents', 'ReagentController');
Route::resource('columns', 'ColumnController');
Route::resource('labware', 'LabwareController');
// upload routes
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
//Search routes


//Route::any(/**
// * @return mixed
// */
//    '/search', function ()
//{
//
//    $search_request = Input::get ( 'search_request');
//
//    /** @var TYPE_NAME $table */
//    switch (    $table = Input::get('table')) {
//        case "standarts":
//            $standarts = (new App\Standart)->where('name','LIKE','%'.$search_request.'%')->get();
//            if(count($standarts) > 0)
//                return view('/search/search',['table' => $table])->withDetails($standarts)->withQuery ( $search_request );
//
//        break;
//        case "reagents":
//            $reagents = (new App\Reagent)->where('name','LIKE','%'.$search_request.'%')->get();
//            if(count($reagents) > 0)
//                return view('/search/search')->withDetails($reagents)->withQuery ( $search_request );
//        break;
//        case "columns":
//            $columns = (new App\Column)->where('name','LIKE','%'.$search_request.'%')->get();
//            if(count($columns) > 0)
//                return view('/search/search',['table' => $table])->withDetails($columns)->withQuery ( $search_request );
//        break;
//
//        default:
//            return view ('/search/search')->withMessage('No Details found. Try to search again !');
//    }
//});

Route::any(
    '/search', 'SearchController@search');



//Auth routes
Auth::routes();




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