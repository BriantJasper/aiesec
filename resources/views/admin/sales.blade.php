@extends('admin.layouts.main')

@section('container')
    <h1>Product Sales</h1>

    <table class="table table-striped">
        <tr>
            <th>User Name</th>
            <th>Product</th>
            <th>Manufacturing Cost</th>
            <th>Sell Price</th>
        </tr>
        @foreach ($purchases as $purchase)
            <tr>
                <td>{{ $purchase->user->name }}</td>
                <td>{{ $purchase->product->product_name }}</td>
                <td>Rp{{ number_format($purchase->product->manufacturing_cost, 2, ',', '.') }}</td>
                <td>Rp{{ number_format($purchase->product->sell_price, 2, ',', '.') }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2" class="text-center align-center fw-bold">
                Total
            </td>
            <td class="align-center fw-bold">
                @php
                    $total_cost = 0;
                    foreach ($purchases as $purchase) {
                        $total_cost += $purchase->product->manufacturing_cost;
                    }
                @endphp
                Rp{{ number_format($total_cost, 2, ',', '.') }}
            </td>
            <td class="align-center fw-bold">
                @php
                    $total_sales = 0;
                    foreach ($purchases as $purchase) {
                        $total_sales += $purchase->product->sell_price;
                    }
                @endphp
                Rp{{ number_format($total_sales, 2, ',', '.') }}
            </td>
        </tr>
        <tr>
            <td colspan="3" class="text-center align-center fw-bold">Profit</td>
            <td class="align-center fw-bold">
                @php
                    $profit = $total_sales - $total_cost;
                @endphp
                Rp{{ number_format($profit, 2, ',', '.') }}
            </td>
        </tr>
    </table>
@endsection
