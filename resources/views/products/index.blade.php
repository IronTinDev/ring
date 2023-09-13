@extends('layouts.app')
@push('style')
@include("partials.style")
@endpush
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <div class="row">
          <div class="col">
            <h5 class="card-title fw-semibold mb-4">Produk</h5>
          </div>
          <div class="col">
          <button class="btn btn-primary float-right">
            <a href="{{route('products.create')}}" class="text-white">Tambah</a>
          </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nama</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Image</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Keterangan</h6>
                </th>
                {{-- <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Him Model</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Her Model</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Him Weight</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Her Weight</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Stone</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Him Size</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Her Size</h6>
                </th>
                </th>
                  <h6 class="fw-semibold mb-0">Price</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Gold</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Color</h6>
                </th> --}}
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Aksi</h6>
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
              <tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_name}}</p>
                  </td>
                  <td class="border-bottom-0">
                    <img src="{{ asset('storage/images/'.$product->product_image) }}" alt="" style="width: 100px; heigth: 100px;" >
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_description}}</p>
                  </td>
                  {{-- <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_him_model}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_her_model}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_him_weight}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_her_weight}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_stone}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_him_size}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_her_size}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_price}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_gold}}</p>
                  </td>
                  <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{$product->product_color}}</p>
                  </td> --}}
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn btn-sm btn-warning">
                            <a href="{{route('products.edit',$product->id)}}">Edit</a>
                        </button>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn btn-sm btn-danger">
                            <a onclick=" var result = confirm('Yakin ingin menghapus data ini ?');
                            
                            if(result){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$product->id}}').submit();
                            }

                            ">Hapus</a>
                            <form method="POST" action="{{route('products.destroy',$product->id)}}" id="delete-form-{{$product->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </button>
                    </div>
                  </td>
              </tr>                   
            @endforeach

                                  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection
