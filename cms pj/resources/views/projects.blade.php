@extends('layouts.app')
@section('content')
<!-- project section start -->
<div class="project_section layout_padding padding_top_90">
    <div class="container">
       <h1 class="project_taital">Latest Projects</h1>
       <div class="project_menu">
          <ul>
             <li class="active"><a href="#">All</a></li>
             <li><a href="#">Building</a></li>
             <li><a href="#">Commercial</a></li>
             <li><a href="#">Interior Design</a></li>
             <li><a href="#">Residential</a></li>
          </ul>
       </div>
    </div>
    <div class="project_section_2 layout_padding">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-3">
                <div><img src="{{ url('assets/images/img-3.png')}}" class="image_3"></div>
             </div>
             <div class="col-sm-3">
                <div><img src="{{ url('assets/images/img-4.png')}}" class="image_3"></div>
             </div>
             <div class="col-sm-3">
                <div><img src="{{ url('assets/images/img-5.png')}}" class="image_3"></div>
             </div>
             <div class="col-sm-3">
                <div><img src="{{ url('assets/images/img-6.png')}}" class="image_3"></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- project section end -->
 <!-- project section start -->
 <div class="project_section_3 layout_padding padding_bottom_90">
    <div class="container">
       <h1 class="project_taital">Our Features Projects</h1>
       <p class="philosophy_text">It is a long established fact that a reader will be distracted by the readable</p>
    </div>
    <div class="project_section_2 layout_padding">
       <div id="my_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-4.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-5.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-6.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-4.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-5.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-6.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="row">
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-4.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-5.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div>
                            <img src="{{ url('assets/images/img-6.png')}}" class="image_6">
                            <h4 class="reader_text">Reader will be <br>distracted by the readable</h4>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-left"></i>
          </a>
          <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right"></i>
          </a>
       </div>
    </div>
 </div>
 <!-- project section end -->

 @endsection
