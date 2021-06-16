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
                        <li><i class="fas fa-map-marker-alt"></i>Provinsi</li>
                    </ol>
                </div>
        </div>
        
         <!-- Form validation -->
         <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">Data Provinsi</header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
  
                        <a href="{{ url ('adminweb/provinsi/create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus">  Tambah </i></button></a>
                        <br> <br>
                        <table class="table table-striped table-advance table hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_key"></i> Kode Provinsi</th>
                                    <th><i class="icon_document"></i> Nama Provinsi</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                    @foreach ($provinsi as $item)
                                        <tr>
                                            <td>{{$item->id_prov}}</td>
                                            <td>{{$item->nama_prov}}</td>
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
    </section>
    <!--main content end-->

    @endsection