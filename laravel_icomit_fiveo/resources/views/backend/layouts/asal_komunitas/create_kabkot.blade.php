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
                    <li><i class="fas fa-map-marker-alt"></i>Kabupate/kota</li>
                </ol>
            </div>
    </div>

        <!-- Form validation -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            <header class="panel-heading">
                {{ isset($admin_web) ? 'Mengubah' : 'Menambahkan'}} Data Provinsi
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
                            <form class="form-validate form-horizontal" id="data_kabkot_form" method="POST"
                            action="{{isset ($kab_kota) ? route ('kabkot.update', $kab_kota->id_kabkot) : 
                            url ('adminweb/provinsi/store')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {!! isset($kab_kota) ? method_field('PUT') : ''!!}
                            <div class="form-group">
                            <label for="cname" class="control-label col-lg-2">Kode Kabupaten/Kota<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="id_kabkot" name="id_kabkot" minlength="5" type="text"
                                value="{{ isset($kab_kota) ? $kab_kota->id_kabkot : ''}}"required/>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Provinsi<span
                                    class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="id_prov" name="id_prov" placeholder="--Pilih Provinsi--">
                                            @foreach ($provinsi as $item)
                                            <option value="{{$item->id_prov}}">{{$item->nama_prov}} </option>
                                            @endforeach
                                        </select>
                                    {{-- value="{{ isset($kab_kota) ? $kab_kota->id_prov : ''}}"required/> --}}
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="cname" class="control-label col-lg-2"> Nama Kabupaten/Kota<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nama_kab_kota" name="nama_kab_kota" minlength="2" type="text"
                                value="{{ isset($kab_kota) ? $kab_kota->nama_kab_kota : ''}}"required/>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a href="{{url('adminweb/kabkot')}}">
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