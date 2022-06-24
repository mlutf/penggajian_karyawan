@extends('layout/main')
@section('title','jabatan')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                  <a href="/jabatan/create" class="btn btn-success my-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($jabatan as $jrsn)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$jrsn->jabatan}}</td>
                        <td>{{$jrsn->gapok}}</td>
                        <td>{{$jrsn->tunjangan}}</td>
                        <td>
                            <a href="/jabatan/{{$jrsn->id}}" class="btn btn-primary">Detail</a>
                            <a href="jabatan/{{$jrsn->id}}/edit" class="btn btn-warning">Edit</a>
                          <form action="jabatan/{{$jrsn->id}}" method="post" class="d-inline">
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