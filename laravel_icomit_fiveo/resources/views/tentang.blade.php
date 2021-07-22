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
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/"
              ><img src="{{url('1/img/1.png')}}" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/kom">Komunitas</a>
                </li>
                <li  class="nav-item active">
                  <a class="nav-link" href="/">Tentang ICOMIT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/bantuan">Bantuan</a>
                </li>
              
               <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Akun</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/daftar"
                        >Daftar</a
                      >
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
     <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  HUMAN RESOURCES DEVELOPMENT SERVICES
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  One Step With The Community
                </h2>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
      
      <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="{{url('1/img/about.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Welcome to our Website</h4>
                <p>
                  ICOMIT adalah sebuah website yang menyediakan layanan pengembangan
                  SDM di bidang IT. Melalui website ini kita bisa menjangkau lebih
                  luas komunitas IT diluar sana. Sehingga akan terjalin relasi yang
                  lebih kuat dan intens.
                </p>
                <p>
                  Sumber daya manusia merupakan salah satu faktor kunci dalam menghadapi
                  perkembangan teknologi digital. Oleh karena itu, kita harus menyokong 
                  sistem yang mampu menciptakan SDM yang berkualitas dan memiliki 
                  keterampilan serta berdaya saing tinggi dalam persaingan global. 
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="feature_area ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Berikut ini beberapa fasilitas menarik yang kami sajikan untuk anda
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="ti-target"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Find Community</h4>
                <p>
                  Temukan komunitas-komunitas di sekitar anda dan
                  dapatkan informasi tentang mereka.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="ti-user"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Active Community List</h4>
                <p>
                  Komunitas yang terdaftar di website ini sudah
                  terverifikasi keaktifannya. Jadi anda tidak perlu
                  ragu untuk bergabung.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="ti-unlock"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">No Login</h4>
                <p>
                  Anda bisa menikmati layanan website ini tanpa
                  perlu login (kecuali admin komunitas). Jadi kami 
                  tidak akan menyimpan data diri anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          

           <section class="trainer_area ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3">Our Amazing Team</h2>
              <p>
                Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="{{url('1/img/trainer/5.jpeg')}}" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Naufal Akbar K.Y</h4>
              <p class="designation">Lead Web Designer</p>
              <div class="mb-4">
                <p>
                  (E41191784)</br>
                  SEMESTER 4</br>
                  D4 TEKNIK INFORMATIKA
                </p>
              </div>
              {{-- <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div> --}}
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="{{url('1/img/trainer/4.jpg')}}" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Ulfiatun Hasanah</h4>
              <p class="designation">Lead Web Developer</p>
              <div class="mb-4">
                <p>
                  (E41191524)</br>
                  SEMESTER 4</br>
                  D4 TEKNIK INFORMATIKA
                </p>
              </div>
              {{-- <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div> --}}
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="{{url('1/img/trainer/6.jpeg')}}" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Ezra Allannathaniel</h4>
              <p class="designation">Lead Web Marketer</p>
              <div class="mb-4">
                <p>
                  (E41191784)</br>
                  SEMESTER 4</br>
                  D4 TEKNIK INFORMATIKA
                </p>
              </div>
              {{-- <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div> --}}
            </div>
          </div>

          {{-- <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="{{url('1/img/trainer/t4.jpg')}}" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Nathan Macken</h4>
              <p class="designation">Sr. web designer</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
          
@endsection