@extends('template/t_index')
@section('judul') 
Beranda
@endsection

@section('share-fb') 
	{{$datas['fb']}}
@endsection
@section('share-tw') 
	{{$datas['twitter']}}
@endsection
@section('share-line') 
	{{$datas['line']}}
@endsection
@section('share-wa') 
	{{$datas['wa']}}
@endsection


@section('isi')
<div id="banner" style="background-image: url('{{asset('head.png')}}');"></div>
 
<div class="container mtb">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-0">
 			<h4>Sekilas Tentang LINE LCC.</h4>
 			<img src="images/line/cover.jpg">
 			<p>Kami adalah sebagian dari masyarakat bangsa yang berkesempatan mendapatkan pendidikan formal minimal jenjang kuliah universitas/institut sederajat yang dapat mempersiapkan generasi muda dalam menjalankan perannya di masa depan untuk menggapai kemajuan bangsa dan negara serta mampu mewujudkan diri mereka dan masyarakat sekitar untuk menjadi duta kebudayaan yang menjunjung tinggi nilai perdamaian dengan tidak menimbulkan friksi, distorsi dan stagnasi dalam masyarakat.</p> 				
 			<br/><a href="{{url('/','tentang-kami')}}" class="btn btn-theme">Selengkapnya</a></p>
		</div>
		<div class="col-lg-4">
 			<h4>Infografis LINE-LCC.</h4>
 			<a class="test-popup-link" href="images/line/poster.jpg"><img src="images/line/poster.jpg" style="max-width:100%"  /></a>
		</div>
		<div class="col-lg-4">
 			<h4>Program.</h4>
 			<p> LINE Learning and CUltural Center, bergerak di berbagai macam bidang, mulai dari pendidikan, hubungan masyarakat, serta kebudayaan. Silakan klik dibawah ini jika ingin lebih tahu secara spesifik dari berbagai kegiatan di LINE LCC</p>
 			<ul style="padding:0 20px">
            <li><a href="{{ url('/','rumah-belajar') }}">Rumah Belajar</a></li>
            <li><a href="{{ url('/','persiapan-ujian') }}">Persiapan Ujian</a></li>
            <li><a href="{{ url('/','tutorial-itb') }}">Tutorial</a></li>
            <li><a href="{{ url('/','kegiatan-kemasyarakatan') }}">Kegiatan Masyarakat</a></li>
            <li><a href="{{ url('/','kegiatan-rohani') }}">Kegiatan Rohani</a></li>
            </ul>
		</div>
	</div><!--/row -->
</div><!--/container -->

<div id="service">
<h3>PROGRAM</h3>
 	<div class="container">
			<div class="row centered">
    				<div class="col-md-3">
					<i class="fa fa-star-o"></i>
					<h4>Persiapan UN dan SBMPTN</h4>
					<p>Dapatkan nilai tertinggi UN!! Semangat.</p>
				</div>
    				<div class="col-md-3">
					<i class="fa fa-trophy"></i>
					<h4>TRY OUT SBMPTN</h4>
					<p>Ikuti tryout SBMPTN LINE.</p>
				</div>
    				<div class="col-md-3">
					<i class="fa fa-university"></i>
					<h4>PERSIAPAN KULIAH</h4>
					<p>Yuk Persiapkan dirimu untuk Perguruan Tinggi impian.</p>
				</div>
    			<div class="col-md-3">
					<i class="fa fa-gift"></i>
					<h4>PROGRAM KEMASYARAKATAN</h4>
					<p>Kita juga ada kegiatan yang bersifat kemasyarakatan</p>
				</div>
			</div>
 		</div>
 	</div>
 </div>

 <div class="portfoliowrap">
    <h3>KEGIATAN</h3>

    <div class="portfolio-centered">
        <div class="recentitems portfolio">
			@for ($i=1;$i<=12;$i++)
	 		<div class="portfolio-item graphic-design">
				<div class="he-wrap tpl6">
					<a class="test-popup-link" href="images/line/kegiatan/{{$i}}.jpg"><div style="background: url('images/line/kegiatan/{{$i}}.jpg') repeat scroll center center / cover #aaa; padding-bottom:100%;"></div></a> 	
				</div><!-- he wrap -->
			</div><!-- end col-12 -->
			@endfor
        </div><!-- portfolio container -->
	 </div><!--/Portfoliowrap -->
</div>

<div id="carousel">    				
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>LINE, apa itu Line, line adalah garis -- Oki.</p>
				    	</blockquote>	
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>Banyak pengalaman berharga semenjak ikut program persiapan ujian dengan kakak kakak LINE.</p>
				    	</blockquote>
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Futsal terus, selain belajar. Agar hati dan pikiran selalu ter-refresh.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Pengajarnya gokil, apalagi yang bernama OKi</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Jadi lebih giat belajarnya</p>
				    	</blockquote>
				    </div>
				  </div>
				</div>
			</div>							
		</div>
	</div>
</div>

 <div id="daftar" class="portfoliowrap">
    <h3>ANDA BERMINAT</h3>
    <div class="container">
	    <div class="row">
	    	<div class="col-md-6 col-md-offset-3">
		    	<p> Silakan daftarkan diri anda :</p>
		    	<p> Hubungi :</p>
		    	<p> Jl. Sadang Luhur No. 12, Sekeloa, Coblong <br/>
	    		<strong> 085 795 348 055 (Yoga) </strong> 
	    		</p>
	    		<p> atau </p>
	    		<div>
	    			<button type="button" class="btn btn-theme btn-lg" data-toggle="modal" data-target="#myModal">DAFTAR</button>
	    		</div>
	    	</div>	
	    </div>
    </div>
 </div>

 <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hubungi</h4>
      </div>
      <div class="modal-body">
        <p><strong>Alamat Pusat</strong><br />
			Jalan Sadang Luhur No. 12, Sekeloa, Coblong,<br />
			Bandung 40134<br />
			Telepon : 085 795 348 055 ( Yoga )<br />
			Email : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a></p>

			<p><br />
			<strong>Cabang Sadang Sari</strong><br />
			Jalan Sadang Sari No.34 Sekeloa, Coblong, Kota Bandung 40134<br />
			Telepon : 082 360 147 534 ( Muharir )<br />
			Email : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a></p>

			<p><br />
			<strong>Cabang Cigadung</strong><br />
			Jalan Konstitusi No.02 PAV Cigadung, Cibeunying Kaler, Kota Bandung<br />
			Telepon : 085 385 433 190 ( Tama )<br />
			Email : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
@section('page-script')

<script type="text/javascript">
$(document).ready(function() {
	//SCrolling for Navbar
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 700) {
	        $('#navbar').addClass("navbar-putih");
	    } else {
	        $('#navbar').removeClass("navbar-putih");
	        }
	});       
	
	$('.test-popup-link').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
	});
});
</script>
@endsection

