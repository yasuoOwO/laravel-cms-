@extends('layouts.app')

@section('content')
 <!-- contact section start -->
 <div class="contact_section layout_padding">
    <div class="container">
       <h1 class="contact_taital">Get In Touch</h1>
    </div>
    <div class="contact_section_2 layout_padding">
       <div class="container">
          <div class="mail_section">
             <div class="row">
                <div class="col-md-6">
                   <input type="" class="input_text" placeholder="Name" name="Name">
                </div>
                <div class="col-md-6">
                   <input type="" class="input_text" placeholder="Email" name="Email">
                </div>
             </div>
             <input type="" class="input_text" placeholder="Phone Number" name="Phone Number">
             <textarea name="comment" class="massage_box" form="usrform">Message</textarea>
             <div class="send_bt">
                <div class="send_text"><a href="#">SEND</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- contact section end -->

 @endsection
