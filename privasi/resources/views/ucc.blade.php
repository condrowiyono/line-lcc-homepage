@extends('template/t_index')
@section('judul') 
UCC
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
<div id="banner" style="background-image: url('{{asset('images/ucc/head.jpg')}}');"></div>
 
<div class="container mtb">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-0">
 			<h4>Sekilas Tentang UCC.</h4>
 			<img src="images/2.jpg">
 			<p>Universal Cultural Center atau UCC adalah anak organisasi dari LINE LCC, fokus utama dari UCC adalah untuk memperkenalkan keberagaman budaya yang ada di dunia. Juga menjadi alat bagi kita untuk menjadi seorang duta kebudayaan dunia yang selalu menjaga keseimbangan dan Perdamaian dunia. Saat ini, UCC bekerjasama dengan LINE-LCC, Masjid Salman ITB dan Rumah Zakat Salman menyelenggarakan Kelas Belajar Bahasa dan Budaya Turki</p> 		
		</div>
		<div class="col-lg-4">
 			<h4>POSTER UCC.</h4>
 			<p>Berikut adalah kegiatan UCC, yaitu Kursus Bahasa dan Kebudayaan Turki</p>
 			<a class="test-popup-link" href="images/ucc/poster.png"><img src="images/ucc/poster.png" style="max-width:100%"  /></a>
 		</div> 				
		<div class="col-lg-4">
 			<h4>Tentang Salman dan Rumah Amal.</h4>
 			<p>&quot Sebagai oase masyarakat kota. Begitu Masjid Salman ITB memposisikan diri. Oleh karena itu, Salman ingin menjelma sebagai pelipur dahaga di tengah hiruk-pikuk perkotaan&quot. -- <a href="http://salmanitb.com/home/tentang/sejarah-salman/">salmanitb.com</a></p><p>&quotRumah Amal Salman ITB (RASI) merupakan Lembaga Amil Zakat (LAZ) di bawah Yayasan Pembina Masjid (YPM) Salman ITB yang menghimpun, mengelola, dan menyalurkan dana zakat, infak, sedekah, dan wakaf (Ziskaf) dari donatur dan muzaki melalui program-program pemberdayaan sumber daya manusia, kesehatan, pendidikan, kesejahteraan, ekonomi, dan sosial.&quot --
 			<a href="http://salmanitb.com/home/bidang/rumah-amal/">salmanitb.com</a></p> 				
		</div>
	</div><!--/row -->
</div><!--/container -->


<div id="service">
<h3>TURKI</h3>
 	<div class="container">
			<div class="row centered">
				 <div class="col-md-3">
					<i class="fa fa-group"></i>
					<h4>CULTURE</h4>
					<p>Turki adalah simbol sejarah peradaban Islam, dan kaya akan kebudayaan </p>
				</div>
    				<div class="col-md-3">
					<i class="fa fa-money"></i>
					<h4>ECONOMY</h4>
					<p>Negara dengan ekonomi yang cukup mapan didunia</p>
				</div>
    				<div class="col-md-3">
					<i class="fa fa-cutlery"></i>
					<h4>FOOD</h4>
					<p>Makanan Turki enak, Kebab, Maklube, Dondurma, Pide, Kofte. Yummi</p>
				</div>
    				<div class="col-md-3">
					<i class="fa fa-globe"></i>
					<h4>TOUR DESTINATION</h4>
					<p>Sebagai penghubung Eropa dan Asia, Turki pastilah menjadi destinasi wisata favorit</p>
				</div>
   			
 		</div>
 	</div>
 </div>

 <div class="portfoliowrap">
    <h3>KEGIATAN</h3>

    <div class="portfolio-centered">
        <div class="recentitems portfolio">
			@for ($i=1;$i<=5;$i++)
	 		<div class="portfolio-item graphic-design">
				<div class="he-wrap tpl6">
					<a class="test-popup-link" href="images/ucc/kegiatan/{{$i}}.jpg"><div style="background: url('images/ucc/kegiatan/{{$i}}.jpg') repeat scroll center center / cover #aaa; padding-bottom:100%;"></div></a> 	
				</div><!-- he wrap -->
			</div><!-- end col-12 -->
			@endfor
        </div><!-- portfolio container -->
	 </div><!--/Portfoliowrap -->
</div>

<div id="service">
<h3>ORGANIZER</h3>
 	<div class="container">
		<div class="row centered">
			<img src="images/ucc/organizer.png" />
 		</div>
 	</div>
 </div>

<div class="portfoliowrap">
	<div class="container">
	    <div class="row">
	    	<div class="col-md-6 col-md-offset-3">
	    	<h3>JADWAL</h3>	
	    	<p><i class="fa fa-university"></i> Kompleks Masjid Salman ITB, Jalan Ganesha No.7</p>
	    	<p><i class="fa fa-calendar"></i> Setiap akhir pekan </p>
	    	<p><i class="fa fa-clock-o"></i> Pukul 16.30-17.30 WIB </p>
	    	</div>	
	    </div>
	</div>
</div>

<div id="daftar" class="portfoliowrap">
    <h3>TERTARIK</h3>
    <div class="container">
	    <div class="row">
	    	<div class="col-md-6 col-md-offset-3">
		    	<p> Silakan daftarkan diri anda :</p>
		    	<p> SMS Dengan format :</p>
		    		<span style="background-color:#bdc3c7;font-family:Courier New,Courier,monospace">Nama_Putra/Putri_no hp_Belajar Turki</span>
	    		<p> Kirim Ke </p>
	    			<strong> 085297005077 (Rizaldi) </strong> 
	    		</p>
	    		<p> . . . </p>
	    		<p> Biaya pendaftaran</p> 
	    		<p><strong>Rp. 10.000</strong> + 60.000 (modul + pengajaran bahasa selama 1 tahun) </p>
				<p>TEMPAT TERBATAS... </p>
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

