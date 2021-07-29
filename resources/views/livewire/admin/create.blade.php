@extends('layouts.app')
  

   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Produk
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('produk.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">nama</label>                    
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" >                
                </div>
                <div class="form-group">
                    <label for="harga">harga</label>                    
                    <input type="number" name="harga" class="form-control" id="harga" aria-describedby="harga" >                
                </div>
                <div class="form-group">
                    <label for="judul_id">dari anime</label>                    
                    <input type="number" name="judul_id" class="form-control" id="judul_id" aria-describedby="judul_id" >                
                </div>
                <div class="form-group">
                    <label for="is_ready">tersedia</label>                    
                    <input type="number" name="is_ready" class="form-control" id="is_ready" aria-describedby="is_ready" >                
                </div>
                <div class="form-group">
                    <label for="jenis">jenis</label>                    
                    <input type="text" name="jenis" class="form-control" id="jenis" aria-describedby="jenis" >                
                </div>
                <div class="form-group">
                    <label for="berat">berat</label>                    
                    <input type="number" name="berat" class="form-control" id="berat" aria-describedby="berat" >                
                </div>
                <div class="mb-3">
                    <label
                        for="exampleInputEmail1"
                        class="form-label">
                        Masukkan Gambar
                    </label>
                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                    />
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
