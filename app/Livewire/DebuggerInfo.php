<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class DebuggerInfo extends Component
{
    public string $message;

    public mixed $data;

    public function render(): View
    {
        return view('livewire.debugger-info');
    }

    #[On('echo:pub,Debugger')]
    public function _debugger($message): void
    {
        $this->message = $message['message'];
    }
}
