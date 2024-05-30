<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todocontroller;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todo', function () {
    return view('Todo/index');
})->middleware('login');

Route::post('/insert', [todocontroller::class, 'insert'])->name('todo.insert')->middleware('login');
Route::get('/index', [todocontroller::class, 'showdata'])->name('todo.index')->middleware('login');

Route::get('/update{id}', [todocontroller::class, 'updateget'])->name('update.todo')->middleware('login');
Route::post('/update{id}', [todocontroller::class, 'updatepost'])->name('update.todo')->middleware('login');

Route::get('/delete{id}', [todocontroller::class, 'deletetodo'])->name('delete.todo')->middleware('login');
