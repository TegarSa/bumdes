@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Akun Terdaftar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/akun-terdaftar') }}">Akun Terdaftar</a></li>
              </ol>
            </div>
          </div>
        </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-card-primer">
                        <h3 class="card-title">Data Akun Terdaftar</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Lengkap</th>
                              <th>Nama Intansi/BUM Desa</th>
                              <th>Jabatan</th>
                              <th>E-Mail</th>
                              <th>No Hp / Telp</th>
                              <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
@section('js')
<script src="{{ asset('/assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection