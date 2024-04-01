<?php

namespace App\Livewire;

use App\Events\CreateUserLogo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserAliasSave extends Component
{
    public string $alias = '';

    public function render()
    {
        return view('livewire.user-alias-save');
    }

    /**
     * @throws \Exception
     */
    public function send_alias()
    {
        if ($this->alias === '' || !Auth::check()) {
            return;
        }
        $id = Auth::id();
        CreateUserLogo::dispatch((string) $this->alias, (int) $id);
        $this->alias = '';
    }
}
