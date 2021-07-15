<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/logo-icomit.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('frontend/assets/logo-icomit.png') }}"
                    alt="..." />     I-COMIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('faq') }}">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Website Kami!</div>
            <div class="masthead-heading text-uppercase">Temukan Komunitas IT di Sekitar Anda</div>
            {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Ayo Mulai Mencari</a> --}}
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ayo Mulai Mencari !!!</h2>
                <h3 class="section-subheading text-muted">Silahkan masukkan nama provinsi dan kabupaten/kota yang anda
                    cari!</h3>
            </div>

            <center>
                <div class="container">
                    <div class="row">
                        <div class="form-group mb-2">
                            <div class="col-6">
                                <select name="select" class="form-control select1">
                                    <option value="1"> -- Pilih Provinsi --</option>
                                    <option value="2"> Provinsi Aceh</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </center>

            <center>
                <div class="row">
                    <div class="form-group mb-3">
                        <div class="col-6">
                            <select name="select" class="form-control select2">
                                <option value="1">-- Pilih Kabupaten/Kota --</option>
                                <option value="2"> Provinsi Aceh</option>
                            </select>
                        </div>
                    </div>
                </div>
            </center>


            <center><button type='button' class='btn btn-primary center-block'> Cari</button></center>

        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Macam-macam user website</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('frontend/assets/img/about/1.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>User Public</h4>
                            {{-- <h4 class="subheading">Our Humble Beginnings</h4> --}}
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pengguna yang hanya bisa mengakses landing page dari website ini.
                                User public tidak perlu "sign in" dan "sign up" untuk menggunakan website ini
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('frontend/assets/img/about/2.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Admin Komunitas</h4>
                            {{-- <h4 class="subheading">An Agency is Born</h4> --}}
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pengguna yang menjadi partner kami. Dimana pengguna ini mendaftarkan
                                komunitas nya dan mengelola profile komunitasnya. Pengguna ini perlu "sign up" dan "sign
                                in"
                                terlebih dahulu.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('frontend/assets/img/about/3.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Admin Website</h4>
                            {{-- <h4 class="subheading">Transition to Full Service</h4> --}}
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pengguna yang akan mengelola website ini. Pengguna ini merupakan
                                pengguna utama atau inti. Dimana ia akan mengakses dan mengelola semua data.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Jadilah
                            <br />
                            Bagian
                            <br />
                            Dari Kami!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Mahasiswa Teknik Informatika Politeknik Negeri Jember</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/5.jpeg') }}"
                            alt="..." />
                        <h4>Naufal Akbar Kardieno</h4>
                        <p class="text-muted">Lead Designer</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/4.jpg') }}"
                            alt="..." />
                        <h4>Ulfiatun Hasanah</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('frontend/assets/img/team/6.jpeg') }}"
                            alt="..." />
                        <h4>Ezra Allannathaniel</h4>
                        <p class="text-muted">Lead Marketer</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            {{-- <div class="text-center"> --}}
            <h2 class="section-heading text-uppercase">HUBUNGI KAMI</h2><br />
            <h4 class="section-subheading text-muted"> Person : Lead Designer</h4>
            <h4 class="section-subheading text-muted"> Email : jason.akbar30@gmail.com</h4>
            <h4 class="section-subheading text-muted"> Phone : (+62) 1232241981</h4><br />
            <h4 class="section-subheading text-muted"> Person : Lead Developer</h4>
            <h4 class="section-subheading text-muted"> Email : ulfiezafiekhasanah008@gmail.com</h4>
            <h4 class="section-subheading text-muted"> Phone : (+62) 85749253627</h4><br />
            <h4 class="section-subheading text-muted"> Person : Lead Marketer</h4>
            <h4 class="section-subheading text-muted"> Email : ezra.alannathaniel19@gmail.com</h4>
            <h4 class="section-subheading text-muted"> Phone : (+62) 85157815688</h4><br />
            {{-- <hr class="line-center" width="40%" color="white"> --}}
            {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            {{-- </div> --}}
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    Copyright &copy; C_JBR_FIVEO_WEB
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>
</body>

</html>
