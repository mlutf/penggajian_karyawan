@extends('layout/main')
@section('title','Edit Data divisi')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/divisi/{{$divisi->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Unit Kerja</label>
                          <input type="text" name="unit_kerja" value="{{$divisi->unit_kerja}}" class="form-control @error('unit_kerja') is-invalid @enderror" placeholder="Masukan Unit Kerja">
                          @error('unit_kerja')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagian</label>
                            <input type="text" name="bagian" value="{{$divisi->bagian}}" class="form-control  @error('bagian') is-invalid @enderror" placeholder="Masukan Bagian">
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
                                         
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/divisi" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection