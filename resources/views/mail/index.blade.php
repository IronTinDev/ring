<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, ini dari  {{$data->customer}}</h1>
    <h3>Informasi Pelanggan</h3>
    <ul>
      <li>Email : {{$data['email']}}</li>
      <li>Telpon : {{$data['phone']}}</li>
    </ul>
    <h3>Pesanan</h3>
    <ul>
      <li>Nama : {{ $product->product_name }} - {{$product->product_description}}</li>
      <li>Stone : {{ $data->stone }}</li>
      <li>Warna : {{ $data->color }}</li>
      <li>Gold : {{ $data->gold }} K</li>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>