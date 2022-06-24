@extends('layout.main')

@section('container')
<form action="/filter" method="post">
    @csrf
<div class="row">
    <div class="col-4">
        <input type="date" name="pertama" class="form-control">
    </div>
    <div class="col-2 text-center">
        <p>sampai</p>
    </div>
    <div class="col-4">
        <input type="date" name="kedua" class="form-control">
    </div>
    <div class="col-2">
        <button type="submit" class="btn btn-success">Cari</button>
    </div>
</div>
</form>

<table class="table table-sm">
  <thead>
        <td>KD Pesanan</td>
        <td>KD Menu</td>
        <td>Nama Pelanggan</td>
        <td>No Meja</td>
        <td>Tgl Pesanan</td>
        <td>Keterangan</td>
        <td>Action</td>
  </thead>
  @foreach($pesanan as $pesanan)
  <tbody>
        <td>{{$pesanan->kd_pesanan}}</td>
        <td>{{$pesanan->menu->nama_menu}}</td>
        <td>{{$pesanan->nama_pelanggan}}</td>
        <td>{{$pesanan->no_meja}}</td>
        <td>{{$pesanan->tgl_pesan}}</td>
        <td>{{$pesanan->keterangan}}</td>
        <td>
            @if($pesanan->keterangan == 'belum di proses')
            <a href="{{url('update/pesanan',$pesanan->kd_pesanan)}}" class="btn btn-primary">Validasi</a>
            <!-- <div type="submit" class="btn btn-primary rounded" onclick="fcthapus('{{$pesanan->kd_pesanan}}')"> Validasi</div></td> -->
            @elseif($pesanan->keterangan == 'sedang di proses')
            <a href="{{url('update/pesanan2',$pesanan->kd_pesanan)}}" class="btn btn-success">Validasi</a>
            <!-- <div type="submit" class="btn btn-success rounded" onclick="fcthapus2('{{$pesanan->kd_pesanan}}')"> Konfirmasi</div></td> -->
            @else
            <div type="disabled" class="btn btn-dark rounded" > Done</div></td>
            @endif
  </tbody>
  @endforeach
</table>
@endsection
@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Validasi Data',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('update/pesanan')}}" + "/" + id;
            }
        })
    }
    function fcthapus2(id) {
        Swal.fire({
            title: 'Validasi Data',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('update/pesanan2')}}" + "/" + id;
            }
        })
    }
</script>

@endsection