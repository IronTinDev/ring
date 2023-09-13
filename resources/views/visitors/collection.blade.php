@extends('layouts.template')
@section('content')
{{-- jumbotron --}}
<section class="jumbotron text-center">
  <h1 class="display-4">Products</h1>
</section>
{{-- jumbotron --}}
{{-- <hr> --}}
<section id="product">
  <div class="container">
    
    <div class="row">
      @foreach ($products as $product)
      <div class="card col-3" style="background-color:#5dc8d6">
        <div class="card-body">
          <a href="">
            <img src="storage/images/{{$product->product_image}}" class="card-img-top" alt="" />
          </a>
          <h4 class="text-center">{{$product->product_name}}</h4>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>
@endsection