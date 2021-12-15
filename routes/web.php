<?php

use App\Http\Controllers\Dashboard;
use App\Models\Saldo;
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


Route::get('/about-{Saldo:id}', function (Saldo $Saldo) {
    dd($Saldo->user->name);
});

Route::get('/blog', function () {
    return view('blog', [
        'jsFile' => 'blog.js',
        'title' => 'Blog ',
        'detail' => 'Aku tak ingin menangis menerka gerimis aku tak ada nyali',
    ]);
});

/* 
chiken and coke ung ketika marah bassemida, umak bangsung hambonnnnn eleven eleven elvene ayo ayo 
i can walk away, i have in i miss you
*/
