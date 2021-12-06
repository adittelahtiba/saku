<?php

use App\Http\Controllers\Dashboard;
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

Route::get('/', [Dashboard::class, 'index']);


Route::get('/about', function () {
    return view('about', [
        'nama' => 'Aditya Pangestu',
        'jsFile' => 'about.js',
        'title' => 'About',
        'email' => 'adit@meownikah.com',
        'img' => 'FBu1jkmUYAU1XoA.jfif'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'jsFile' => 'blog.js',
        'title' => 'Blog ',
    ]);
});
