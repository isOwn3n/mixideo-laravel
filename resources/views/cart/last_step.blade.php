@extends('layouts.app')
@section('title') Checkout @endsection
@section('content')
<div class="container mt-3">
    <div class="card shadow-sm">
        <div class="card-body p-3">
            <table class="table table-sm table-hover table-striped">
                <thead class="bg-warning text-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $item)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($item->product->price, 2) }}</td>
                    </tr>
                    @endforeach
                    <tr class="font-weight-bold">
                        <td colspan="2" class="text-end">Total Quantity</td>
                        <td colspan="2" class="text-center">{{ number_format($cart->totalQuantity) }}</td>
                    </tr>
                    <tr class="font-weight-bold">
                        <td colspan="2" class="text-end">Total Price</td>
                        <td colspan="2" class="text-center">{{ number_format($cart->totalPrice, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end">
                            <form action="{{ route('checkout.payment') }}" method="post" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm px-4">Pay Now</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


@section('style')
<style>
    .btn-yellow {
        background-color: #fbc11c;
        color: #000;
        border: none;
    }

    .btn-yellow:hover {
        background-color: #e0a800;
        color: #000;
    }
</style>
@endsection