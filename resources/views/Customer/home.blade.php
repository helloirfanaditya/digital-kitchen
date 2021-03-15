@extends('Customer.layouts.app')
@section('title','Digital Kitchen')
@section('content')
    @include('Customer.layouts.components.hero')
        <!-- Services start -->
        <section class="section" id="services">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title text-center mb-5">
                            <h3 class="mb-3">Menu Terbaru</h3>
                        </div>
                    </div>
                </div>

                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="card services-box">
                            <div class="card-body p-4">
                                <h4 class="mb-3">{{ $product->name }}</h4>
                                <h5><a href="">Dari Toko : {{ $product->store->name }}</a></h5>
                                <a href="{{ route('home.detail',['menu_id' => $product->menu_id]) }}" class="text-primary">Klik untuk beli <i class="mdi mdi-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->
        </section>
        <!-- Services end -->

        <!-- Features start -->
        <section class="section bg-light" id="features">
            <div class="bg-overlay"></div>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="title text-center mb-5">
                            <h5 class="text-primary small-title">Greeva</h5>
                            <h3>Ultra Features</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="features-img">
                            <img src="{{ asset('assets/landing/images/features/img-1.png') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="mt-5 mt-lg-0">
                            <h4 class="mb-3">It will be as simple as occidental in fact</h4>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam veritatis et</p>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus ut aut</p>
                            <div class="mb-4">
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Bootstrap v4.3.1</p>
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Sass Support</p>
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Responsive Layouts</p>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-rounded">Learn more <i class="mdi mdi-arrow-right ml-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center pt-5 mt-5">

                    <div class="col-lg-5">
                        <div>
                            <h4 class="mb-3">If several languages coalesce of the result</h4>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam veritatis et</p>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus ut aut</p>
                            <div class="mb-4">
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Bootstrap v4.3.1</p>
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Sass Support</p>
                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i> Responsive Layouts</p>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-rounded">Learn more <i class="mdi mdi-arrow-right ml-1"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="features-img mt-5 mt-lg-0">
                            <img src="{{ asset('assets/landing/images/features/img-2.png') }}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->
        </section>
        <!-- Features end -->

@endsection
