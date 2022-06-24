@extends('layout/main')
@section('title','jabatan')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail jabatan</h3>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Jabatan : {{$jabatan->jabatan}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Gaji Pokok : {{$jabatan->gapok}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">Tunjangan : {{$jabatan->tunjangan}}</h6>
          
          
          
          <a href="{{$jabatan->id}}/edit" class="btn btn-primary">Edit</a>
          <form action="{{$jabatan->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
          
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          <a href="/jabatan" class="btn btn-warning">Kembali</a>
        </div>
      </div>
</div>


@endsection