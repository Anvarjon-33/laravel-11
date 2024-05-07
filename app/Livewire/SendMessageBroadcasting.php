<?php

namespace App\Livewire;

use App\Events\Debugger;
use Illuminate\Foundation\Events\DiagnosingHealth;
use Livewire\Component;
use Livewire\Attributes\On;

class SendMessageBroadcasting extends Component
{
    public string $rec_message = 'no_data';
    public string $message='';
    public function render()
    {
        return view('livewire.send-message-broadcasting');
    }

    public function message_dispatch():void
    {
        if($this->message !== ''){
            Debugger::dispatch($this->message);
            $this->dispatch('rec-message', $this->message);
        }
        $this->message = '';
    }
}
