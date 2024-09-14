<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class IncrSess extends Component
{
    public int $count = 5;

    public function mount(Request $request)
    {
    }

    public function render()
    {
        return view('livewire.incr-sess');
    }

    #[NoReturn]
    public function increment(): void
    {
        dd("WTF");
        $this->count++;
    }
}
