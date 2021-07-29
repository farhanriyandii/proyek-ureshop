<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Component
{
    public function render()
    {
        $products = Product::latest()->paginate(5);
        return view('livewire.admin.admin-controller', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('livewire.admin.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'judul_id' => 'required',
            'is_ready' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'gambar' => 'required'

        ]);

        //fungsi eloquent untuk menambah data
        $data = Product::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('kaos/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('produk.index')
            ->with('success', 'Product Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $produk = Product::find($id);
        return view('livewire.admin.detail', compact('produk'));
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
        $produk = Product::find($id);
        return view('livewire.admin.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'judul_id' => 'required',
            'is_ready' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'gambar' => 'required'
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Product::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('produk.index')
            ->with('success', 'Produk Berhasil Diupdate');
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Product::find($id)->delete();
        return redirect()->route('produk.index')
            ->with('success', 'Product Berhasil Dihapus');
    }
}

