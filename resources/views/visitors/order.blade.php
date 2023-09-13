@extends('layouts.template')
@section('content')
{{-- jumbotron --}}
<section class="jumbotron text-center">
  <h1 class="display-4">Pre Order</h1>
</section>
{{-- jumbotron --}}
<section id="product" class="pt-2 pb-2">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-8" style="background-color:#5dc8d6">
        <p>
            @if (session('message'))
                <div class="alert">{{ session('message') }}</div>
            @endif
        </p>
        <form method="POST" action="{{route("email.send")}}">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="customer" class="form-control" id="inputcustomer3" />
                </div>
                @if($errors->has('customer'))
                  <div class="form-text text-danger">{{ $errors->first('customer') }}</div>
                @endif
            </div>
          
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail3" />
            </div>
            @if($errors->has('email'))
              <div class="form-text text-danger">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Telpon</label>
            <div class="col-sm-10">
              <input type="number" name="phone" class="form-control" id="inputEmail3" />
            </div>
            @if($errors->has('phone'))
              <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
            @endif
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Pilih Product</label>
            <select name="name" id="" class="form-control">
                @foreach ($products as $product)
                <option value="{{$product->id}}" {{old('name',$product->product_name) == "Silver" ? "selected" :""}}>{{$product->product_name}} - {{$product->product_description}}</option>
                @endforeach
            </select>
            @if($errors->has('product_name'))
                <div class="alert alert-danger">{{ $errors->first('product_name') }}</div>
            @else
                Pilih Salah Satu Product
            @endif
        </div>
          <div class="row mb-3">
            <div class="col">
                <label for="" class="pe-5">Gold</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio1" value="24">
                    <label class="form-check-label" for="inlineRadio1">24K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="21">
                    <label class="form-check-label" for="inlineRadio2">21K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="18">
                    <label class="form-check-label" for="inlineRadio2">18K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="17">
                    <label class="form-check-label" for="inlineRadio2">17K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="16">
                    <label class="form-check-label" for="inlineRadio2">16K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="9">
                    <label class="form-check-label" for="inlineRadio2">9K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="8">
                    <label class="form-check-label" for="inlineRadio2">8K</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gold" id="inlineRadio2" value="6">
                    <label class="form-check-label" for="inlineRadio2">6K</label>
                  </div>
                @if($errors->has('gold'))
                  <div class="form-text text-danger">{{ $errors->first('gold') }}</div>
                @endif
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
                <label for="" class="pe-5">Stone</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stone" id="inlineRadio1" value="Diamnon">
                    <label class="form-check-label" for="inlineRadio1">Diamnon</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stone" id="inlineRadio2" value="Sirkon">
                    <label class="form-check-label" for="inlineRadio2">Sirkon</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stone" id="inlineRadio2" value="Stone">
                    <label class="form-check-label" for="inlineRadio2">Stone</label>
                  </div>
                @if($errors->has('stone'))
                  <div class="form-text text-danger">{{ $errors->first('stone') }}</div>
                @endif
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
                <label for="" class="pe-5">Color</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="inlineRadio1" value="White">
                    <label class="form-check-label" for="inlineRadio1">White</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="Yellow">
                    <label class="form-check-label" for="inlineRadio2">Yellow</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="Red">
                    <label class="form-check-label" for="inlineRadio2">Red</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="inlineRadio2" value="Rose">
                    <label class="form-check-label" for="inlineRadio2">Rose</label>
                  </div>
                @if($errors->has('color'))
                  <div class="form-text text-danger">{{ $errors->first('color') }}</div>
                @endif
            </div>
          </div>
          

          <button type="submit" class="btn btn-primary mt-4 form-control">Kirim Pesan</button>
        </form>
    </div>
  </div>

</section>
@endsection