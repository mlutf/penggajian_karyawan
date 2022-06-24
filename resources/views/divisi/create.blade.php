@extends('layout/main')
@section('title','Tambah Data divisi')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/divisi" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">unit kerja</label>
                        <input type="text" name="unit_kerja" value="{{old('unit_kerja')}}" class="form-control @error('unit_kerja') is-invalid @enderror" placeholder="Masukan unit kerja">
                        @error('unit_kerja')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      
                      <div class="mb-3">
                          <label class="form-label">Bagian</label>
                          <input type="text" name="bagian" value="{{old('bagian')}}" class="form-control  @error('bagian') is-invalid @enderror" placeholder="Masukan bagian">
                          @error('bagian')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Karyawan</label>
                        <select class="form-control" name="karyawan_id">
                          @foreach($karyawan as $karyawan)
                          <option value="{{$karyawan->id}}"{{old('nama')==$karyawan->nama? 'selected':null}}>{{$karyawan->nama}}</option>
                          @endforeach
                      </select>
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                  </div>
                      
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/divisi" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection