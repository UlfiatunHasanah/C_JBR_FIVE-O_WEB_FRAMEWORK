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
                Profile Komunitas
              </header>
            <div class="panel-body">
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
              @endif
  
              <a href=""><button class="btn btn-primary"
                  type="button"><i class="fa fa-plus">Tambah</i></button></a>
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