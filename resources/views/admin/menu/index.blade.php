@extends('layout.main')

@section('container')
<div>
    <a href="{{route('menu.create')}}" class="btn btn-success my-3">Tambah Data</a>
</div>
<table class="table table-sm">
  <thead>
        <td>kd_Menu</td>
        <td>Nama Menu</td>
        <td>Kategori</td>
        <td>Harga</td>
        <td>Status</td>
        <td>Action</td>
  </thead>
  @foreach($menu as $menu)
  <tbody>
        <td>{{$menu->kd_menu}}</td>
        <td>{{$menu->nama_menu}}</td>
        <td>{{$menu->kategori}}</td>
        <td>{{$menu->harga}}</td>
        <td>{{$menu->status}}</td>
        <td>
            <a href="{{ route('menu.edit',$menu->kd_menu) }}" class="btn btn-info">Edit</a>
            <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$menu->kd_menu}}')"> Delete</div></td>
  </tbody>
  @endforeach
</table>
@endsection
@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Anda Ingin Menghapus Data Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('menu/hapus')}}" + "/" + id;
            }
        })
    }
</script>

@endsection