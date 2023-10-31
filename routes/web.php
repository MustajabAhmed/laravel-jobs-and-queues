<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;

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
    return view('welcome');
});

Route::get('email-test', function(){
  
    $details['email'] = 'mustajabahmed337060@gmail.com';
  
    dispatch(new SendEmailJob($details));
  
    dd('done');
});

