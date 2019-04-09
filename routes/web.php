<?php

use App\Driver;
use App\Type;

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
    return redirect()->route('types.show', [Type::orderBy('name')->first()->name]);
});

Route::get('/types', function () {
    return redirect()->route('types.show', [Type::orderBy('name')->first()->name]);
})->name('types.index');

Route::get('/types/{type}', function (Type $type) {
    return view('welcome', [
        'type' => $type,
        'types' => Type::orderBy('name')->get(),
    ]);
})->name('types.show');
