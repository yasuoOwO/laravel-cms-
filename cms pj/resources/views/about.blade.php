@extends('layouts.app')
@section('content')

<!-- about section start -->
<div class="about_section layout_padding margin_90">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-6">
             <div class="about_main">
                <div class="about_taital">About company</div>
                <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                <div class="about_bt"><a href="#">About More</a></div>
             </div>
          </div>
          <div class="col-md-6">
             <div class="about_img"><img src="{{ url('assets/images/about-img.png') }}"></div>
          </div>
       </div>
    </div>
 </div>
 <!-- about section end -->
@endsection
