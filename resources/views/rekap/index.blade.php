@extends('layout/main')
@section('title','Rekap')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                  
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Masuk</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          @foreach ($rekap as $jrsn)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$jrsn->nama}}</td>
                            <td>{{$jrsn->jk}}</td>
                            <td>{{$jrsn->jabatan}}</td>
                            <td>{{$jrsn->bulan}}</td>
                            <td>{{$jrsn->tahun}}</td>
                            <td>{{$jrsn->jumlah_masuk}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>
</html>
@endsection