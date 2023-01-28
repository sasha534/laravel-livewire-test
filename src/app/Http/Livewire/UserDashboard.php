<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserDashboard extends Component
{
    public function render()
    {
        return view('livewire.user-dashboard',[
            'users' => User::all(),
        ]);
    }
}
