@extends('layouts.master')
@section('content')

<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">أقسام</span> الموقع</h3>
                    <p>تسوق بأفضل المنتجات </p>
                </div>
            </div>
        </div>

        <div class="row">

{{-- @foreach ($categories as $category) --}}


            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="/product"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    {{-- <h3>{{$category->name}}</h3> --}}

                   // <h3>Strawberry</h3>
                   <!-- <p class="product-price"><span>Per Kg</span> 85$ </p>-->
                    <!--<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>-->
                </div>
            </div>

            {{-- @endforeach --}}



        </div>
    </div>
</div>

@endsection
