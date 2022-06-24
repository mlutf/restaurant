@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-8">
        <form action="{{route('pegawai.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username </label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" class="form-control" id="jk">
                    <option disabled selected>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" name="no_hp" class="form-control" id="no_hp">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select name="jabatan" class="form-control" id="jabatan">
                    <option disabled selected>--Pilih Jenis Jabatan--</option>
                    <option value="admin">Admin</option>
                    <option value="koki">Koki</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary my-3">Simpan</button>
        </form>
    </div>
</div>
@endsection