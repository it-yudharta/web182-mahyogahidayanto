@extends('layouts.master')

@section('content')
        <h1>Edit Data Siswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name='nama' type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Siswa"value="{{$siswa->nama}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nim</label>
    <input name='nim' type="text" class="form-control" id="nim" aria-describedby="emailHelp" placeholder="NIM"value="{{$siswa->nim}}">
  </div>
  <div class="form-group">
      <label for="exampleFormControlSelect1">Jenis kelamin</label>
      <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
      </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Agama</label>
    <input name='agama' type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama"value="{{$siswa->agama}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">alamat</label>
    <input name='alamat' type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat"value="{{$siswa->alamat}}">
  </div>
</div>
</div>
    <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>
    </div>
@endsection
