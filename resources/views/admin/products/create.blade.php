@extends ('layouts.app')
@section('content')
    <form action="{{route('adminProductStore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product Image</label>
            <input type="file" name="image" id="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="" name="name" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
         <input type="submit" value="Create">
          </div>
    </form>
@endsection
