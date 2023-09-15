<nav class="navbar navbar-expand-lg shadow-sm  fixed-top" style="background-color: #5dc8d6">
    <div class="container">
      <a class="navbar-brand" href="#">Aerilyn Jewel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link  active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('collection')}}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('order')}}">Pre Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>