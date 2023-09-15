@extends('layouts.template')
@section('content')
    {{-- carousel --}}
    <section id="jumbotron" class=" ">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active" style="height: 700px">
            <img src="{{asset('img/c1.jpg')}}" class="d-block w-100" alt="project1">
            <div class="carousel-caption d-none d-md-block">
              <h5 >Kilauan Kecantikan yang Abadi.</h5>
              <p >Setiap perhiasan kami menghadirkan keindahan yang abadi dan berharga, menjadi warisan untuk masa depan Anda</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 700px" >
            <img src="{{asset('img/c2.jpg')}}" class="d-block w-100" alt="project2">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-dark">Mengukir Memori dengan Gemerlap Mutiara.</h5>
              <p class="text-dark">Mutiara kami menciptakan kenangan indah yang tak terlupakan, menjadikannya warisan generasi.</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 700px">
            <img src="{{asset('img/c3.jpg')}}" class="d-block w-100" alt="project3">
            <div class="carousel-caption d-none d-md-block">
              <h5 >Membawa Elegansi ke Setiap Detik Anda.</h5>
              <p >Perhiasan kami melengkapi setiap momen dengan gaya dan keanggunan yang tak tertandingi.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    {{-- end carousel --}}
    {{-- category --}}
    <section>
        <div class="container pt-4 pb-5">
            <div class="row text-center">
                <div class="col">
                    <span>JEWEL</span>
                    <h2>Perhiasan bukan hanya sebuah bentuk kemewahan, tetapi juga identitas dan karakter</h2>
                    <p>Oleh karena itu, desain menjadi elemen penting di dalam semua kreasi Aerilyn Jewel  . Berbagai pilihan desain Wanda persembahkan untuk mewakili setiap karakter.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" ><img src="{{asset('img/c4.jpg')}}" class="img-fluid" alt="..."></div>
                <div class="col-md-3" ><img src="{{asset('img/c5.jpg')}}" class="img-fluid" alt="..."></div>
                <div class="col-md-3" ><img src="{{asset('img/c6.jpg')}}" class="img-fluid" alt="..."></div>
                <div class="col-md-3" ><img src="{{asset('img/c7.jpg')}}" class="img-fluid" alt="..."></div>
            </div>
        </div>
    </section>
    {{-- end category --}}
    {{-- one product --}}
    <section> 
        <div class="container-fluid pt-5">
            <div class="row  justify-md-center">
                <div class="col-md-8 text-end">
                    <img src="{{asset('img/a1.jpg')}}" class="img-fluid " alt="...">
                </div>
                <div class="col-md-2">
                    <h3>Lebih dari Sekadar Kemewahan, Tetapi Juga Identitas dan Karakter</h3>
                    <p>Perhiasan telah memainkan peran penting dalam kehidupan manusia sepanjang sejarah. Selain sebagai hiasan tubuh, perhiasan juga memiliki kemampuan untuk menggambarkan identitas dan karakter seseorang. Artikel ini akan mengungkapkan bagaimana perhiasan tidak hanya menjadi pelengkap penampilan, tetapi juga cerminan dalam diri dan ekspresi karakter seseorang.</p>
                    <a href="{{route('collection')}}"><button class="btn btn-primary">collection</button></a>
                </div>
            </div>
        </div>
    </section>
    {{-- end one product --}}
@endsection