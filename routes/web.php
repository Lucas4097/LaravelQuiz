<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware("guest")->group(function(){

    Route::get('/register', [RegisterController::class, "registerPage"])->name("registerPage");

    Route::get('/login', [LoginController::class, "loginPage"])->name("loginPage");

    Route::post("register", [RegisterController::class, "register"])->name("register");

    Route::post("login", [LoginController::class, "login"])->name("login");

});

Route::middleware("auth")->group(function(){

    Route::post("logout", [LoginController::class, "logout"])->name("logout");

});

// Route::get("/dashboard", [DashboardController::class, "dashboardPage"])->name("dashboardPage");
Route::get("/dashboard/create", [DashboardController::class, "dashboardCreatePage"])->name("dashboardCreatePage");
Route::get("/dashboard/edit", [DashboardController::class, "dashboardEditPage"])->name("dashboardEditPage");
Route::get("/dashboard", [DashboardController::class, "viewQuestions"])->name("viewQuestions");


Route::post("createQuestions", [DashboardController::class,"createQuestions"])->name("createQuestions");

Route::get ("/", [HomeController::class, "home"])->name("homePage");

Route::get('/game', function () {
    return view('game.game');
});

Route::get('/ranking', function () {
    return view('game.ranking');
});

Route::get('/endgame', function () {
    return view('game.endgame');
});
