<!DOCTYPE html>
<?php $profil=App\Models\Profil::where("id","1")->first(); ?>
<html lang="en">
  <head>
    <title>PPID DESA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="front/css/animate.css">
    
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">

    <link rel="stylesheet" href="front/css/aos.css">

    <link rel="stylesheet" href="front/css/ionicons.min.css">

    <link rel="stylesheet" href="front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="front/css/flaticon.css">
    <link rel="stylesheet" href="front/css/icomoon.css">
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tabs {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 830px;
}

/* Style the buttons inside the tab */
.tabs button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tabs button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabs button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabscontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  
}
</style>
  </head>
  <body>
     
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}"><img src="front/images/logo-kab.png" width="30" height="30"> PPID DESA</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ url('/jenis_informasi') }}" class="nav-link">Jenis Informasi</a></li>
	          <li class="nav-item"><a href="{{ url('/jenis_dokumen') }}" class="nav-link">Jenis Dokumen</a></li>
	          <li class="nav-item"><a href="{{ url('/pemohon') }}" class="nav-link">Permohonan Informasi</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    @yield('konten')

    <section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><a href="{{ url('/informasi_berkala') }}" class="btn btn-secondary">Informasi Berkala</a></h3>
				<p>Informasi yang disampaikan secara berkala.</p>
                
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><a href="{{ url('/informasi_sertamerta') }}" class="btn btn-secondary">Informasi serta merta</a></h3>
                <p>Informasi yang disampaikan secara serta-merta.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><a href="{{ url('/informasi_setiapsaat') }}" class="btn btn-secondary">Informasi Setiap Saat</a></h3>
                <p>Informasi yang disampaikan Setiap Saat.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"><a href="{{ url('/pemohon') }}" class="btn btn-secondary">Permohonan Informasi</a></h3>
                <p>Permohonan data/informasi .</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

   

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">PPID DESA</h2>
              {!! $profil->ket !!}
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="{{ $profil->tw }}"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="{{ $profil->fb }}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="{{ $profil->ig }}"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="{{ $profil->ig }}"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
           <!--<div class="col-md">
            <div class="ftco-footer-widget mb-4">
             <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>-->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Tentang PPID</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/profils') }}" class="py-2 d-block">Profil</a></li>
                <li><a href="{{ url('/strukturs') }}" class="py-2 d-block">Struktur Organisasi</a></li>
                <!--<li><a href="#" class="py-2 d-block">Visi dan Misi</a></li>-->
                <li><a href="{{ url('/sops') }}" class="py-2 d-block">SOP</a></li>
                <li><a href="{{ url('/maklumats') }}" class="py-2 d-block">Maklumat Informasi Publik</a></li>
                <li><a href="{{ url('/mekanismes') }}" class="py-2 d-block">Mekanisme Pelayanan</a></li>
                <li><a href="{{ url('/dasarhukums') }}" class="py-2 d-block">Dasar Hukum</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Kontak Kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <li><span class="icon icon-home"></span><span class="text">Desa {{ $profil->desa }}</span></li>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{ $profil->alamat }}</span></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $profil->email }}</span></a></li>
	                <!--<li></li>-->
	              </ul>
	              <a href="https://lapor.go.id/"><img src="front/images/lapors.png" width="100%" ></a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="font-size:10px;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib--</a>Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a><br>
  Aplikasi oleh <a href="https://diskominfo.bandungkab.go.id" target="_blank">Diskominfo Kabupaten Bandung </a> | <a href="https://facebook.com/firman.muhammad2" target="_blank">FMS</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="front/js/jquery.min.js"></script>
  <script src="front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="front/js/popper.min.js"></script>
  <script src="front/js/bootstrap.min.js"></script>
  <script src="front/js/jquery.easing.1.3.js"></script>
  <script src="front/js/jquery.waypoints.min.js"></script>
  <script src="front/js/jquery.stellar.min.js"></script>
  <script src="front/js/owl.carousel.min.js"></script>
  <script src="front/js/jquery.magnific-popup.min.js"></script>
  <script src="front/js/aos.js"></script>
  <script src="front/js/jquery.animateNumber.min.js"></script>
  <script src="front/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="front/js/google-map.js"></script>
  <script src="front/js/main.js"></script>
  <script src="https://kit.fontawesome.com/5ce351aa78.js" crossorigin="anonymous"></script>
    <script>
function openCity(evt, cityName) {
  var i, tabscontent, tablinks;
  tabscontent = document.getElementsByClassName("tabscontent");
  for (i = 0; i < tabscontent.length; i++) {
    tabscontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
  </body>
</html>