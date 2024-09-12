<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{

    public $message = "Hello, Livewire!";

    public function changeMessage()
    {
        $this->message = "The message has changed!";
    }

    public function render()
    {
        return view('livewire.example-component', [
            'message' => $this->message
        ]);
    }
}
