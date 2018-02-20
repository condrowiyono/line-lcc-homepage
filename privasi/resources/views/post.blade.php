@extends('template/t_index')
@section('judul') 
{{$datas->post_judul}}
@endsection

@section('share-fb') 
  {{$datas->fb}}
@endsection
@section('share-tw') 
  {{$datas->twitter}}
@endsection
@section('share-line') 
  {{$datas->line}}
@endsection
@section('share-wa') 
  {{$datas->wa}}
@endsection

@section('isi')
  <!-- *****************************************************************************************************************
 BLOG CONTENT
 ***************************************************************************************************************** -->
<div class="container mtb">
  <div class="row">
      <div class="col-lg-8 col-md-offset-2" >
         <!-- Blog Post 1 -->
         <div class="judul">
               <h3 class="ctitle">{{$datas->post_judul}}</h3>
         </div>
          <div class="single-post">
            <span class="blog-date"><i class="fa fa-calendar"></i>   {{$datas->post_tanggal}} </span> |
            <span class="blog-date"> oleh {{$datas->post_pembuat}}</span>
          </div>
         <div class="spacer"></div>
         @if ($datas->post_poto=='')
         @else
          <div style="background: url('images/blog/{{$datas->post_poto}}') repeat scroll center center / cover #aaa; padding-bottom:50%;"></div>
         @endif
         <div class="post">
            {!!html_entity_decode($datas->post_isi)!!}
         </div>
         <div class="spacing"></div>
         <h6>SHARE:</h6>
         <p class="share">
            <a href="{{$datas->twitter}}"><i class="fa fa-twitter"></i></a>
            <a href="{{$datas->fb}}"><i class="fa fa-facebook"></i></a>
            <a href="{{$datas->line}}"><i class="fa fa-comment"></i></a>
            <a href="{{$datas->wa}}"><i class="fa fa-comment"></i></a>
                
         </p>
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
