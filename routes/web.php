<?php

use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\admin\UserController as AdminUserController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/projects', [PublicController::class, 'projects'])->name('proyectos');
Route::get('/single_project/{slug}', [PublicController::class, 'single_project'])->name('single_project');
Route::get('/test_send_email', [PublicController::class, 'test_send_email'])->name('test_send_email');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resources([
        'projects' => ProjectController::class,
        'Users' => AdminUserController::class
    ]);
    Route::get('/posts/destroy/cover/{id}', [ProjectController::class, 'destroyCover'])->name('postsdestroyer');
    Route::get('/posts/update/cover/{id}', [ProjectController::class, 'updateCover'])->name('postsupdate');

});

require __DIR__.'/auth.php';
