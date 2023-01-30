<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserDashboard;
use App\Http\Livewire\IndexPage;

Route::get('/', IndexPage::class);
Route::get('/user-dashboard', UserDashboard::class);