<?php

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

Route::get('/', function () {
    $comics_array = config('comics');
    $data = [
        'comics_array' => $comics_array,
        'socials_array' => [
            [
                'icon_url' => '../images/footer-facebook.png'
            ],
            [
                'icon_url' => '../images/footer-periscope.png'
            ],
            [
                'icon_url' => '../images/footer-pinterest.png'
            ],
            [
                'icon_url' => '../images/footer-twitter.png'
            ],
            [
                'icon_url' => '../images/footer-youtube.png'
            ]
            ],
    ];
    return view('home', $data);
})->name('home');