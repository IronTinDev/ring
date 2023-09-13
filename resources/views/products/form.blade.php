@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form enctype="multipart/form-data" action="{{$product->id ? route('products.update',$product->id) : route('products.store')}}" method="POST">
            @csrf
            @if ($product->id)
                @method("PUT")
            @endif
            <div class="mb-3">
              <label for="" class="form-label">Nama Produk</label>
              <input type="text" name="name" value="{{old("name",$product->product_name)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('name'))
                <div class="form-text text-danger">{{ $errors->first('name') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Gambar Produk</label>
              <input type="file" name="image" value="{{old("image",$product->product_image)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('image'))
                <div class="form-text text-danger">{{ $errors->first('image') }}</div>
              @endif
            </div>


            <div class="form-floating">
              <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Keterangan</label>
            </div>

            

            {{-- <div class="mb-3">
              <label for="" class="form-label">Model Him</label>
              <select name="him_model" id="" class="form-control" value="{{old("him_model",$product->product_him_model)}}">
                <option value="Silver" {{old('him_model',$product->product_him_model) == "Silver" ? "selected" :""}}>Silver</option>
                <option value="Platinum" {{old('him_model',$product->product_him_model) == "Platinum" ? "selected" :""}}>Platinum</option>
                <option value="Paladium" {{old('him_model',$product->product_him_model) == "Paladium" ? "selected" :""}}>Paladium</option>
              </select>
              @if($errors->has('him_model'))
                  <div class="alert alert-danger">{{ $errors->first('him_model') }}</div>
              @else
                  Pilih Salah Satu model
              @endif
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Model Her</label>
              <select name="her_model" id="" class="form-control">
                <option value="Silver" {{old('her_model',$product->product_her_model) == "Silver" ? "selected" :""}}>Silver</option>
                <option value="Platinum" {{old('her_model',$product->product_her_model) == "Platinum" ? "selected" :""}}>Platinum</option>
                <option value="Paladium" {{old('her_model',$product->product_her_model) == "Paladium" ? "selected" :""}}>Paladium</option>
              </select>
              @if($errors->has('her_model'))
                  <div class="alert alert-danger">{{ $errors->first('her_model') }}</div>
              @else
                  Pilih Salah Satu model
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Him Weight</label>
              <input type="number" name="him_weight" value="{{old("him_weight",$product->product_him_weight)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('him_weight'))
                <div class="form-text text-danger">{{ $errors->first('him_weight') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Her Weight</label>
              <input type="number" name="her_weight" value="{{old("her_weight",$product->product_her_weight)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('her_weight'))
                <div class="form-text text-danger">{{ $errors->first('her_weight') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Stone</label>
              <select name="stone" id="" class="form-control">
                <option value="Diamon" {{old('stone',$product->product_stone) == "Diamon" ? "selected" :""}}>Diamon</option>
                <option value="Sirkon" {{old('stone',$product->product_stone) == "Sirkon" ? "selected" :""}}>Sirkon</option>
                <option value="Stone" {{old('stone',$product->product_stone) == "Stone" ? "selected" :""}}>Stone</option>
              </select>
              @if($errors->has('stone'))
                  <div class="alert alert-danger">{{ $errors->first('stone') }}</div>
              @else
                  Pilih Salah Satu model
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Him Size</label>
              <input type="number" name="him_size" value="{{old("him_size",$product->product_him_size)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('him_size'))
                <div class="form-text text-danger">{{ $errors->first('him_size') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Her Size</label>
              <input type="number" name="her_size" value="{{old("her_size",$product->product_her_size)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('her_size'))
                <div class="form-text text-danger">{{ $errors->first('her_size') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Price</label>
              <input type="number" name="price" value="{{old("price",$product->product_price)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('price'))
                <div class="form-text text-danger">{{ $errors->first('price') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Gold</label>
              <select name="gold" id="" class="form-control">
                <option value="24" {{old('gold',$product->product_gold) == "24" ? "selected" :""}}>24</option>
                <option value="21" {{old('gold',$product->product_gold) == "21" ? "selected" :""}}>21</option>
                <option value="18" {{old('gold',$product->product_gold) == "18" ? "selected" :""}}>18</option>
                <option value="17" {{old('gold',$product->product_gold) == "17" ? "selected" :""}}>17</option>
                <option value="16" {{old('gold',$product->product_gold) == "16" ? "selected" :""}}>16</option>
                <option value="9" {{old('gold',$product->product_gold) == "9" ? "selected" :""}}>9</option>
                <option value="8" {{old('gold',$product->product_gold) == "8" ? "selected" :""}}>8</option>
                <option value="6" {{old('gold',$product->product_gold) == "6" ? "selected" :""}}>6</option>

              </select>
              @if($errors->has('gold'))
                  <div class="alert alert-danger">{{ $errors->first('gold') }}</div>
              @else
                  Pilih Salah Satu Gold Karat
              @endif
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Color</label>
              <select name="color" id="" class="form-control">
                <option value="White" {{old('color',$product->product_color) == "White" ? "selected" :""}}>White</option>
                <option value="Yellow" {{old('color',$product->product_color) == "Yellow" ? "selected" :""}}>Yellow</option>
                <option value="Red" {{old('color',$product->product_color) == "Red" ? "selected" :""}}>Red</option>
                <option value="Rose" {{old('color',$product->product_color) == "Rose" ? "selected" :""}}>Rose</option>
              </select>
              @if($errors->has('color'))
                  <div class="alert alert-danger">{{ $errors->first('color') }}</div>
              @else
                  Pilih Salah Satu Gold Color
              @endif
            </div> --}}


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection