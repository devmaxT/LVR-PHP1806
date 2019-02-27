@extends('frontend.base-layout')
@section('content')
<!-- About Section
================================================== -->
<section id="about">
   <div class="row">
      <div class="three columns">
         <img class="profile-pic"  src="images/profilepic.jpg" alt="" />
      </div>
      <div class="nine columns main-col">
         <h2>About Me</h2>
         <p>{{ $info->description }}</p>
         <div class="row">
            <div class="columns contact-details">
               <h2>Contact Details</h2>
               <p class="address">
					   <span>{{ $info->fullname }}</span><br>
					   <span>{{ $info->address }}</span><br>
					   <span>{{ $info->phone }}</span><br>
                  <span>{{ $info->email }}</span>
				   </p>
            </div>
            <div class="columns download">
               <p>
                  <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
               </p>
            </div>
         </div> <!-- end row -->
      </div> <!-- end .main-col -->
   </div>
</section> <!-- About Section End-->

@endsection
