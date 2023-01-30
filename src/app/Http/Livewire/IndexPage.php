<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class IndexPage extends Component
{
    public $paginationCount = 10;
    // public $select = [
    //     'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
    // ];

    public $select = [];

    public function render()
    {
        return view('livewire.index-page',[
            'users' => User::all(),
            'select' => $this->select,
            // 'paginationCount' => $this->paginationCount,
        ])->extends('layouts.app')
        ->section('content');
    }
}
