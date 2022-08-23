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
    
    $data = [
        'NavBarlinks' => [
            [
                'name' =>'About', 
                'link' => 'about'
            ],
            [
                'name' =>'More', 
                'link' => 'about'
            ],
            [
                'name' =>'Core', 
                'link' => 'about'
            ],
            [
                'name' =>'Services', 
                'link' => 'about'
            ],
            [
                'name' =>'Git', 
                'link' => 'about'
            ],
        ],
    ];

    return view('homepage', $data);

})->name('homepage');


Route::get('/about', Function() {

    return view('about');
})->name('about');