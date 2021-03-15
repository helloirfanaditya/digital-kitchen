@extends('Customer.layouts.app')
@section('title', $product->name.' - '.$product->store->name)
@section('content')
@include('Customer.layouts.components.hero')
<!-- Services start -->
<section class="section" id="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="title text-center mb-5">
                    <h3 class="mb-3">{{ $product->name.' - '.$product->store->name }}</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card service-box">
                    <div class="card-body p-4">
                        <div class="container">
                            <h4>{{ $product->name }}</h4>
                            <hr>
                            <h4>Rp. {{ number_format($product->price) }}</h4>
                            <hr>
                            <p>{!! $product->description !!}</p>
                        </div>
                        <form>
                            <input type="hidden" id="menu_id" data-menu_id="{{ $product->menu_id }}">
                            <div class="row justify-content-center">
                                <input type="text" name="qty" class="form-control" style="width: 20%;" id="qty">
                            </div>
                            <div class="row justify-content-center mt-2">
                                <button type="submit" class="btn btn-primary" id="cart-button">Tambah ke Keranjang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container-fluid end -->
</section>
<!-- Services end -->
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('body').on('click', '#cart-button', function (e) {
            e.preventDefault();
            const id = $('#menu_id').data('menu_id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"post",
                url: '/item/add-to-cart/'+id,
                data: {
                    'qty': $('#qty').val()
                },
                beforeSend: overlayLoading(),
            }).done(function(response){
                $('#cart-added').html(response.total)
            });
        });
        function overlayLoading() {
            $.LoadingOverlay("show");
            setTimeout(function(){
                $.LoadingOverlay("hide");
            });
        }
    });

</script>
@endsection
