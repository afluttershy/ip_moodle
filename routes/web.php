<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/',[MainController::class, 'index'])->name('welcome');

Route::post('/', [MainController::class, 'formconfirm'])->name('formconfirm');
Auth::routes();
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('getlogout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
        
        Route::resource('formusers', 'Admin\FormuserController')->except([
            'destroy'
        ]);
        Route::delete('/formusers/{formuser}', [App\Http\Controllers\Admin\FormuserController::class, 'destroy'])->name('formuser.destroy');
       
        
    
});