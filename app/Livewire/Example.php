<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Example extends Component
{
    public $message = "Hello, Livewire!";

    public function changeMessage()
    {
        $this->message = "The message has changed!";
    }

    public function render()
    {
        $user = User::find(1);
        $user->assignRole('administrateur');
        dd($user->hasRole('administrateur'));
        return view('livewire.example', [
            'message' => $this->message
        ]);
    }
}
