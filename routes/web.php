<?php

use Illuminate\Support\Facades\Route;
use App\Controller\ContactsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [ContactsController::class, 'retrieve']);

