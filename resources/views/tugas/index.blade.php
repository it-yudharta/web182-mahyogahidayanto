@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="row">
<div class="col-6">
<h1>DAFTAR PENGUMPULAN TUGAS</h1> 
</div>
<div class="col-6">
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Tugas
</button>

</div>

<table class='table table-hover'>
<tr>
      <th>NAMA SISWA</th> 
      <th>NAMA PELAJARAN</th>
      <th>STATUS PENGUMPULAN</th>
      <th>NAMA GURU</th>
      <th>AKSI</th>
</tr> 
@foreach($data_tugas as $tugas)
<tr>
      <td>{{$tugas-> nama_siswa}}</td>
      <td>{{$tugas-> nama_pelajaran}}</td>
      <td>{{$tugas-> status_pengumpulan}}</td>
      <td>{{$tugas-> nama_guru}}</td>
<td>
    <a href="/tugas/{{$tugas->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/tugas/{{$tugas->id}}/delete" class="btn btn-danger btn-sm"onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/tugas/create" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input name='nama_siswa' type="text" class="form-control" id="nama_siswa" aria-describedby="emailHelp" placeholder="Nama Siswa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pelajaran</label>
    <input name='nama_pelajaran' type="text" class="form-control" id="nama_pelajaran" aria-describedby="emailHelp" placeholder="Nama Pelajaran">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status Pengumpulan</label>
    <input name='status_pengumpulan' type="text" class="form-control" id="status_pengumpulan" aria-describedby="emailHelp" placeholder="Status Pengumpulan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Guru</label>
    <input name='nama_guru' type="text" class="form-control" id="nama_guru" aria-describedby="emailHelp" placeholder="Nama Guru">
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  @endsection


