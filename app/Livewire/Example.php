<?php

namespace App\Livewire;

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
        return view('livewire.example', [
            'message' => $this->message
        ]);
    }
}
