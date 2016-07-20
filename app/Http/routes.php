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
use App\Task;
use Illuminate\Http\Request;

/*顯示所有任務*/
 
Route::get('/', function () {
    return view('task');
});

/*接收表單來新增任務*/

Route::post('/task', function (Request $request) {
    //
});

/*刪除任務*/
Route::delete('/task/{id}', function ($id) {
    //
});