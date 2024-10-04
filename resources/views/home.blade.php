@extends('partials.main')

@section('container')

        <div class="container my-2">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 mt-1">AIESEC Merchandise Store!</h1>
                    <p class="lead">Explore our collection of neatly and uniquely designed merchandise that reflects creativity and style. Each item is crafted with care, ensuring that you stand out while showcasing your personality..</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="products" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Products</a>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">About</button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="/images/aiesecinpu.png" alt="" width="720">
                </div>
            </div>
        </div>

@endsection
