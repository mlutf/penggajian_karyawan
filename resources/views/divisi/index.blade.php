@extends('layout/main')
@section('title','divisi')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                  <a href="/divisi/create" class="btn btn-success my-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Unit Kerja</th>
                        <th>Bagian</th>
                        <th>Karyawan ID</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($divisi as $dvs)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$dvs->unit_kerja}}</td>
                        <td>{{$dvs->bagian}}</td>
                        <td>{{$dvs->karyawan_id}}</td>
                        <td>
                            <a href="/divisi/{{$dvs->id}}" class="btn btn-primary">Detail</a>
                            <a href="divisi/{{$dvs->id}}/edit" class="btn btn-warning">Edit</a>
                          <form action="divisi/{{$dvs->id}}" method="post" class="d-inline">
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