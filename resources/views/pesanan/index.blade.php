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
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-12 text-end">
                <a href="{{url('login')}}" class="btn btn-success">Login</a>
            </div>
            <div class="col-6 text-center">
                <h2><b>UP! Cafe</b></h2>
            </div>
            <div class="col-6">
                <h5>Silahkan Pesan Disini</h5>
                <form action="{{route('pesanan.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="kd_menu" class="form-label">Menu</label>
                        <select class="form-control" name="kd_menu">
                            <option disabled selected >--Pilih Menu--</option>
                            @foreach($menu as $menu)
                            <option value="{{$menu->kd_menu}}">{{$menu->nama_menu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" >
                    </div>
                    <div class="mb-3">
                        <label for="nomeja" class="form-label">No Meja</label>
                        <input type="text" name="no_meja" class="form-control" id="nomeja" >
                    </div>
                    <div class="mb-3">
                        <label for="tglpesan" class="form-label">Tanggal</label>
                        <input type="date" name="tgl_pesan" class="form-control" id="tglpesan" >
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="keterangan" class="form-control" id="keterangan" value="belum di proses">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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