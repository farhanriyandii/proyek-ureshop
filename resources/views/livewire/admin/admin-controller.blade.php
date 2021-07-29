@include('layouts.app')
 

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('produk.create') }}"> Create New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>judul id</th>
            <th>Ready</th>
            <th>jenis</th>
            <th>berat</th>
            <th>gambar</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->judul_id }}</td>
            <td>{{ $product->is_ready }}</td>
            <td>{{ $product->jenis }}</td>
            <td>{{ $product->berat }}</td>
            <td>{{ $product->gambar }}</td>
            <td>
               <a class="btn btn-danger" href="{{ route('produk.destroy',$product->id) }}">delete</a>
               <a class="btn btn-primary" href="{{ route('produk.edit',$product->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {!! $products->links() !!}
    </div>
      
