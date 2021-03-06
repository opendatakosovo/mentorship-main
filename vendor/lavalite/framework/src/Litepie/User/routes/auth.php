<?php

/**
 * @Author: George John
 * @Date:   2018-01-19 18:11:12
 * @Last Modified by:   George John
 * @Last Modified time: 2019-04-01 17:54:00
 */
Route::group([
    'namespace' => '\\App\\Http\\Controllers',
    'prefix'    => '{guard}',
], function () {
    Route::get('home', 'UserController@home');
    Route::get('locked', 'UserController@locked');
    Route::get('reports', 'UserController@reports');

    Route::get('profile', 'UserController@getProfile');
    Route::get('password', 'UserController@getPassword');
    Route::post('profile', 'UserController@postProfile');
    Route::post('password', 'UserController@postPassword');

    Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
    Route::get('verify/send', 'Auth\LoginController@sendVerification');
    Route::get('verify/{code?}', 'Auth\LoginController@verify');

    Route::get('logout', 'Auth\LoginController@logout');

    Route::get('admin/projects', 'ProjectsController@index');
    Route::post('admin/projects/fetch_timesheets', 'ProjectsController@fetch_timesheets');
    Route::post('admin/projects/store', 'ProjectsController@store');
    Route::post('admin/projects/edit', 'ProjectsController@edit');
    Route::post('admin/projects/timesheet_store', 'ProjectsController@timesheet_store');
    Route::post('admin/projects/timesheet_destroy', 'ProjectsController@timesheet_destroy');
    Route::post('admin/projects/destroy', 'ProjectsController@destroy');
    Route::post('admin/projects/match', 'ProjectsController@match');
    Route::post('admin/projects/match_local_mentor', 'ProjectsController@match_local_mentor');


});

if (Trans::isMultilingual()) {
    Route::group(
        [
            'namespace' => '\\App\\Http\\Controllers',
            'prefix' => '{trans}',
            'where'  => ['trans' => Trans::keys('|')],
        ],
        function () {
            Route::group([
                'namespace' => '\\App\\Http\\Controllers',
                'prefix'    => '{guard}',
            ], function () {
                Route::get('home', 'UserController@home');
                Route::get('locked', 'UserController@locked');
                Route::get('reports', 'UserController@reports');

                Route::get('profile', 'UserController@getProfile');
                Route::get('password', 'UserController@getPassword');
                Route::post('profile', 'UserController@postProfile');
                Route::post('password', 'UserController@postPassword');

                Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
                Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
                Route::get('verify/send', 'Auth\LoginController@sendVerification');
                Route::get('verify/{code?}', 'Auth\LoginController@verify');

                Route::get('logout', 'Auth\LoginController@logout');
            });
        }
    );
}