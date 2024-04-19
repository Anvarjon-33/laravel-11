<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Events\Debugger::dispatch('new Event');
    return view('welcome');
});

