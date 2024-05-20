<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class InfoMessage extends Component
{
    public string $info = 'waiting for Channel ...';

    public function render()
    {
        return view('livewire.info-message');
    }

    /*
        #[On('echo:pub,Debugger')]
        public function infoMessage(mixed $payload)
        {
            $this->dispatch('info');
        }
    */
    public function getListeners(): array
    {
        return [
            "echo:pub,Debugger" => "notifier"
        ];
    }

    public function notifier($payload): void
    {
        $this->info = $payload['message'];
        $this->dispatch('notifier');
    }
}
