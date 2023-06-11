@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-book"></i>
            </span> Data Buku
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <a href="{{ url('/dashboard/buku/create') }} " class="btn btn-primary">+ Tambah Buku</a>
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daftar Buku Perpustakaan</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead style="font-size: 11px;" class="text-center">
                        <tr class="table-info text-uppercase">
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Jumlah Tersedia</th>
                            <th style="width: 9%" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($books as $book)
                          
                      <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->stok }}</td>
                        <!--<td>1.</td>
                        <td>Negeri Para Bedebah</td>
                        <td>2</td> -->
                        <td>
                          <a href="#"><i class="bi bi-eye" style="color: green; font-size: 15px;"></i></a>
                          &emsp;|&emsp;<a href="#"><i class="bi bi-pencil-square" for="edit" style="color: blue; font-size: 15px;"></i></a>
                          &emsp;|
                          <form action="{{ url('/dashboard/buku/destroy', $book->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-sm" type="submit" onclick="if(!confirm('Anda Yakin Hapus Data Buku?')) {return false}"
                          ><i class="bi bi-trash" style="color: red; font-size: 15px;"></i></button>
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
        </div>
      </div>
@endsection