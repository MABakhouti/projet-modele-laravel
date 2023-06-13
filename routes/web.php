<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/post/details/{id}', [PostController::class, 'show']);

Route::get('/post/categories/{categories_id}', [PostController::class, 'showByCategory']);

Route::get('/dashboard', [PostController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/comment/store', [CommentController::class, 'store']);
Route::post('/comment/reply/add/{repId}', [ReplyController::class, 'addReply']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/post/add', [PostController::class, 'add']);
    Route::get('/admin/post/edit/{id}', [PostController::class, 'edit']);
    Route::patch('admin/post/update/{id}', [PostController::class, 'update']);
    Route::get('admin/post/delete/{id}', [PostController::class, 'delete']);
    Route::post('/admin/post/store', [PostController::class, 'store']);
    Route::get('/admin/post', [PostController::class, 'adminIndex'])->name('admin.posts');

    Route::get('/post/markAsFeatured/{post_id}', [PostController::class, 'markAsFeatured']);
    Route::get('/post/markAsUnfeatured/{post_id}', [PostController::class, 'markAsUnfeatured']);

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::patch('admin/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/category/add', [CategoryController::class, 'add']);
    Route::post('/admin/category/store', [CategoryController::class, 'store']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
});

require __DIR__ . '/auth.php';
