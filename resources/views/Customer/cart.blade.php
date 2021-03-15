@extends('Customer.layouts.app')
@section('title', 'Keranjang Anda')
@section('content')
@include('Customer.layouts.components.hero')
<!-- Services start -->
<section class="section" id="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card service-box">
                    <div class="card-body p-4">
                        <h4 class="text-center">Keranjang</h4>
                        <hr>
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Dari</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Harga Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cart->name }}</td>
                                    <td>{{ $cart->attributes['toko'] }}</td>
                                    <td>{{ $cart->quantity }}</td>
                                    <td>{{ $cart->price * $cart->quantity }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"></td>
                                    <th>Total</th>
                                    <th>{{ \Cart::getTotal() }}</th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <a href="{{ route('checkout-view') }}" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
