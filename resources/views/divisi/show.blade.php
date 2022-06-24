@extends('layout/main')
@section('title','Detail Data divisi')
    
@section('container')

<div class="col-12" style="margin-left:50px">
  <h3>Detail Data divisi</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6">
      <div class="card-body">
        <table>
          <br>
        <h5 class="card-title">Unit Kerja : {{$divisi->unit_kerja}}</h5>
        <h5 class="card-subtitle mb-2">Bagian : {{$divisi->bagian}}</h5>
        <h5 class="card-text mb-2">Karyawan : {{$divisi->dataKaryawan->nama}}</h5>
        </table>
        <br>
        
        <a href="{{$divisi->id}}/edit" class="btn btn-primary">Edit</a>
        <form action="{{$divisi->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
        <a href="/divisi" class="card-link btn btn-warning">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection