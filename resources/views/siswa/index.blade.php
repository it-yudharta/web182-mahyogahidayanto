@extends('layouts.master')

@section('content')
        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Siswa</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah data siswa 
                    </button>
                </div>
            
            <table class="table table-hover">
                    <tr>
                    <th>NAMA </th> 
                    <th>NIM</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA </th>
                    <th>ALAMAT</th>
                </tr> 
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa-> nama}}</td>
                    <td>{{$siswa-> nim}}</td>
                    <td>{{$siswa-> jenis_kelamin}}</td>
                    <td>{{$siswa-> agama}}</td>
                    <td>{{$siswa-> alamat}}</td>
                <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Mau Dihapus ?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Data Siswa</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                            <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name='nama' type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Siswa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nim</label>
    <input name='nim' type="text" class="form-control" id="nim" aria-describedby="emailHelp" placeholder="NIM">
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
    <input name='agama' type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">alamat</label>
    <input name='alamat' type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat">
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


