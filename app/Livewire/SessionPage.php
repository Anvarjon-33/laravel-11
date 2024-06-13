<?php

namespace App\Livewire;

use Livewire\Component;

class SessionPage extends Component
{
    public function render()
    {
        return view('livewire.session-page');
    }

    public function add_to_session(): void
    {
        session()->put('test', session('test') + 1);
    }
}
