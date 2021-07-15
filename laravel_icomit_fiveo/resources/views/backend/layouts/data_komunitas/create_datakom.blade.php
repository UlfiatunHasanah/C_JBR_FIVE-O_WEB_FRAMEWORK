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
                            action="{{isset ($data_kom) ? route ('datakom.update', $data_kom->id_kom) : 
                            url ('adminweb/datakom/store')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! isset($data_kom) ? method_field('PUT') : ''!!}
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Id Admin Komunitas<span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="id_admin_kom" name="id_admin_kom">
                                        @foreach ($akun_admin_kom as $item)
                                        <option value="{{$item->id_admin_kom}}">{{$item->id_admin_kom}}.  {{$item->username}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Komunitas <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama_kom" name="nama_kom" minlength="5" type="text" placeholder="Nama Komunitas"
                                    value="{{ isset($data_kom) ? $profile_kom->nama_kom : ''}}"required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2"> Nama Provinsi <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="id_prov" name="id_prov">
                                        @foreach ($provinsi as $item)
                                        <option value="{{$item->id_prov}}">{{$item->nama_prov}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Nama Kabupaten/Kota <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="id_kabkot" name="id_kabkot">
                                        @foreach ($kab_kota as $item)
                                        <option value="{{$item->id_kabkot}}">{{$item->nama_kab_kota}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Tahun Berdiri <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="th_berdiri" name="th_berdiri" type="text" placeholder="Tahun Berdiri" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Jumlah Anggota <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="jml_anggota" name="jml_anggota" type="text" placeholder="Jumlah Anggota" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Link WhatsApp <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="link_wa" name="link_wa" type="text" placeholder="Link WhatsApp" required/>Contoh : wa.me/6286749253627
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Link Instagram <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="link_ig" name="link_ig" type="text" placeholder="Link Akun Instagram" required/>Contoh : instagram.com/[nama akun ig]
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Deskripsi <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="desc_kom" name="desc_kom" type="text" placeholder="Deskripsi Komunitas" required></textarea>
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