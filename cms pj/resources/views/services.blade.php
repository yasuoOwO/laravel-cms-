@extends('layouts.app')
@section('content')
<!-- service section start -->
<div class="services_section layout_padding">
    <div class="container">
       <div class="services_taital">Our Services</div>
       <p class="services_text">It is a long established fact that a reader will be distracted by the readable</p>
    </div>
    <div class="services_section_2 layout_padding">
       <div class="container-fluid padding_0">
          <div class="box_main">
             <div class="box_left">
                <div class="box_left_main">
                   <div class="box_left_one">
                      <div class="image_1"><img src="{{ url('assets/images/img-1.png')}}"></div>
                   </div>
                   <div class="box_right_one">
                      <div class="icon_1"><img src="{{ url('assets/images/icon-1.pn')}}g"><span class="padding_left_10">architecture  Design</span></div>
                      <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                   </div>
                </div>
                <div class="see_bt"><a href="#">See More</a></div>
             </div>
             <div class="box_middle">
                <div class="box_left_main">
                   <div class="padding_10">
                      <div class="icon_1"><img src="{{ url('assets/images/icon-2.pn')}}g"><span class="padding_left_10">architecture  Design</span></div>
                      <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                   </div>
                </div>
                <div class="see_bt"><a href="#">See More</a></div>
             </div>
             <div class="box_right">
                <div class="box_left_main">
                   <div class="box_right_one">
                      <div class="icon_1"><img src="{{ url('assets/images/icon-3.pn')}}g"><span class="padding_left_10">architecture  Design</span></div>
                      <p class="long_text">It is a long established fact that a reader will be distracted by the </p>
                   </div>
                   <div class="box_left_one">
                      <div class="image_2"><img src="{{ url('assets/images/img-2.png')}}"></div>
                   </div>
                </div>
                <div class="see_bt"><a href="#">See More</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- service section end -->

 @endsection
