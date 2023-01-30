<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserDashboard extends Component
{
    use WithPagination;

    public int $paginationCount = 10;

    public string $sortUsersByName = 'asc';

    public $shownTableTitles = [
        'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
    ];

    public function render()
    {
        $users = User::select($this->shownTableTitles)->orderBy('name', $this->sortUsersByName)->paginate($this->paginationCount);

        return view('livewire.user-dashboard',[
                'users' => $users,
            ])->extends('layouts.app')->section('content');

    }
}
