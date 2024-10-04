@extends('partials.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $product->image_url }}" width="100%">
                    </div>
                    <div class="col-md-6 mt-5 py-5">
                        <h1>{{ $product->product_name }}</h1>
                        <h2>{{ $product->description }}</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus mollitia ipsum voluptas impedit maxime facere, odit dolores non aut.</p>

                        <h1>Price: Rp{{ number_format($product->sell_price, 2, ",", ".") }}</h1>

                        <button class="btn btn-primary btn-lg mt-5" data-toggle="modal" data-target="#purchaseModal">Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Confirm Purchase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to purchase <strong>{{ $product->product_name }}</strong> for Rp{{ number_format($product->sell_price, 2, ",", ".") }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="/product/purchase/{{ $product->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Confirm Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
