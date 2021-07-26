

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sign In</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{url('bb/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/slider.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/pweb.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/main.css')}}">

	
    <link rel="stylesheet" href="{{url('cc/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('cc/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('cc/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('cc/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('cc/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{url('cc/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('cc/css/style.css')}}">
</head>

<body>
		
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{url('bb/img/login.jpg')}}" alt="">
						<div class="hover">
							<h4>WELCOME TO ICOMIT</h4>
                            <p>Selamat menikmati layanan yang disediakan. Pastikan anda
								sudah memiliki akun yang terverifkasi.</p>
							<a class="primary-btn" href="{{url('/daftar')}}">Daftar</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6">

					<div class="login_form_inner">
						<h2>Failed to Login</h2>
						<p>Inccorect Email or Password!</p>
						<h3>Sign in </h3>
						<form action="{{url('/postlogin')}}" class="row login_form"  method="POST" >

					   {{csrf_field()}}
							<div class="col-md-12 form-group">
								<input type="text" class="form-control"  name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control"   name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									
									
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="Login" class="primary-btn">Sign In</button>
								
								<a href="{{url('/')}}">Back</a>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1523e6"/></svg></div>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	
	<!-- End footer Area -->


	<script src="{{url('bb/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('bb/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.sticky.js')}}"></script>
	<script src="{{url('bb/js/nouislider.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('bb/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{url('bb/js/gmaps.min.js')}}"></script>
	<script src="{{url('bb/js/main.js')}}"></script>


	 <script src="{{url('cc/js/jquery.min.js')}}"></script>
  <script src="{{url('cc/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('cc/js/popper.min.js')}}"></script>
  <script src="{{url('cc/js/bootstrap.min.js')}}"></script>
  <script src="{{url('cc/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{url('cc/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('cc/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('cc/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('cc/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('cc/js/aos.js')}}"></script>
  <script src="{{url('cc/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{url('cc/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{url('cc/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{url('cc/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{url('cc/js/google-map.js')}}"></script>
  <script src="{{url('cc/js/main.js')}}"></script>
</body>

</html>