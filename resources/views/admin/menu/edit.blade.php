@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-8">
        <form action="{{route('menu.update',$menu->kd_menu)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama menu</label>
                <input type="text" name="nama_menu" class="form-control" id="nama" value="{{$menu->nama_menu}}">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori </label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="{{$menu->kategori}}">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                @if($menu->foto)
                          <img src="/post-images/{{$menu->foto}}"height="75px">
                        @else
                          <p>Tidak Ada Photo</p>
                        @endif
                        <div class="mb-3">
                          <input type="file" name="foto" value="{{$menu->foto}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukan foto">
                          @error('foto')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga </label>
                <input type="text" name="harga" class="form-control" id="harga" value="{{$menu->harga}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" id="status">
                    <option disabled selected>--{{$menu->status}}--</option>
                    <option value="Ready">Ready</option>
                    <option value="SoulOut">SouldOut</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary my-3">Simpan</button>
        </form>
    </div>
</div>
@endsection