<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>@yield('judul') | LINE-LCC</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/bootstrap/css/solid.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/bootstrap/css/testimonial.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/Magnific-Popup/magnific-popup.css')}}" rel="stylesheet">
	
    
    <script src="assets/js/modernizr.js"></script>
  </head>
<body>
    <!-- Fixed navbar -->
    <div id="navbar" class="navbar  navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">LINE - LCC.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li ><a href="{{ url('/') }}">HOME</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">PROFILE <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/','tentang-kami') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/','visi-dan-misi') }}">Visi dan Misi</a></li> 
                <li><a href="{{ url('/','profil-pengajar') }}">Profil Pengajar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROGRAM <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/','rumah-belajar') }}">Rumah Belajar</a></li>
                <li><a href="{{ url('/','persiapan-ujian') }}">Persiapan Ujian</a></li>
                <li><a href="{{ url('/','tutorial-itb') }}">Tutorial</a></li>
                <li><a href="{{ url('/','kegiatan-kemasyarakatan') }}">Kegiatan Masyarakat</a></li>
                <li><a href="{{ url('/','kegiatan-rohani') }}">Kegiatan Rohani</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/','blog') }}">BLOG</a></li>
            <li><a href="{{ url('/','ucc') }}">UCC</a></li>

            <li><a href="{{ url('/','kontak-kami') }}">KONTAK KAMI</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="@yield('share-fb')"><i  class="fa fa-facebook-square "></i> Facebook</a></li>
                <li><a href="@yield('share-tw')"><i  class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="@yield('share-line')"><i  class="fa fa-comment"></i> Line</a></li>
                <li><a href="@yield('share-wa')"><i  class="fa fa-comment"></i> Whats App</a></li>
              </ul>
            </li>
            

            <!--<li><a href="#">MASUK</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	@yield('isi')
	<div class="sosmed-bar">
		<div class="container">
		Follow us : 
		<a href="//fb.com/page.linelcc"><i class="fa fa-facebook"></i></a>
		<a href="//twitter.com/lcc_line"><i class="fa fa-twitter"></i></a>
		<a href="//line.me/ti/p/@vxww8691a"><i class="fa fa-comment"></i></a>
		<a href="//instagram.com/line_lcc"><i class="fa fa-instagram"></i></a>
		</div>
	</div>
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Alamat</h4>
		 			<div class="hline-w"></div>
		 			<p>Jalan Sadang Luhur No.12 Blok 13. Sekeloa, Coblong, Kota Bandung 40134</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="//fb.com/page.linelcc"><i class="fa fa-facebook-square "></i>fb.com/page.linelcc</a> <br>
		 				<a href="//twitter.com/lcc_line"><i class="fa fa-twitter"></i>@lcc_line</a> <br>
		 				<a href="//line.me/ti/p/@vxww8691a"><i class="fa fa-comment"></i>@vxww8691a</a> <br>
		 				<a href="//instagram.com/line_lcc"><i class="fa fa-instagram"></i>@line-lcc</a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Kontak</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 			<p><i class="fa fa-phone"></i><a href="sms:085795348055">085 795 348 055</a> (Yoga)</p>
		 			<p><i class="fa fa-envelope-o"></i><a href="mailto:admin@line-lcc.com?subject=Tanya Dong!">admin@line-lcc.com</a></p></p>
		 		</div>
		 	
		 	</div><!--/row -->
	 	</div><!--/container -->
	 </div><!--/footerwrap -->
	  	<div class="kaki">
	 		<div class="container"> 
	 			<p class="kaki-tulisan">Copyright 2015 | LINE LCC  <a href="{{url('/','tentang-kami')}}">Tentang Kami</a>
	 			</p> 
	 		</div>
	 	</div>

	{!! Html::script('assets/js/jquery-3.1.0.min.js') !!}
	{!! Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') !!}
	{!! Html::script('assets/bootstrap/js/bootstrap.min.js')!!}
	{!! Html::script('assets/js/retina-1.1.0.js')!!}
	{!! Html::script('assets/js/jquery.hoverdir.js')!!}
	{!! Html::script('assets/js/jquery.hoverex.min.js')!!}
	{!! Html::script('assets/js/jquery.isotope.min.js')!!}
	{!! Html::script('assets/js/custom.js')!!}
	{!! Html::script('assets/js/kegiatan.js')!!}
	{!! Html::script('assets/Magnific-Popup/jquery.magnific-popup.js')!!}
	
	@yield('page-script')
</body>
</html>