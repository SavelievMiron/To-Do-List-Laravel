<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodosController::class, 'index'])->name('home');
Route::get('/todo/create', [TodosController::class, 'create'])->name('todo.create');
Route::get('/todo/{todo}', [TodosController::class, 'show'])->name('todo.show');
Route::get('/todo/{todo}/edit', [TodosController::class, 'edit'])->name('todo.edit');

Route::post('/todo', [TodosController::class, 'store'])->name('todo.store');
Route::put('/todo/{todo}', [TodosController::class, 'update'])->name('todo.update');
Route::delete('/todo/{todo}', [TodosController::class, 'destroy'])->name('todo.delete');

Route::resource('todos', 'TodosController');
