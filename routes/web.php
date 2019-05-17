<?php

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

Route::middleware(['auth'])->group(function(){

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('/');
    
    Route::get('/home', function () {
        return redirect()->route('/');
    })->name('home');
    
    Route::get('admin', 'Admin\AdminController@index');
    Route::resource('/colleagues', 'Admin\UsersController');
    Route::resource('/notes', 'NoteController');
    Route::resource('/companies', 'CompanyController');
    Route::resource('/customers', 'CustomerController');
    Route::resource('/statusses', 'StatusController');

    Route::resource('/my/notes', 'MyNotesController');
});