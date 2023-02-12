<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdminShowController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AthletesController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ActiveBetsController;
use App\Http\Controllers\ActivePlaysController;
use App\Http\Controllers\ActiveEntriesController;
use App\Http\Controllers\ActiveValueController;
use App\Http\Controllers\CashWalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentRequestController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\OddsController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\AdminlogController;

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
//login Admin
// Route::post('admin/login', [AdminloginController::class, 'adminlogin'])->name('admin.login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('/show-map', [GraphController::class, 'showMap']);
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

//Auth Credentials ....
Route::group(['middleware'=>"auth"],function(){
    Route::get('athletes',[AthletesController::class,'index']);
    Route::get('athletes',[AthletesController::class,'paginate']);
    Route::get('/posts/edit/{id}', [AthletesController::class,'edit']);
    Route::post('/posts/update/{id}', [AthletesController::class,'update']);
    Route::get('dashboard', [AuthController::class, 'dashboard']);


Route::get('admin/dashboard', [AdminShowController::class, 'show'])->name('admin.dashboard');
// Route::get('admin/dashboards', [AdminShowController::class, 'data']);

Route::resource('products', ProductController::class);
// Route::get('posts', [PostController::class, 'index']);

//Admin panel data
Route::get('admin',[AdminController::class,'index']);
Route::get('admin/add',[AdminController::class,'show']);
Route::post('admin/data',[AdminController::class,'store']);
Route::get('admin/edit/{id}', [AdminController::class,'edit']);
Route::post('admin/update/{id}',[AdminController::class,'update']);
Route::get('admin',[AdminController::class,'paginate']);
Route::get('admin/delete/{$id}',[AdminController::class,'delete']);
Route::get('/search',[AdminController::class,'search']);

//Athletes Route
Route::get('athletes',[AthletesController::class,'index']);
Route::get('athletes/show',[AthletesController::class,'show']);
Route::post('athletes/store',[AthletesController::class,'store']);
Route::get('athletes',[AthletesController::class,'paginate']);
Route::get('/posts/edit/{id}', [AthletesController::class,'edit']);
Route::post('/posts/update/{id}', [AthletesController::class,'update']);
Route::get('/search',[AthletesController::class,'search']);

//Games route
Route::get('games',[GamesController::class,'index']);
Route::get('games/show',[GamesController::class,'show']);
Route::post('games/store',[GamesController::class,'store']);
Route::get('games/edit/{id}',[GamesController::class,'edit']);
Route::get('games',[GamesController::class,'paginate']);
Route::get('games/available/{id}',[GamesController::class,'status']);
Route::post('games/update/{id}', [GamesController::class,'update']);
Route::get('game',[GamesController::class,'searching']);

//Sports Route
Route::get('sports',[SportsController::class,'index']);
Route::get('sports/show',[SportsController::class,'show']);
Route::post('sports/data',[SportsController::class,'data']);
Route::get('sports/store',[SportsController::class,'store'])->name('sports.store');
Route::get('sports',[SportsController::class,'paginate']);
Route::get('sports/edit/{id}',[SportsController::class,'edit']);
Route::post('sports/update/{id}', [SportsController::class,'update']);
Route::get('sport',[SportsController::class,'search']);

//Teams Route
Route::get('teams',[TeamsController::class,'index']);
Route::get('teams/show',[TeamsController::class,'show']);
Route::post('teams/store',[TeamsController::class,'store']);
Route::get('teams/edit/{id}',[TeamsController::class,'edit']);
Route::post('teams/update/{id}', [TeamsController::class,'update']);
Route::get('teams',[TeamsController::class,'paginate']);

//ActiveBets Route
Route::get('activebets',[ActiveBetsController::class,'index']);
Route::get('activebets/show',[ActiveBetsController::class,'show']);
Route::post('activebets/store',[ActiveBetsController::class,'store']);
Route::get('activebets',[ActiveBetsController::class,'paginate']);
Route::get('activebets/edit/{id}',[ActiveBetsController::class,'edit']);
Route::post('activebets/update/{id}', [ActiveBetsController::class,'update']);

//ActivePlays route
Route::get('activeplays',[ActivePlaysController::class,'index']);
Route::get('activeplays/show',[ActivePlaysController::class,'show']);
Route::post('activeplays/store',[ActivePlaysController::class,'store']);
Route::get('activeplays/edit/{id}',[ActivePlaysController::class,'edit']);
Route::post('activeplays/update/{id}', [ActivePlaysController::class,'update']);

//Active Entries route
Route::get('activeentries',[ActiveEntriesController::class,'index']);
Route::get('activeentries/show',[ActiveEntriesController::class,'show']);
Route::post('activeentries/store',[ActiveEntriesController::class,'store']);
Route::get('activeentries',[ActiveEntriesController::class,'paginate']);
Route::get('activeentries/edit/{id}',[ActiveEntriesController::class,'edit']);
Route::post('activeentries/update/{id}', [ActiveEntriesController::class,'update']);

//Active Value Entries route
Route::get('activevalue',[ActiveValueController::class,'index']);
Route::get('activevalue/show',[ActiveValueController::class,'show']);
Route::post('activevalue/store',[ActiveValueController::class,'store']);
Route::get('activevalue',[ActiveValueController::class,'paginate']);
Route::get('activevalue/edit/{id}',[ActiveValueController::class,'edit']);
Route::post('activevalue/update/{id}', [ActiveValueController::class,'update']);

//Cash Wallet route
Route::get('cashwallet',[CashWalletController::class,'index']);
Route::get('cashwallet/show',[CashWalletController::class,'show']);
Route::post('cashwallet/store',[CashWalletController::class,'store']);
Route::get('cashwallet',[CashWalletController::class,'paginate']);
Route::get('cashwallet/edit/{id}',[CashWalletController::class,'edit']);
Route::post('cashwallet/update/{id}', [CashWalletController::class,'update']);

//Payment route
Route::get('payment',[PaymentController::class,'index']);
Route::get('payment/show',[PaymentController::class,'show']);
Route::get('payment',[PaymentController::class,'paginate']);
Route::get('payment/edit/{id}',[PaymentController::class,'edit']);
Route::post('payment/update/{id}', [PaymentController::class,'update']);

//Payment Request route
Route::get('paymentrequest',[PaymentRequestController::class,'index']);
Route::get('paymentrequest',[PaymentRequestController::class,'paginate']);
Route::get('paymentrequest/edit/{id}',[PaymentRequestController::class,'edit']);
Route::post('paymentrequest/update/{id}', [PaymentRequestController::class,'update']);

//Preferences route
Route::get('preferences',[PreferencesController::class,'index']);
Route::get('preferences/show',[PreferencesController::class,'show']);
Route::post('preferences/store',[PreferencesController::class,'store']);
Route::get('preferences',[PreferencesController::class,'paginate']);
Route::get('preferences/edit/{id}',[PreferencesController::class,'edit']);
Route::post('preferences/update/{id}', [PreferencesController::class,'update']);

//Wallet route
Route::get('wallet',[WalletController::class,'index']);
Route::get('wallet/show',[WalletController::class,'show']);
Route::post('wallet/store',[WalletController::class,'store']);
Route::get('wallet',[WalletController::class,'paginate']);
Route::get('wallet/edit/{id}',[WalletController::class,'edit']);
Route::post('wallet/update/{id}', [WalletController::class,'update']);

//Odds route
Route::get('odds',[OddsController::class,'index']);
Route::get('odds',[OddsController::class,'paginate']);
Route::get('odds/edit/{id}',[OddsController::class,'edit']);
Route::post('odds/update/{id}', [OddsController::class,'update']);

//Coach route
Route::get('coach',[CoachController::class,'index']);
Route::get('coach/show',[CoachController::class,'show']);
Route::post('coach/store',[CoachController::class,'store']);
Route::get('coach',[CoachController::class,'paginate']);
Route::get('coach/edit/{id}',[CoachController::class,'edit']);
Route::post('coach/update/{id}', [CoachController::class,'update']);




Route::post('/stripe', [StripeController::class,'stripePyament'])->name("stripe.post");
});

// Route::post('adminlog', [AdminlogController::class,'log'])->name('adminlog');

