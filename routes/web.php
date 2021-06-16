<?php
phpinfo();
die;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
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

Route::get('/', 'App\Http\Controllers\taskController@allTasks')->name('home');

Route::post('taskAdd', 'App\Http\Controllers\taskController@showTasks')->name('task-control');

Route::post('task-delete/{id}', 'App\Http\Controllers\taskController@taskDelete')->name('task-delete');
