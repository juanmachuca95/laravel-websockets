<?php

use Illuminate\Support\Facades\Route;
use App\Events\MyEvent;

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
    return view('welcome');
});

Route::get('/index',function(){
	return view('index');
});

Route::get('/enviar', function(){
	echo "Levantando el evento";
	event(new MyEvent('Levanto el evento'));
});