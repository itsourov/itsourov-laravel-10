<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    $posts = Post::latest()->withCount('comments')->with('media')->get()->take(6);
    return view('welcome', ['posts' => $posts]);
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::post('/upload', [UploadController::class, 'store']);
    Route::delete('/upload', [UploadController::class, 'destroy']);
});


require __DIR__ . '/inc/web/auth.php';
require __DIR__ . '/inc/web/admin.php';
require __DIR__ . '/inc/web/post.php';
