<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Daftar</title>

    <!--
  CSS
  ============================================= -->




    <link rel="stylesheet" href="{{ url('1/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('1/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ url('1/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('1/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('1/vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ url('1/css/style.css') }}" />



</head>

<body>





    <section class="chooseus spad set-bg  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text-heading title_color">

                        <h2>Form Pendaftaran Komunitas</h2>
                    </div>



                    <div class="form-group">
                        <form action="{{url('/daftar')}}" enctype="multipart/form-data" class="form-horizontal form-bordered"
                            method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Nama Komunitas</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" id="coname" required="required"
                                        name="coname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Nama Pengurus Komunitas</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" required="required" id="nama" name="nama">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Provinsi</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" required="required" id="prov" name="prov">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Kabupaten/Kota</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" required="required" id="kab" name="kab">
                                </div>
                            </div>








                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Email</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" required="required" id="email" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Password </label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="password" class="form-control" required="required" id="password"
                                        name="password">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Nomor Hp</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        class="form-control" id="nohp" name="nohp" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Nomor WhatsApp</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57"
                                        class="form-control" id="nowa" name="nowa" required="required">
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Link Instagram</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" id="ins" name="ins">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> link Youtube</label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" class="form-control" id="you" name="you">
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="col-lg-12 col-md-12 control-label"> Foto Kegiatan Komunitas </label>
                                <div class="col-lg-12 col-md-12">
                                    <input type="file" class="form-control" id="fkeg" name="fkeg" required="required"
                                        aria-label="Upload">


                                </div>
                            </div>










                            <div class="d-grid  col-6 mx-auto">




                                <div class="d-grid  col-lg-12 ">
                                    <button class=" btn primary-btn" type="submit">Daftar</button>
                                    <a href="{{url('/login')}}" class=" btn primary-btn">Kembali</a>


                                </div>
                            </div>
                    </div>
                </div>






                </form>

    </section>










    <script src="{{ url('1/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('1/js/popper.js') }}"></script>
    <script src="{{ url('1/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('1/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('1/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('1/js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ url('1/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('1/js/mail-script.js') }}"></script>


    <script src="{{ url('1/js/theme.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</body>

</html>
