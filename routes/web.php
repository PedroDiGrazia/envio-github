<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testroute', function () {
    Mail::to(users: 'mailtrap.club@gmail.com')->send(new \App\Mail\MyTestEmail());
});