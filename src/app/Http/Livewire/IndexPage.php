<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class IndexPage extends Component
{

    public $paginationCount = 10;

    public function render()
    {
        return view('livewire.index-page',[
            'users' => User::all(),
            // 'paginationCount' => $this->paginationCount,
        ])->extends('layouts.app')
        ->section('content');
    }
}
