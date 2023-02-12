<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Models\Adminuser;
use App\Http\Controllers\AdminShowController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AthletesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('admin',[AuthController::class, 'show']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('admin/dashboard', [AdminShowController::class, 'show'])->name('admin.dashboard');
// Route::get('admin',[AdminController::class,'index']);

//Athelate api
Route::get('athletes',[AthletesController::class,'index']);
Route::get('athletes',[AthletesController::class,'paginate']);

Route::get('/posts/edit/{id}', [AthletesController::class,'edit']);
Route::post('/posts/update/{id}', [AthletesController::class,'update']);


