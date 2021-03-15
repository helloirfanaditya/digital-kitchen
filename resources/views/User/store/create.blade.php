@extends('User.layouts.app')
@section('title','Home')
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
                    <h4 class="text-center">Buat Toko Kamu Disini.</h4>
                    <hr>
                    <form action="{{ route('merchant.store.post.create') }}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Toko :</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Deskripsikan tentang Toko : </label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Buat Sekarang</button>
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
        })
    </script>
@endsection
