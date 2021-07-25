   @extends('Layout/user')
   @section('container')

       <body>
           <!--================ Start Header Menu Area =================-->
           <header class="header_area">
               <div class="main_menu">
                   <div class="search_input">
                       <div class="container">

                       </div>
                   </div>

                   <nav class="navbar navbar-expand-lg navbar-light">
                       <div class="container">

                           <a class="navbar-brand logo_h" href="/"><img src="{{ url('1/img/1.png') }}" alt="" /></a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse"
                               data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                               aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span> <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                           <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                               <ul class="nav navbar-nav menu_nav ml-auto">
                                   <li class="nav-item active">
                                       <a class="nav-link" href="{{ url('/kom') }}">Komunitas</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ url('/') }}">Tentang ICOMIT</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ url('/bantuan') }}">Bantuan</a>
                                   </li>

                                   <li class="nav-item submenu dropdown">
                                       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Akun</a>
                                       <ul class="dropdown-menu">
                                           <li class="nav-item">
                                               <a class="nav-link" href="{{ url('/login') }}">Masuk</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="{{ url('/daftar') }}">Daftar</a>
                                           </li>
                                       </ul>
                                   </li>


                               </ul>
                           </div>
                       </div>
                   </nav>
               </div>
           </header>



           <section class="trainer_area "></section>

           <section class="trainer_area section_gap_top">
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-5">
                           <div class="main_title">
                               <h2 class="mb-3">Detail Komunitas</h2>
                               <p>
                                   Segala Informasi Tentang Komunitas yang Anda Inginkan
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="row justify-content-center d-flex align-items-center">
                       <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                           <div class="thumb d-flex justify-content-sm-center">
                               <img class="img-fluid" src="{{ url('logo/' . $pengguna->logo) }}" alt="" />
                           </div>
                           <div class="meta-text text-sm-center">
                               <h4>{{ $pengguna->coname }}</h4>
                               <div class="mb-4">
                                   <p>
                                       {{ $pengguna->email }}
                                   </p>
                               </div>


                               <div class="align-items-center justify-content-center d-flex">
                                   <a href="{{ $pengguna->ins }}" target="_blank"><i class="ti-instagram"></i></a>
                                   <a href="{{ $pengguna->you }}" target="_blank"><i class="ti-youtube"></i></a>


                               </div>
                           </div>




                       </div>


                   </div>
               </div>
           </section>

           <section class="course_details_area2 ">
               <div class="container">
                   <div class="row">
                       <div class="content_wrapper">
                           <h4 class="title">Deskripsi </h4>
                           <div class="content">
                               <br>
                               {{ $pengguna->deskripsi }}

                           </div>
                       </div>

                   </div>

               </div>
           </section>


           <section class="chooseus spad set-bg  section_gap_top ">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 col-md-12">
                           <div class="text-heading  title_color text-center">

                               <h2>Informasi Komunitas</h2>
                           </div>



                           <div class="form-group">
                               <form action="{{ url('/daftar') }}" enctype="multipart/form-data"
                                   class="form-horizontal form-bordered" method="POST">
                                   @csrf
                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Nama Komunitas</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly" class="form-control" id="coname"
                                               name="coname" value="{{ $pengguna->coname }}">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Nama Pengurus Komunitas</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly" class="form-control" id="nama" name="nama"
                                               value="{{ $pengguna->nama }}">
                                       </div>
                                   </div>





                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Provinsi</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly" class="form-control" id="nama" name="nama"
                                               value="{{ $pengguna->prov }}">
                                       </div>
                                   </div>


                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Kabupaten</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly" class="form-control" id="nama" name="nama"
                                               value="{{ $pengguna->kab }}">
                                       </div>
                                   </div>



                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Email</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly" class="form-control" id="email"
                                               name="email" value="{{ $pengguna->email }}">
                                       </div>
                                   </div>




                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Nomor Hp</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly"
                                               onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                               class="form-control" id="nohp" name="nohp" value="{{ $pengguna->nohp }}">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="col-lg-12 col-md-12 control-label"> Nomor WhatsApp</label>
                                       <div class="col-lg-12 col-md-12">
                                           <input type="text" readonly="readonly"
                                               onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                               class="form-control" id="nowa" name="nowa" value="{{ $pengguna->nowa }}">
                                       </div>
                                   </div>





















                           </div>
                       </div>






                       </form>

                   </div>
               </div>

               </div>
               </div>
               <div class="d-grid  col-2 mx-auto">




                   <div class="d-grid  col-lg-12 ">

                       <a href="{{url('/kom')}}" class="   btn primary-btn">Kembali</a>


                   </div>
               </div>

           </section>
           <section class="section_gap_top"></section>

       @endsection
