<?php

namespace App\Http\Livewire;

use App\Models\Judul;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(3)->get(),
            'juduls' => Judul::all()
        ]);
    }

    
}