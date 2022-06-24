<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="row justify-content-center">
          <div class="col-6" style="margin-top:150px;">
            <div class="card">
                <div class="card-body p-5">
                    <h5>Confirmasi Pesanan</h5>
                   <div class="row">
                   <div class="col-6">
                       <h5>Nama Menu</h5>
                   </div>
                   <div class="col-6">
                       <h5>{{$menu->nama_menu}}</h5>
                   </div>
                   <div class="col-6">
                       <h5>Harga</h5>
                   </div>
                   <div class="col-6">
                       <h5>{{$menu->harga}}</h5>
                   </div>
                   <div class="col-6">
                       <h5>Kategori</h5>
                   </div>
                   <div class="col-6">
                       <h5>{{$menu->kategori}}</h5>
                   </div>
                   <div class="col-12">
                    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$menu->foto}}"  width="300px"></p>
                   </div>
                   <div class="col-12 text-end">
                       <a href="{{url('pesanan')}}" class="btn btn-primary">Ok</a>
                   </div>
                   </div>
                </div>
            </div>
          </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>