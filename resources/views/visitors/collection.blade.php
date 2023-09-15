@extends('layouts.template')
@section('content')
{{-- jumbotron --}}
<section class="jumbotron text-center">
  <h1 class="display-4">Products</h1>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5dc8d6" fill-opacity="1" d="M0,288L360,64L720,96L1080,96L1440,32L1440,320L1080,320L720,320L360,320L0,320Z"></path></svg>
</section>
{{-- jumbotron --}}
{{-- <hr> --}}
<section id="product">
  <div class="container">
    
    <div class="row justify-content-center">
      @foreach ($products as $product)
      <div class="card col-md-3" style="background-color:#5dc8d6">
        <div class="card-body">
          <a href="{{route('order')}}">
            <img src="storage/images/{{$product->product_image}}" class="card-img-top" alt="" />
          </a>
          <h4 class="text-center">{{$product->product_name}}</h4>
          <p class="text-center">{{$product->product_description}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5dc8d6" fill-opacity="1" d="M0,0L0,160L288,160L288,64L576,64L576,96L864,96L864,64L1152,64L1152,128L1440,128L1440,0L1152,0L1152,0L864,0L864,0L576,0L576,0L288,0L288,0L0,0L0,0Z"></path></svg>
</section>
@endsection