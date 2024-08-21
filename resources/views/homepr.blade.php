@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card-header">
        <form action="{{route('products')}}">
            <button  class="btn btn-info" >Home Product</button>
        </form>

    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
					<form action="{{route('adminCreateProduct')}}">
						<button  class="btn btn-success" >Add Product</button>
					</form>

				</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
					<table class="table">
						<thead>
						  <tr>
							<th scope="col">#</th>
							<th scope="col">Product Name</th>
							<th scope="col">Product Image</th>
                            <th scope="col">Product Price</th>
							<th scope="col">Created at</th>
							<th scope="col">Actions</th>
						  </tr>
						</thead>
						<tbody>

						  @foreach ($products as $product)
						  <tr>
							<th scope="row">{{$product->id}}</th>
							<td>{{$product->name}}</td>

                            <th scope="row">{{$product->id}}</th>
							<td>{{$product->price}}</td>
                            
                            <td><img  style="width: 100px;height=100px;" src="{{Storage::url($product->image)}}" alt=""></td>

                            <td>{{$product->created_at}}</td>

                            <td><a  href="{{route('adminEditProduct',$product->id)}}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Edit</a>


								<a href="{{route('adminDeleteProduct',$product->id)}}"  class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Delete</a></td>
						  </tr>
						  @endforeach

						</tbody>

        </div>
         </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
@endsection
