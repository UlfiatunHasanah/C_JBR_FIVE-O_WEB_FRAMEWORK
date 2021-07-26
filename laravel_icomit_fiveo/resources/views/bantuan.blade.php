   @extends('Layout/user')
   @section('container')

       <body>
           <!--================ Start Header Menu Area =================-->
           <header class="header_area white-header">
               <div class="main_menu">
                   <div class="search_input">
                       <div class="container">

                       </div>
                   </div>

                   <nav class="navbar navbar-expand-lg navbar-light">
                       <div class="container">
                           <!-- Brand and toggle get grouped for better mobile display -->
<<<<<<< Updated upstream
                           <a class="navbar-brand logo_h" href="{{ url('/')}}"><img src="{{ url('1/img/1.png') }}" alt="" /></a>
=======
                           <a class="navbar-brand logo_h"><img src="{{ url('1/img/1.png') }}" alt="" /></a>
>>>>>>> Stashed changes
                           <button class="navbar-toggler" type="button" data-toggle="collapse"
                               data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                               aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span> <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                           <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                               <ul class="nav navbar-nav menu_nav ml-auto">
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ url('/kom') }}">Komunitas</a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ url('/') }}">Tentang ICOMIT</a>
                                   </li>
                                   <li class="nav-item active">
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
           <!--================ End Header Menu Area =================-->

           <!--================ Start Home Banner Area =================-->
           <section class="banner_area">
               <div class="banner_inner d-flex align-items-center">
                   <div class="overlay"></div>
                   <div class="container">
                       <div class="row justify-content-center">
                           <div class="col-lg-6">
                               <div class="banner_content text-center">
                                   <h2>Bantuan </h2>
                                   <div class="page_link">

                                       <a>Frequently Asked Questions</a>

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--================End Home Banner Area =================-->

           <!--================ Start Course Details Area =================-->
           <section class="course_details_area section_gap">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 course_details_left">

                           <div class="main_title">
                               <h2 class="mb-3"> Frequently Asked Questions</h2>
                               <p>
                                   Temukan Jawaban dari Pertanyaanmu
                               </p>
                           </div>

                           <div class="content_wrapper">
                               <h4 class="title">Q&A Untuk User Public</h4>
                               <div class="content">
                                   <h5><b>1. Bagaimana cara menemukan komunitas ?</b></h5>
                                   <p>Pada halaman landing page klik "Komunitas" pada navbar. Kemudian masukkan nama
                                       provinsi
                                       dan nama kabupaten yang anda inginkan. Lalu klik tombol "search". Maka akan muncul
                                       list komunitas
                                       sesuai zonasi yang diinputkan.
                                   </p>
                                   <h5><b>2. Bagaimana cara untuk join ke komunitas yang diinginkan ?</b></h5>
                                   <p>Setelah anda menemukan komunitas yang diinginkan. Klik "View Detail" kemudian klik
                                       link sosial
                                       media yang dimiliki komunitas tersebut.</p></br>
                               </div>

                               <h4 class="title">Q&A Untuk Admin Komunitas</h4>
                               <div class="content">
                                   <h5><b>1. Bagaimana cara menjadi admin sebuah komunitas ?</b></h5>
                                   <p>Pastikan anda memiliki sebuah komunitas yang aktif. Kemudian daftarkan komunitas anda
                                       di website ini.</p>
                                   <h5><b>2. Bagaimana cara mendaftarkan sebuah komunitas ?</b></h5>
                                   <p>a. Pastikan komunitas anda belum terdaftar sebelumnya</br>
                                       b. Pada menu akun pilih "Daftar"</a></br>
                                       c. Isi form dengan benar kemudian "daftar"</br>
                                       d. Tunggu verifikasi dari admin website</br>
                                       e. Jika sudah terverifikasi, akun anda siap digunakan</p>
                                   <h5><b>3. Sudah terdaftar tapi tidak muncul di list?</b></h5>
                                   <p>a. Setelah anda mendaftar data anda akan diverifikasi terlebih dahulu</br>
                                       b. Setelah data komunitas anda di nyatakan valid maka admin website akan menyampaikan
                                       informasi kepada anda</br>
                                       c. Jika data tidak valid maka data anda akan dihapus
                                   </p>
                               </div>


                           </div>
                       </div>



                   </div>

               </div>
           </section>

       @endsection
