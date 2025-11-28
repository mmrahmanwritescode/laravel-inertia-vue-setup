<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home', [
        'message' => 'Laravel + Inertia + Vue 3 + Bootstrap 5 (Manual Setup)!'
    ]);
});
