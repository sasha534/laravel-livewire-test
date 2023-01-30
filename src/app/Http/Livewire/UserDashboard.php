<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserDashboard extends Component
{
    use WithPagination;

    public $paginationCount = 10;

    public $sortUsersByName = 'asc';

    public function resetPaginationCount(int $paginationCount = 10)
    {
        $this->paginationCount = $paginationCount;
    }

    public function resetSortUsersByName(string $sortUsersByName = 'asc')
    {
        $this->sortUsersByName = $sortUsersByName;
    }

    public function render()
    {
        $users = User::orderBy('name', $this->sortUsersByName)->paginate($this->paginationCount);

        return view('livewire.user-dashboard',[
                'users' => $users,
            ])->extends('layouts.app');

    }
}
