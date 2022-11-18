                                @extends('layout.master')

                                @section('content')
                                <div class="card-header">
                                    <h3 class="card-title">Tambah data Admin</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <a href="" class="btn btn-primary">Tambah</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id Admin</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Admin Level</th>
                                                <th>Admin Nama</th>
                                                <th>Admin Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admin as $row)
                                            <tr>
                                                <td>{{$row->id_admin}}</td>
                                                <td>{{$row->username}}</td>
                                                <td>{{$row->password}}</td>
                                                <td>{{$row->admin_level}}</td>
                                                <td>{{$row->admin_nama}}</td>
                                                <td>{{$row->admin_status}}</td>
                                                <td>
                                                    <a href="" class="btn btn-warning">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id Admin</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Admin Level</th>
                                                <th>Admin Nama</th>
                                                <th>Admin Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                @endsection