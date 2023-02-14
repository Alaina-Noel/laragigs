<?php

use Illuminate\Http\Request;
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
    return view('listings',[
        'heading' =>  'All Listings',
        'listings' => 
        [
            [ 'id' => 42,
            'title' => 'this is the title of listing #1',
            'description' => 'this is the description blah blah'],
            [ 'id' => 43,
            'title' => 'this is the title of listing #2',
            'description' => 'this is the description #2 blah blah']
        ]
    ]);
});
 