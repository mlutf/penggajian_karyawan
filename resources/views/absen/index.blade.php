@extends('layout/main')
@section('title','Absen')
    
@section('container')
                    
                  <div class="col-md-12">
                    @if (session('status'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                              {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                      </div>
                    @endif
                    <div class="content mt-3">
                      <div class="animated fadeIn">
                          <div class="row">
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                    <strong class="card-title">Absensi</strong>
                                  </div>
                                  <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Karyawan</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                  
                                    <tbody>
                                      @foreach ($karyawan as $abs)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$abs->nama}}</td>
                                        <td>{{$abs->jk}}</td>
                                        <td>
                                            <a href="/absen/{{$abs->id}}" class="btn btn-primary">Detail</a>
                                            <a href="/absen/create" class="btn btn-success my-3">Absen</a>
                                            <form action="/absen/{{$abs->id}}" method="POST" class="d-inline">
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
                
      @endsection