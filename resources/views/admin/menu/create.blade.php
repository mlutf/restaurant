@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-8">
        <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
            <div class="mb-3">
                <label for="nama" class="form-label">Nama menu</label>
                <input type="text" name="nama_menu" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori </label>
                <input type="text" name="kategori" class="form-control" id="kategori">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga </label>
                <input type="text" name="harga" class="form-control" id="harga">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" id="status">
                    <option disabled selected>--Status--</option>
                    <option value="Ready">Ready</option>
                    <option value="SoulOut">SouldOut</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary my-3">Simpan</button>
        </form>
    </div>
</div>
@endsection