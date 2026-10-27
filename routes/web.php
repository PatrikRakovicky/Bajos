<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

Route::livewire('/registracia', 'pages::register')->name('register');
Route::livewire('/prihlasenie', 'pages::login')->name('login');