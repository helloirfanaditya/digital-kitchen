@extends('User.layouts.app')
@section('title','Menu')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ \Auth::guard('user')->user()->store->name ?? '' }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card shadow">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <a href="{{ route('merchant.menu.create') }}" class="btn btn-primary">Buat Menu Baru Disini</a>
                    </div>
                    <div>
                        <form action="{{ route('merchant.menu') }}" method="GET">
                            <input type="text" class="form-control" name="q" placeholder="Cari menu kamu disini...">
                        </form>
                    </div>
                </div>
            </div>
           <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card shadwo">
                        <div class="card-body">
                            <h4 class="text-center">Total Menu Kamu</h4>
                            <hr>
                            <p style="font-size: .9375rem;">Total Menu Kamu : <strong>{{ $menus->total() }} Pcs</strong></p>
                            <hr>
                            <p style="font-size: .9375rem;">Menu Paling Sering Dibeli : <strong>Mie Ayam Aceh</strong></p>
                        </div>
                    </div>
                </div>
               <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="text-center">Atur Menu Kamu Disini</h4>
                            <hr>
                            <div class="menus__">
                                @include('User.menu.ajax.table-index')
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('body').on('click', '.menus__table .pagination li a', function (e) {
            e.preventDefault();
            const url = $(this).attr('href');
            $.ajax({
                url: url,
                beforeSend: overlayLoading()
            }).done(function (response) {
                $('.menus__').html(response)
            })
            window.history.pushState('', '', url)
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
