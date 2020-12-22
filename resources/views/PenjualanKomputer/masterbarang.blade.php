<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Barang</title>
</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<body>
    <h1>Master Barang</h1>    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/masterbarang">Master Brang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/penjualan">Penjualan</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <h1>Data Master Barang</h1> <br>
    <table class="table">
    <thead class="tabel->$dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal Penjualan</th>
      <th scope="col">Namakonsumen</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
 @foreach ($masterbarangs as $mb)
    <tr>
      <th scope="row"></th>
      <td>{{$mb->tglpenjualan}}</td>
      <td>{{$mb->namakonsumen}}</td>
      <td>{{$mb->alamat}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

</body>
</html>