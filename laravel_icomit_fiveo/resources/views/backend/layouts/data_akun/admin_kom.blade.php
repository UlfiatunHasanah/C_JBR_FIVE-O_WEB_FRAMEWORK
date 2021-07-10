@extends('backend.layouts.template')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                        <li><i class="fas fa-user"></i>Akun Admin Komunitas</li>
                    </ol>
                </div>
            </div>

            <!-- Form validation -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">Data Akun Admin Komunitas</header>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <a href="{{ url('adminweb/admink/create') }}"><button class="btn btn-primary"
                                    type="button"><i class="fa fa-plus"> Tambah </i></button></a>
                            <br> <br>
                            <table class="table table-striped table-advance table hover">
                                <tbody>
                                    <tr>
                                        <th><i class="icon_key"></i> Kode Admin Komunitas </th>
                                        <th><i class="fas fa-at"></i> Username </th>
                                        <th><i class="fas fa-envelope"></i> Alamat Email </th>
                                        <th><i class="fas fa-lock"></i> Password </th>
                                        <th><i class="fas fa-lock"></i> Verifikasi Password</th>
                                        <th><i class="icon_cogs"></i> Action</th>
                                    </tr>
                                    @foreach ($akun_admin_kom as $item)
                                        <tr>
                                            <td>{{ $item->id_admin_kom }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->password }}</td>
                                            <td>{{ $item->ver_pass }}</td>

                                            <td>
                                                <div class="btn-group">
                                                    <form action="{{ route('admink.destroy', $item->id_admin_kom) }}"
                                                        method="POST">
                                                        <a class="btn btn-warning"
                                                            href="{{ route('admink.edit', $item->id_admin_kom) }}">
                                                            <i class="fa fa-edit"></i></a>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?')">
                                                            <i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@endsection
