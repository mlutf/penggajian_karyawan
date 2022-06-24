@extends('layout/main')
@section('title','Tambah Data Jabatan')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/jabatan" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" value="{{old('jabatan')}}" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Masukan Nama Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Gaji Pokok</label>
                          <input type="text" name="gapok" value="{{old('gapok')}}" class="form-control  @error('gapok') is-invalid @enderror" placeholder="Masukan Gaji Pokok">
                          @error('gapok')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Tunjangan</label>
                          <input type="text" name="tunjangan" value="{{old('tunjangan')}}" class="form-control  @error('tunjangan') is-invalid @enderror" placeholder="Masukan Tunjangan">
                          @error('tunjangan')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/jabatan" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection