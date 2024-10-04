@extends('partials.main')

@section('container')
    <div class="container mt-2">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                    <div class="col-md-4 col-lg-6 col-xl-4 my-2">
                        <div class="card text-black">
                            <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                            <a href="/product/{{ $product->id }}">
                                <img src="{{ $product->image_url }}" class="card-img-top"
                                    alt="{{ $product->product_name }}" />
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="card-title">{{ $product->product_name }}</h5>
                                        <p class="text-muted mb-4">{{ $product->description }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                        <span>Price</span><span>Rp{{ number_format($product->sell_price, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection
