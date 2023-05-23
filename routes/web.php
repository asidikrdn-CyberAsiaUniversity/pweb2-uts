<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// View Pages
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/edit-post/{id}', [PostController::class, 'editPage'])->name('post.editPage');
Route::view('/add-post', "addPost")->name('post.addPage');

// CRUD Services
Route::post('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/update', [PostController::class, 'update'])->name('post.update');
Route::get('/post/{id}/delete', [PostController::class, 'delete'])->name('post.delete');