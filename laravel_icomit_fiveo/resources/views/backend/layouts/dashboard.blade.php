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
                          <li><i class="fa fa-home"></i><a href="{{ url ('adminweb') }}">Home</a></li>
                          <li><i class="fa fa-laptop"></i>Dashboard</li>
                      </ol>
                  </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                  <header class="panel-heading">
                    Daftar Komunitas Terverifikasi
                  </header>

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
                          @foreach ($dashboard as $item)
                      <tr>
                          <td>{{ $item->id_kom }}</td>
                          <td>{{ $item->nama_kom }}</td>
                          <td>{{ $item->id_prov }}</td>
                          <td>{{ $item->id_kota }}</td>
                          <td>{{ $item->jml_anggota }}</td>
                          <td>{{ $item->no_wa }}</td>
                          <td>{{ $item->logo_kom }}</td>
                      </tr>
                      @endforeach
                      </tr>
                  </tbody>
              </table>
              </div>
          </section>
      </section>
      <!--main content end-->
  @endsection
