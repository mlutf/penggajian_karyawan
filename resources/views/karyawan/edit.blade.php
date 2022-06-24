@extends('layout/main')
@section('title','Edit Data Karyawan')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/karyawan/{{$karyawan->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama Karyawan</label>
                          <input type="text" name="nama" value="{{$karyawan->nama}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Karyawan">
                          @error('nama')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="">
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" value="{{$karyawan->tgl_lahir}}" class="form-control  @error('tgl_lahir') is-invalid @enderror" placeholder="Masukan Tanggal Lahir">
                            @error('tgl_lahir')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select class="form-control" name="agama" id="">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                        
                                </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$karyawan->alamat}}" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Masukan Alamat">
                            @error('alamat')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Hp</label>
                            <input type="text" name="no_hp" value="{{$karyawan->no_hp}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Masukan No. Hp">
                            @error('no_hp')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Pendidikan Terakhir</label>
                          <select class="form-control" name="pendidikan_terakhir" id="">
                              <option value="SMK/SMA/MA/MAK">SMK/SMA/MA/MAK</option>
                              <option value="diploma">diploma</option>
                              <option value="sarjana">sarjana</option>
                              <option value="magister">magister</option>
                              <option value="doktor">doktor</option>
                          </select>
                            @error('pendidikan_terakhir')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{$karyawan->email}}" class="form-control  @error('email') is-invalid @enderror" placeholder="Masukan Alamat Email">
                            @error('email')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        @if($karyawan->foto)
                          <img src="/post-images/{{$karyawan->foto}}" width="75px" height="75px">
                        @else
                          <p>Tidak Ada Foto</p>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" value="{{$karyawan->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukan Foto">
                            @error('foto')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Jabatan</label>
                          <select class="form-control" name="jabatan_id">
                            @foreach($jabatan as $jabatan)
                            <option value="{{$jabatan->id}}"{{old('jabatan')==$jabatan->jabatan? 'selected':null}}>{{$jabatan->jabatan}}</option>
                            @endforeach
                        </select>
                      <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/karyawan" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection