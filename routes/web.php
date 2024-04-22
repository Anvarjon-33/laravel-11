<?php

use App\Events\Debugger;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Debugger::dispatch('running queue job ...');
    return view('main.welcome');
});


