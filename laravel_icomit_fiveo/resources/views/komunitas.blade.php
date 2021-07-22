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
          
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/kom">Komunitas</a>
                </li>
                <li class="nav-item">
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
    
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    


<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Komunitas</h2>
                <div class="page_link">
                  <a >Cari Komunitas</a>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
         <section class="contact_area course_details_area nav-item section_gap1  ">
      <div class="container">
      <div class="row">
<div class="col-lg-12 course_details_left">
                    
                   
                        <h4 class="title">Cari Komunitas</h4>

          <div class="col-lg-12">
            <form
              enctype="multipart/form-data"
              class="row contact_form"
              action="/kom"
              method="GET"
             
              
            >
              <div class="col-md-4">
                <div class="form-group">
                  <input
                    type="text"
                    name="keyword1"
                    class="form-control"
                    value="{{Request::get('keyword1')}}"
                    placeholder="Provinsi"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Provinsi'"
                    required=""
                  />
                </div>
                
                
              </div>
              <div class="col-md-4">
                <div class="form-group">

                  <input
                    type="text"
                    class="form-control"
                    name="keyword2"
                    value="{{Request::get('keyword2')}}"
                    placeholder="Kabupaten"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Kabupaten'"
                    required=""
                  />
                </div>
              </div>
            
             <div class="col-md-4">
                  <button type="submit" class="primary-btnx mb-3 mb-sm-0">Search</button>
                 
                </div>
            </form>
          </div>




          <div class="content section_gap2">
                            <ul class="course_list">
                              @foreach ($pengguna as $pengguna)
                                <li class="justify-content-between d-flex">
                                    <p>{{$pengguna->coname}}</p>
                                    <a class="primary-btn text-uppercase" href="/detailpengguna/{{$pengguna->id}}" method="GET" >View Details</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
        </div>
           </div>
           </div>
      </div>
    </section>





@endsection