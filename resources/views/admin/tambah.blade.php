@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Admin</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="/admin/simpan">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="">Id Admin</label>
                <input type="text" name="id_admin" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Id Username</label>
                <input type="text" name="username" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Admin Level</label>
                <input type="text" name="admin_level" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Admin Nama</label>
                <input type="text" name="admin_nama" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Admin Status</label>
                <input type="text" name="admin_status" class="form-control" id="" placeholder="">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="simpan">
        </div>
</div>
</form>
</div>

@endsection