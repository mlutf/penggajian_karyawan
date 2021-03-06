@extends('layout/main')
@section('title','Tambah Data')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/absen" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Karyawan</label>
                        <select class="form-control" name="karyawan_id">
                          @foreach($karyawan as $karyawan)
                          <option value="{{$karyawan->id}}"{{old('nama')==$karyawan->nama? 'selected':null}}>{{$karyawan->nama}}</option>
                          @endforeach
                      </select>
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                  </div>
                    <div class="mb-3">
                        <label class="form-label">Bulan</label>
                        <select class="form-control" name="bulan" id="">
                            <option value="januari">januari</option>
                            <option value="februari">februari</option>
                            <option value="maret">maret</option>
                            <option value="april">april</option>
                            <option value="mei">mei</option>
                            <option value="juni">juni</option>
                            <option value="juli">juli</option>
                            <option value="agustus">agustus</option>
                            <option value="september">september</option>
                            <option value="oktober">oktober</option>
                            <option value="november">november</option>
                            <option value="desember">desember</option>
                        </select>
                        @error('bulan')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                      </div>
                            <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <select name="tahun" class="form-control" id="">
                            <?php
                            for($thn=2021;$thn<=2030;$thn++){

                            ?>
                            <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
                            <?php } ?>
                        </select>
                             <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                      <div class="mb-3">
                          <label class="form-label">Jumlah Masuk</label>
                          <input type="text" name="jumlah_masuk" value="{{old('jumlah_masuk')}}" class="form-control  @error('jumlah_masuk') is-invalid @enderror" placeholder="Masukan jumlah masuk">
                          @error('jumlah_masuk')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                     
                      
                     
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/absen" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection