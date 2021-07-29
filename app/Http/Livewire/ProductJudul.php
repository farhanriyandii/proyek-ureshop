<?php

namespace App\Http\Livewire;

use App\Models\Judul;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductJudul extends Component
{
    use WithPagination;

    public $search;
    public $judulDetail;
    public $judul;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($judulId)
    {
        $productDetail = Judul::find($judulId);

        if($productDetail) {
            $this->judul = $productDetail;
        }
    }
    public function render()
    {
        if($this->search) {
            $products = Product::where('judul_id', $this->judul->id)->where('nama', 'like', '%'.$this->search.'%')->simplepaginate(8);
        }else {
            $products = Product::where('judul_id',  $this->judul->id)->simplepaginate(8);
        }
        
        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}