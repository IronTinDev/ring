<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aerilyn Jewel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #ffd700">
      <div class="container">
        <a class="navbar-brand" href="#">Aerilyn Jewel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Cantact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/gambar6.jpg" alt="" class="rounded-circle img-thumbnail" width="200" />
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FFD700"
          fill-opacity="1"
          d="M0,128L30,122.7C60,117,120,107,180,133.3C240,160,300,224,360,234.7C420,245,480,203,540,192C600,181,660,203,720,208C780,213,840,203,900,176C960,149,1020,107,1080,106.7C1140,107,1200,149,1260,138.7C1320,128,1380,64,1410,32L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end Jumbotron -->
    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat corrupti cumque non provident consequatur sunt tempora voluptatem quasi corporis fuga quibusdam nostrum commodi et asperiores quae, accusamus, inventore
              facilis!
            </p>
          </div>
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique laborum atque hic rem placeat expedita consectetur, fugiat alias accusantium, facere quasi quisquam tempore quibusdam illo, reiciendis mollitia consequatur
              voluptate! Enim?
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FFD700"
          fill-opacity="1"
          d="M0,64L30,53.3C60,43,120,21,180,16C240,11,300,21,360,48C420,75,480,117,540,160C600,203,660,245,720,256C780,267,840,245,900,224C960,203,1020,181,1080,176C1140,171,1200,181,1260,165.3C1320,149,1380,107,1410,85.3L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
      <!-- end about -->
    </section>
    <!-- product -->
    <section id="product">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Products</h2>
          </div>
          
        </div>
        <div class="row">
            <div class="col mb-3">
              <div class="card bg-warning">
                {{-- <img src="img/product1.jpg" class="card-img-top" alt="product 1" />
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div> --}}
                {{-- <div id="productList">
                    <ul></ul>
                </div> --}}
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <!-- Data produk akan dimasukkan di sini menggunakan JavaScript -->
                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,37.3C80,43,160,53,240,74.7C320,96,400,128,480,160C560,192,640,224,720,250.7C800,277,880,299,960,266.7C1040,235,1120,149,1200,106.7C1280,64,1360,64,1400,64L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end product -->
    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form method="POST" action="{{route("email.send")}}">
                @csrf
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" />
                </div>
                @if($errors->has('name'))
                  <div class="form-text text-danger">{{ $errors->first('name') }}</div>
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
              <div class="form-floating">
                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Pesan</label>
              </div>

              <button type="submit" class="btn btn-warning mt-4 form-control">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FFD700"
          fill-opacity="1"
          d="M0,0L60,42.7C120,85,240,171,360,176C480,181,600,107,720,80C840,53,960,75,1080,85.3C1200,96,1320,96,1380,96L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end contact -->

    <!-- footer -->

    <footer class="text-center" style="background-color: #ffd700">Created with By <a href="">TinDev</a></footer>

    <!-- end footer -->

    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float">
      <a href="https://api.whatsapp.com/send?phone={{$wa}}&etxt={{$message}}" target="_blank">
        <img src="{{asset('img/wa.jpg')}}" alt="WhatsApp" />
      </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    <script>
                $(document).ready(function() {
            // Gunakan jQuery AJAX untuk mengambil data produk dari server
            $.ajax({
                url: "{{route("get_products")}}", // Gantilah URL dengan endpoint yang sesuai
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.length > 0) {
                        var carouselInner = $('#productCarousel .carousel-inner');
                        var itemCount = data.length;

                        // Bagi data produk menjadi grup-grup dengan 3 gambar dalam satu slide
                        for (var i = 0; i < itemCount; i += 3) {
                            var activeClass = i === 0 ? 'active' : '';
                            var slide = `
                                <div class="container carousel-item ${activeClass}">
                                    <div class="row text-center">
                            `;

                            for (var j = i; j < i + 3; j++) {
                                if (j < itemCount) {
                                    // slide += `
                                    //     <div class="col">
                                    //         <img src="storage/images/${data[j].product_image}" class="d-block mx-auto" alt="${data[j].product_name}" />
                                    //         <div class="carousel-caption">
                                    //             <h5>${data[j].product_name}</h5>
                                    //             <p>${data[j].product_price}</p>
                                    //         </div>
                                    //     </div>
                                    // `;
                                    slide +=`
                                    <div class="col-md-4 card bg-warning">
                                        <img src="storage/images/${data[j].product_image}" class="card-img-top" alt="product 1" />
                                        <div class="card-body">
                                        <p class="carousel-caption card-text bs-info">
                                            <ul>
                                                <li> <b> ${data[j].product_name} </b></li>
                                                <li>Model, Him : ${data[j].product_him_model} & Her : ${data[j].product_her_model}</li>
                                                <li>Weight, Him : ${data[j].product_him_weight} gr & Her : ${data[j].product_her_weight} gr</li>
                                                <li>Stone :${data[j].product_stone}</li>
                                                <li>Size, Him : ${data[j].product_him_size} ct & Her : ${data[j].product_her_size} ct </li>
                                                <li>Gold : ${data[j].product_gold} K</li>
                                                <li>Color : ${data[j].product_color}</li>
                                                <li>Price : Rp. ${data[j].product_price},-</li>
                                            </ul>
                                        </p>
                                        </div>
                                    </div>

                                    `;
                                }
                            }

                            slide += `
                                    </div>
                                </div>
                            `;

                            carouselInner.append(slide);
                        }

                        // Inisialisasi slideshow setelah menambahkan elemen-elemen
                        $('#productCarousel').carousel();
                    } else {
                        // Tambahkan pesan jika tidak ada produk yang tersedia
                        carouselInner.html('<div class="carousel-item active">Tidak ada produk yang tersedia.</div>');
                    }
                },
                error: function() {
                    // Fungsi ini akan dijalankan jika terjadi kesalahan
                    productList.append('<li>Gagal mengambil data produk.</li>');
                }
            });
        });
    </script>
</body>
</html>
