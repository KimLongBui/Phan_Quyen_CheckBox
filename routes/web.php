<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // abort_if(!Gate::allows('QIP Search'), 403, 'Bạn không có quyền truy cập !');
    return view('/home');
});

Route::get('/page1', function () {
    // abort_if(!Gate::allows('QIP Search'), 403, 'Bạn không có quyền truy cập !');
    return view('/page1');
});

Route::get('/news',[NewsController::class,'index']);

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get ('Phan_Quyen',[PhanQuyenController::class,'PhanQuyen']);
// Route::post('/updateUserPermission', [PhanQuyenController::class,'updateUserPermission'])->name('updateUserPermission');
Route::post('/updateUserPermission', [PhanQuyenController::class, 'update'])->name('updateUserPermission');
Route::get('/permissions', [PhanQuyenController::class, 'edit']);


Route::get('/search-user', [PhanQuyenController::class,'search'])->name('searchUser');




require __DIR__.'/auth.php';
