@extends('layouts.master')

@section('content')

<h1>Edit Data Tugas</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="row">
<div class="col-lg-12">
<form action="/tugas/{{$tugas->id}}/update" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input name='nama_siswa' type="text" class="form-control" id="nama_siswa" aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{$tugas->nama_siswa}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pelajaran</label>
    <input name='nama_pelajaran' type="text" class="form-control" id="nama_pelajaran" aria-describedby="emailHelp" placeholder="Nama Pelajaran" value="{{$tugas->nama_pelajaran}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status Pengumpulan</label>
    <input name='status_pengumpulan' type="text" class="form-control" id="status_pengumpulan" aria-describedby="emailHelp" placeholder="Status Pengumpulan" value="{{$tugas->status_pengumpulan}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Guru</label>
    <input name='nama_guru' type="text" class="form-control" id="nama_guru" aria-describedby="emailHelp" placeholder="Nama Guru" value="{{$tugas->nama_guru}}">
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
        </form>

</div>
</div>
@endsection
