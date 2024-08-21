@extends('layouts.master')

@section('content')

<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">منتجات</span> الموقع</h3>
                    <p>لدينا كل ما تحتاجه بضغطة زر واحدة</p>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- @foreach ($products as $product) --}}

            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                       {{-- <img  src="{{Storage::url($product->image)}}" alt="" > --}}

                        <a href="single-product.html"><img  style="max-height: 250px !important ;min height:250px !important"
                             src="assets/img/products/s2.jpg" alt=""></a>
                    </div>
                    {{-- <h3>{{$product->name}}</h3> --}}
                    <h3>حقيبة نسائية</h3>
                    <p class="product-price"> 85$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> أضف إلى السلة</a>
                </div>

            </div>
            {{-- @endforeach --}}
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                       {{-- <img  src="{{Storage::url($product->image)}}" alt="" > --}}

                        <a href="single-product.html"><img  style="max-height: 250px !important ;min height:250px !important"
                             src="assets/img/products/glasses.jpg" alt=""></a>
                    </div>
                    {{-- <h3>{{$product->name}}</h3> --}}
                    <h3>نظارت شمسية  </h3>
                    <p class="product-price"> 15$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> أضف إلى السلة</a>
                </div>

            </div>
            {{-- @endforeach --}}
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                       {{-- <img  src="{{Storage::url($product->image)}}" alt="" > --}}

                        <a href="single-product.html"><img  style="max-height: 250px !important ;min height:250px !important"
                             src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    {{-- <h3>{{$product->name}}</h3> --}}
                    <h3>جاكيت نسائي</h3>
                    <p class="product-price"> 85$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> أضف إلى السلة</a>
                </div>

            </div>
            {{-- @endforeach --}}

        </div>

    </div>
</div>
@endsection


