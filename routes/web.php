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

Route::get('/', 'PublicController@home');

Route::prefix('{guard}')->name('guard.')->group(function () {
    Auth::routes(['verify' => true]);
    Route::get('/', 'ResourceController@home');
    Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');



});

//Route::group(['middleware' => 'auth'], function () {

Route::group(['middleware' => 'auth.basic'], function()
{
    Route::get('admin/projects', 'ProjectsController@index');
    Route::post('admin/projects/fetch_timesheets', 'ProjectsController@fetch_timesheets');
    Route::post('admin/projects/store', 'ProjectsController@store');
    Route::post('admin/projects/edit', 'ProjectsController@edit');
    Route::post('admin/projects/timesheet_store', 'ProjectsController@timesheet_store');
    Route::post('admin/projects/timesheet_destroy', 'ProjectsController@timesheet_destroy');
    Route::post('admin/projects/destroy', 'ProjectsController@destroy');
    Route::post('admin/projects/match', 'ProjectsController@match');
    Route::post('admin/projects/match_local_mentor', 'ProjectsController@match_local_mentor');
    Route::post('admin/teams/upload_team_image', 'ProjectsController@upload_team_image');
    Route::get('admin/skills', 'SkillsController@index');
    Route::post('admin/skills/store', 'SkillsController@store');
    Route::post('admin/skills/edit', 'SkillsController@edit');
    Route::post('admin/skills/destroy', 'SkillsController@destroy');

});

Route::post('admin/user_files/upload_files', 'ApplicationsController@upload_user_files');
Route::get('admin/projects/get_team_projects', 'TeamsController@get_team_projects');
Route::get('thank-you', 'ApplicationsController@thanks');

Route::get('sign-in', 'SignInController@sign_in');


Route::get('admin/projects/get_project', 'ApplicationsController@get_project');

Route::post('user/application/store', 'ApplicationsController@application_store');
Route::get('user/application/store_certificates/{id}', 'ApplicationsController@store_certificates');
Route::get('download/{id}/{name}', 'ApplicationsController@getDownload');
Route::get('download_cv/{email}/{name}', 'ApplicationsController@getDownloadCV');
Route::post('user/application/store_certificates/upload', 'ApplicationsController@upload');

