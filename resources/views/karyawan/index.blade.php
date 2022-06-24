@extends('layout/main')
@section('title','Karyawan')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                  <a href="/karyawan/create" class="btn btn-success my-3">Tambah Data</a>
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
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Jabatan Id</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($karyawan as $jrsn)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$jrsn->nama}}</td>
                        <td>{{$jrsn->jk}}</td>
                        <td>{{$jrsn->tgl_lahir}}</td>
                        <td>{{$jrsn->alamat}}</td>
                        <td>{{$jrsn->no_hp}}</td>
                        <td>{{$jrsn->email}}</td>
                        <td>{{$jrsn->dataJabatan->jabatan}}</td>
                        <td>
                            <a href="/karyawan/{{$jrsn->id}}" class="btn btn-primary">Detail</a>
                            <a href="karyawan/{{$jrsn->id}}/edit" class="btn btn-warning">Edit</a>
                          <form action="karyawan/{{$jrsn->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                          
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
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