<div>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    
    <div class="">    
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ url('assets/slider/banner1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ url('assets/slider/banner2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ url('assets/slider/banner3.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Banyak pilihan produk untuk hobimu
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="card-produk col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ url('assets/kaos') }}/{{ $product->gambar }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">{{ $product->nama }}</h5>
                <p class="text-center"><a href = '{{ route('products.detail', $product->id) }}' class="btn btn-success">Rp. {{ number_format($product->harga) }}</a></p>
            </div>
            @endforeach
        </div>
        
        
    </section>
    <!-- End Categories of The Month -->


    <!-- judul Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Pilih produk anime kesukaanmu</h1>
                    <p>
                        cari berdasarkan judul anime yang di suka
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($juduls as $judul)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card-logo h-100 shadow">
                        <a href="{{route('products.judul', $judul->id)}}">
                            <img src="{{ url('assets/logo') }}/{{ $judul->gambar }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">{{ $judul->judul }}</a>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

</body>

</html>
</div>
