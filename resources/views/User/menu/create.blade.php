@extends('User.layouts.app')
@section('title','Buat Menu Baru')
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
                <div class="card-body">
                    <h4 class="text-center">Buat Menu baru kamu disini</h4>
                    <hr>
                    <form action="{{ route('merchant.menu.post.create') }}" method="post">
                        @csrf
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Toko </label>
                                        <input type="text" class="form-control" value="{{ \Auth::guard('user')->user()->store->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Menu </label>
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Harga Menu </label>
                                        <input type="text" class="form-control" name="price" id="price">
                                        @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Stock Awal </label>
                                        <input type="text" class="form-control" name="stock">
                                        @error('stock')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Deskripsikan Menu Kamu Disini </label>
                                        <textarea name="description" id="description"></textarea>
                                        @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary">Buat Menu Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            CKEDITOR.replace('description');
            $('#price').on('change click keyup input paste',function(e){
                $(this).val(function (index, value) {
                    return value.replace(/(?!\.)\D/g, "").replace(/(?<=\..*)\./g, "").replace(/(?<=\.\d\d).*/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                });
            })
        });
    </script>
@endsection
