@extends('Customer.layouts.app')
@section('title', 'Keranjang Anda')
@section('content')
@include('Customer.layouts.components.hero')
<!-- Services start -->
<section class="section" id="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card service-box">
                    <div class="card-body">
                        <h5 class="text-center">Checkout Form</h5>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" name="receipt">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" name="receipt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card service-box">
                    <div class="card-body">
                        <h5 class="text-center">Keranjang</h5>
                        <hr>
                        <table class="table table-borderless">
                            <thead>
                                @foreach (\Cart::getContent() as $cart)
                                <tr>
                                    <th>{{ $cart->name }}</th>
                                    <th>{{ $cart->quantity }} Items</th>
                                    <th>{{ $cart->price }}</th>
                                </tr>
                                @endforeach
                                <tr>
                                    <th colspan="1"></th>
                                    <th>Total</th>
                                    <th>{{ \Cart::getTotal() }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
