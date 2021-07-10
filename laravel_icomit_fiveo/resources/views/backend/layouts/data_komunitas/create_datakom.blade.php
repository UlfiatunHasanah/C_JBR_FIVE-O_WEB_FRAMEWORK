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
                    <li><i class="fas fa-poll-h"></i>Data Komunitas</li>
                </ol>
            </div>
    </div>

        <!-- Form validation -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            <header class="panel-heading">
                {{ isset($admin_web) ? 'Mengubah' : 'Menambahkan'}} Data Komunitas
            </header>
            @if ($errors->any())
            <div class="alert alert-danger">
            <strong>Ooops!</strong> Ada masalah pada masukan anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error}}</li>
                @endforeach
                </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="data_komunitas_form" method="POST"
                            ction="{{isset ($data_kom) ? route ('datakom.update', $data_kom->id_kom) : 
                            url ('adminweb/datakom/store')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! isset($data_kom) ? method_field('PUT') : ''!!}
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Id Admin Komunitas<span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="id_admin_kom" name="id_admin_kom" minlength="5" type="text" 
                                    value="{{ isset($data_kom) ? $data_kom->id_admin_kom : ''}}"required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Komunitas <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama_kom" name="nama_kom" minlength="5" type="text" 
                                    value="{{ isset($data_kom) ? $data_kom->nama_kom : ''}}"required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2"> Nama Provinsi <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama_prov" name="nama_prov" minlength="2" type="text" 
                                    value="{{ isset($data_kom) ? $data_kom->nama_prov : ''}}"required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Nama Kabupaten/Kota <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama_kota" name="nama_kota" type="text" 
                                    value="{{ isset($data_kom) ? $data_kom->nama_kota : ''}}"required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Tahun Berdiri <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="thnberdiri" name="thnberdiri" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Jumlah Anggota <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="jmlanggota" name="jmlanggota" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Nomor WhatsApp <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nowa" name="nowa" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Akun Instagram <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="instagram" name="instagram" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Deskripsi <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="desckom" name="desckom" type="text" required/>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Logo Komunitas <span class="required">*</span></label>
                                @if (count($errors)>0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error) 
                                            {{ $errror }} <br/>
                                        @endforeach
                                    </div>
                                @endif
                                   
                                    <div class="form-group">
                                        <b>File Gambar</b><br/>
                                        <input type="file" name="logo_kom"> <br/>
                                    </div>
                            </div> <br><br><br>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a href="{{url('adminweb/datakom')}}">
                                    <button class="btn btn-default" type ="button"> Batal</button></a>
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