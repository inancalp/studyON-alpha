<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyGroupController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// TRY NOT TO TOUCH THE HOME ROUTE
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get("/profile/{user}", [ProfileController::class, "profile"])->name("profile.show");
// Route::get("/profile/{user}", [ProfileController::class, "profile"])->name("profile-show");
 
Route::get("/user/profile", [ProfileController::class, "profile_user"])->name("user.profile");

// Route::get("/home", [ProfileController::class, "profile_user"])->name("user.profile");


Route::get("/question/{user}", [QuestionController::class, "question_create"])->name("questions.show");
Route::get("/question/create", [QuestionController::class, "question_create"])->name("question.create");

Route::get("/studygroup/create", function(){return view("studygroup.create");});
Route::post("/studygroup/home", [StudyGroupController::class, "create_group"])->name("studygroup.home");


Route::get("/studygroup/index", function(){return view("studygroup.index");})->name("studygroup.index");