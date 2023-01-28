<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserDashboard;


Route::get('/user-dashboard', UserDashboard::class);