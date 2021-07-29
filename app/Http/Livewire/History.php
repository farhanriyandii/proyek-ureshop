<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class History extends Component
{
    public $pesanans;

    public function render()
    {
        if(Auth::user())
        {
            $this->pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        }

        return view('livewire.history'); 
    }
}
