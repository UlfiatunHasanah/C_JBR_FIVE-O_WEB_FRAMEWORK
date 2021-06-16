@extends('backend.layouts2.template2')

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

        <!-- Form validation -->
        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
              <header class="panel-heading">
                Profile Komunitas
              </header>
            <div class="panel-body">
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
              @endif
              <a href="{{ url ('adminkom/profile_komunitas/create') }}"><button class="btn btn-primary"
                  type="button"><i class="fa fa-plus">  Tambah </i></button></a>

                  <br> <br>
                        <table class="table table-striped table-advance table hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_key"></i> Id Komunitas</th>
                                    <th><i class="icon_document"></i> Nama Komunitas</th>
                                    <th><i class="fas fa-map-marker-alt"></i> Provinsi</th>
                                    <th><i class="fas fa-map-marker-alt"></i> Kabupaten/Kota</th>
                                    <th><i class="fas fa-user"></i> Jumlah Anggota</th>
                                    <th><i class="fas fa-phone"></i> No. WA</th>
                                    <th><i class="fas fa-image"></i> Logo Komunitas</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                    @foreach ($profile_kom as $item)
                                        <tr>
                                            <td>{{$item->id_kom}}</td>
                                            <td>{{$item->nama_kom}}</td>
                                            <td>{{$item->id_prov}}</td>
                                            <td>{{$item->id_kota}}</td>
                                            <td>{{$item->jml_anggota}}</td>
                                            <td>{{$item->no_wa}}</td>
                                            <td>{{$item->logo_kom}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning" href="">
                                                    {{-- <a class="btn btn-warning" href="{{ route('pengalaman_kerja.edit', $item->id_prov)}}"> --}}
                                                        <i class="fa fa-edit"></i></a> 
                                                        <button type="submit" class="btn btn-danger">
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
    <!--main content end-->
    </section>
    @endsection