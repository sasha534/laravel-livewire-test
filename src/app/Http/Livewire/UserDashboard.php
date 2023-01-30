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

    public $shownTableTitles = [
        'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
    ];

    public function resetSortUsersByName(string $sortUsersByName = 'asc')
    {
        $this->sortUsersByName = $sortUsersByName;
    }

    // public function resetShownTableTitles($shownTableTitles)
    // {
    //     $this->shownTableTitles = $shownTableTitles;
    // }

    public function render()
    {
        $users = User::select($this->shownTableTitles)->orderBy('name', $this->sortUsersByName)->paginate($this->paginationCount);
        // foreach($users as $u){
        //     dd($u);
        // }        

        return view('livewire.user-dashboard',[
                'users' => $users,
            ])->extends('layouts.app')->section('content');

    }
}
