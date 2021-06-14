@extends('backend.layout2.template2')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{url ('adminkom')}}">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                        <li><i class="fa fa-id-card"></i>Profile Komunitas</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Form validation -->
        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
              <header class="panel-heading">
                {{ isset ($admin_kom) ? 'Mengubah' : 'Menambahkan' }} Profile Komunitas
              </header>
            @if ($errors->any())
            <div class ="alert alert-danger">
                <strong> Oops!</strong> Ada masalah pada masukan anda. <br><br>
            <ul>
                @foreach ($errors ->all() as $error)
                <li> {{ $error }}</li>  
                @endforeach
            </ul>
            </div>
            @endif
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="profile_komunitas_form" method="POST"
                    action="{{ route('profile_komunitas.store')}}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                    <label for="cname" class="control-label col-lg-2">Nama Komunitas <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="namakom" name="namakom" minlength="5" type="text"
                        required/>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="cname" class="control-label col-lg-2"> Nama Provinsi <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="namaprov" name="namaprov" minlength="2" type="text"
                        required/>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="curl" class="control-label col-lg-2"> Nama Kabupaten/Kota <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="namakota" name="namakota" type="text"
                        required/>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="curl" class="control-label col-lg-2"> Tahun Berdiri <span
                        class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="thnberdiri" name="thnberdiri" type="text"
                        required/>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="curl" class="control-label col-lg-2"> Jumlah Anggota <span
                            class="required">*</span></label>
                        <div class="col-lg-10">
                            <input class="form-control" id="jmlanggota" name="jmlanggota" type="text"
                            required/>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="curl" class="control-label col-lg-2"> Nomor WhatsApp <span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nowa" name="nowa" type="text"
                                required/>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2"> Akun Instagram <span
                                    class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="instagram" name="instagram" type="text"
                                    required/>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2"> Deskripsi <span
                                        class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="desckom" name="desckom" type="text"
                                        required/>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2"> Logo Komunitas <span
                                            class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="logokom" name="logokom" type="text"
                                            required/>
                                        </div>
                                        </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{route('profile_komunitas.index')}}"><button class="btn btn-default"
                            type ="button"> Batal </button></a>
                        </div>
                    </div>
                    </form>
                </div>
               
            </div>
        </section>
        </div>
        </div>
        <!-- page end-->
        <div class="text-right">
            <div class="credits">
                Designed by <a href="">FiveO</a>
            </div>
        </div>
    </section>
    <!--main content end-->
    </section>
    @endsection
    @push('content-css')
<link href="{{asset('backend/css/bootstrap-datepicker.css')}}" rel="stylesheet"/>
@endpush
@push('content-js')
<script src="{{asset('backend/js/bootstrap-datepicker.css')}}"></script>
<script type="text/javascript">
    $('#thnberdiri').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
@endpush