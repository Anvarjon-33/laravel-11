<?php

use App\Events\Debugger;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Debugger::dispatch('Debugger_message');
    return view('main.welcome');
});


