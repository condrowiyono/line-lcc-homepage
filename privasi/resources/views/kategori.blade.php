@extends('template/t_index')
@section('judul') 
Kategori
@endsection

@section('isi')
  <!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->
<div class="container mtb">
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2" >
         <div class="judul">
               <h3 class="ctitle">Kategori {{$datas[0]->kategori_nama}}</h3>
         </div>
         <div class="row">
            @foreach($datas as $data)
            <div class="col-md-6">
              <div style="background: url('images/blog/{{$data->post_poto}}') repeat scroll center center / cover #aaa; padding-bottom:60%;"></div>
              <a href="{{url('/',$data->post_slug)}}"><h4 class="ctitle">{{$data->post_judul}}</h4></a>
              <div class="single-post">
                <span class="blog-date"><i class="fa fa-calendar"></i>   {{$data->post_tanggal}} </span>
              </div>
              <p>{!!substr($data->post_isi,0,150)!!} ... </p>
              <a href="{{url('/',$data->post_slug)}}" class="btn btn-theme">Selengkapnya</a>
              <div class="spacer"></div>
            </div>
            @endforeach
            
            </div>
            {{ $datas->render() }}
         </div>
      </div>
      <!--/col-lg-8 -->
   </div>
   <!--/row -->
</div>
<!--/container -->
@endsection

@section('page-script')
<script type="text/javascript">
$(document).ready(function() {
  //SCrolling for Navbar
  $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
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
