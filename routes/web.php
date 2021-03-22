<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;

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
//breeze
Route::get('', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//booking page
Route::get('booking/{id}',[MenuController::class,'book']);
//booking action
//Route::get('/adminDash','adminDash');
//admin login
Route::get('/adminlogin',[DashboardController::class,'adminlogin']);
//login action
Route::get('/loginAction',[DashboardController::class,'loginAction']);
//airport form
Route::get('/airport',[AdminController::class,'airport']);
//flight form
Route::get('/flight',[AdminController::class,'flight']);
//airport insert
Route::get('addairport',[AdminController::class,'addairports']);
//flight insert
Route::get('addflight',[AdminController::class,'addflight']);
//airport view
Route::get('/airpotview',[AdminController::class,'airportview']);
//airport delete
Route::get('delete/{id}',[AdminController::class,'delete']);
//airport updation
Route::get('update/{id}',[AdminController::class,'show']);
Route::post('/updateAction',[AdminController::class,'update']);
//search flight
Route::get('/search',[MainController::class,'search']);
//search action
Route::get('/searchAction',[MainController::class,'searchAction']);
//view notification
Route::get('/notification',[AdminController::class,'notification']);
//add notification
Route::get('addnotification',[AdminController::class,'addnotification']);
Route::get('/notificationview',[AdminController::class,'notificationview']);
//delete notification
Route::get('deletenotif/{id}',[AdminController::class,'deletenotif']);
//ticket form
Route::get('/ticket',[MenuController::class,'ticket']);
//ticket generation
Route::get('/ticketSearch',[MenuController::class,'ticketSearch']);
//flight view
Route::get('/flightview',[AdminController::class,'flightview']);
//flight deletion
Route::get('delete1/{id}',[AdminController::class,'delete1']);
//flight updation
Route::get('update1/{id}',[AdminController::class,'show1']);
Route::post('/update1Action',[AdminController::class,'update1']);
// Route::post('/bookAction',[MenuController::class,'bookdata']);
//booking
Route::get('bookAction',[MenuController::class,'bookdata']);
Route::get('/flightviewu',[MenuController::class,'flightview']);
//payment
Route::view('payment','payment');
Route::view('pay','sucess');
Route::view('/pbook/{id}',[MenuController::class,'pbook']);
//user view notification
Route::get('/usernotification',[AdminController::class,'usernotification']);
require __DIR__.'/auth.php';
Route::get('/nav', function () {
    return view('navbar');
});
Route::view('adminDash','adminDash');
Route::view('/loghome','welcome');