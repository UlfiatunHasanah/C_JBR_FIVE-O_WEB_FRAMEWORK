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
                        <header class="panel-heading">
                            {{ isset($admin_web) ? 'Mengubah' : 'Menambahkan' }} Data Akun Admin Komunitas
                        </header>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Ooops!</strong> Ada masalah pada masukan anda.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="data_akun_admin_form" method="POST"
                            action="{{isset ($akun_admin_kom) ? route ('admink.update', $akun_admin_kom->id_admin_kom) : 
                            url ('adminweb/admink/store')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                                    {!! isset($akun_admin_kom) ? method_field('PUT') : '' !!}
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Username<span
                                                class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="username" name="username" minlength="5" placeholder="Maximal 10 Karakter"
                                                type="text"
                                                value="{{ isset($akun_admin_kom) ? $akun_admin_kom->username : '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2"> Alamat Email <span
                                                class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="email" name="email" minlength="2" placeholder="Cth : ulfiatunhasanah991@gmail.com"
                                            type="email"
                                                value="{{ isset($akun_admin_kom) ? $akun_admin_kom->email : '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2"> Password <span
                                                class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="password" name="password" minlength="2" placeholder="Maximal 6 Karakter"
                                                type="password"
                                                value="{{ isset($akun_admin_kom) ? $akun_admin_kom->password : '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{-- @if ($password != $ver_pass)
                                                <div class="alert alert-danger">
                                                    <strong>Ooops!</strong> Verifikasi Password Tidak Cocok<br><br>
                                                </div>
                                            @endif --}}
                                        <label for="cname" class="control-label col-lg-2"> Verifikasi Password <span
                                                class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="ver_pass" name="ver_pass" minlength="2" placeholder="Maximal 6 Karakter"
                                                type="password"
                                                value="{{ isset($akun_admin_kom) ? $akun_admin_kom->ver_pass: '' }}"
                                                required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <a href="{{ url('adminweb/admink') }}">
                                                <button class="btn btn-default" type="button"> Batal</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
@endsection
