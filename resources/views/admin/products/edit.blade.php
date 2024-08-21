@extends('layouts.app')
@section('content')
    <form action="{{route('adminProductUpdate',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
            <input type="text"  value="{{$product->name}}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product price</label>
            <input type="text"  value="{{$product->price}}" name="price" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div> --}}
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product Image</label>
            <img  style="width: 100px;height=100px;" src="{{Storage::url($product->image)}}" alt="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Change Image</label>
            <input type="file" name="image" id="">
          </div>

          <div class="mb-3">
         <input type="submit" value="Update">
          </div>
    </form>
@endsection
