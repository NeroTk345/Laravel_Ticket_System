<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Ticket.ticket', function () {
    return view('Ticket.ticket');
});