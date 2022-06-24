@extends('layout.main')

@section('container')
<div>
    <a href="{{route('pegawai.create')}}" class="btn btn-success my-3">Tambah Data</a>
</div>
<table class="table table-sm">
  <thead>
        <td>kd_Pegawai</td>
        <td>Nama Pegawai</td>
        <td>Username</td>
        <td>Password</td>
        <td>Jenis Kelamin</td>
        <td>No Hp</td>
        <td>Jabatan</td>
        <td>Action</td>
  </thead>
  @foreach($pegawai as $pegawai)
  <tbody>
        <td>{{$pegawai->kd_pegawai}}</td>
        <td>{{$pegawai->nama_pegawai}}</td>
        <td>{{$pegawai->username}}</td>
        <td>{{$pegawai->password}}</td>
        <td>{{$pegawai->jk}}</td>
        <td>{{$pegawai->no_hp}}</td>
        <td>{{$pegawai->jabatan}}</td>
        <td>
            <a href="{{ route('pegawai.edit',$pegawai->kd_pegawai) }}" class="btn btn-info">Edit</a>
            <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$pegawai->kd_pegawai}}')"> Delete</div></td>
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
                document.location.href = "{{url('pegawai/hapus')}}" + "/" + id;
            }
        })
    }
</script>

@endsection