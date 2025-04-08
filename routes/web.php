<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', function () {
    Mail::to("joseluislealgarcia03@gmail.com")->send(new TestEmail());
    return "Email sent";
});