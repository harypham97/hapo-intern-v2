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
Route::get('/', 'SpaController@index');

Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'HomeController@index')->name('admin.dashboard');
        Route::get('project-user/show-list-assign', 'Project\UserController@showListAssign')->name('project_user.show_list_assign');
        Route::resource('staffs', 'StaffController');
        Route::resource('projects', 'ProjectController');
        Route::resource('project-user', 'Project\UserController');
        Route::resource('tasks', 'TaskController');
        Route::resource('manage-reports', 'ReportController');
        Route::resource('customers', 'CustomerController');
    });
});