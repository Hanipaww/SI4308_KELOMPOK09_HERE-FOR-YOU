<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
        Route::get('/','DashboardController')->name('dashboard');
        Route::resource('users',UserController::class);
        Route::resource('banks',BankController::class);
        Route::resource('psychologists',PsychologistController::class);
        Route::get('psychologist/{id}/schedule/create','PsychologistScheduleController@create')->name('schedules.create');
        Route::post('psychologist/{id}/schedule/create','PsychologistScheduleController@store')->name('schedules.store');
        Route::get('psychologist/{psycholofist_id}/schedule/{id}/edit','PsychologistScheduleController@edit')->name('schedules.edit');
        Route::patch('psychologist/schedule/{id}/edit','PsychologistScheduleController@update')->name('schedules.update');
        Route::delete('psychologist/schedule/{id}/delete','PsychologistScheduleController@destroy')->name('schedules.destroy');
        Route::get('profile','ProfileController@show')->name('profile');
        Route::post('profile','ProfileController@update')->name('profile.update');

    });
});
Route::get('/','HomeController@index')->name('home');
