<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Game\EndgameController;
use App\Http\Controllers\Game\QuestionController;
use App\Http\Controllers\Game\RankingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\User\ProfileController;
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

    Route::get("/game", [QuestionController::class, "gamePage"])->name("gamePage");

    Route::post("game", [QuestionController::class, "verificQuestion"])->name("verificQuestion");

    Route::get('/ranking', [RankingController::class, 'rankingPage'])->name("rankingPage");

    Route::get('/endgame', [EndgameController::class, 'endgamePage'])->name("endgamePage");

});

Route::middleware("admin")->group(function(){

    Route::get("/dashboard", [DashboardController::class, "dashboardPage"])->name("dashboardPage");

    Route::get("/dashboard/create", [DashboardController::class, "dashboardCreatePage"])->name("dashboardCreatePage");

    Route::get("/dashboard/edit/{id}", [DashboardController::class, "dashboardEditPage"])->name("dashboardEditPage");

    Route::post("createQuestions", [DashboardController::class,"createQuestions"])->name("createQuestions");

    Route::post("editQuestions/{id}", [DashboardController::class, "editQuestions"])->name("editQuestions");

    Route::delete("/dashboard/delete/{id}", [DashboardController::class, 'deleteQuestions'])->name('deleteQuestions');

});


Route::get ("/", [UserHomeController::class, "home"])->name("homePage");
Route::get ("/profile", [ProfileController::class, "profile"])->name("profilePage");

