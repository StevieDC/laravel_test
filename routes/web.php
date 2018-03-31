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

Route::get('/', 'home@show');

Route::get('/about', 'about@show')->name('about');


Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('gallery', function()
{
    return View::make('pages.gallery');
});

Route::get('blog', function()
{
    return View::make('pages.blog');
});

