@extends('layout/main')
@section('title','Edit Data jabatan')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/jabatan/{{$jabatan->id}}">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <select name="pasien"  class="form-control">
                        <option value="">Pilih</option>
                        @foreach($pasien as $item)
                        <option value="{{$item->nama_pasien}}"{{$pemeriksaan->pasien==$item->nama_pasien? 'selected':null}}>{{$item->nama_pasien}}</option>
                        @endforeach
                        </select>
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        
                        <div class="mb-3">
                            <label class="form-label">Gaji Pokok</label>
                            <input type="text" name="gapok" value="{{$jabatan->gapok}}" class="form-control  @error('gapok') is-invalid @enderror" placeholder="Masukan Gaji Pokok">
                            @error('gapok')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tunjangan</label>
                            <input type="text" name="tunjangan" value="{{$jabatan->tunjangan}}" class="form-control  @error('tunjangan') is-invalid @enderror" placeholder="Masukan Tunjangan">
                            @error('tunjangan')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/jabatan" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection