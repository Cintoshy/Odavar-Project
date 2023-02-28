<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('person');
});

Route::get('/person', function() {
    return view('person', [
        'name' => 'Mark Louis R. Odavar',
        'age'  => 22,
        'address' => 'Nabua, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
            [
                'name' => 'Pedro',
                'age'  => 17
            ],
            [
                'name' => 'Maria',
                'age'  => 35
            ],
            [
                'name' => 'Naruto',
                'age'  => 11
            ],
        ]
    ]);
});