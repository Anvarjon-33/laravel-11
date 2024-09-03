<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IncrSess extends Component
{
    public function mount(Request $request){
        if ($request->session()->get("incr") == null){
            $request->session()->put("incr", 0);
        }
    }

    public function render()
    {
        return view('livewire.incr-sess');
    }
    public function increment_session():void{
        $ac = request()->session()->get("incr");
        request()->session()->put('incr', $ac +=1);
    }
}
