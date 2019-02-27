@extends('frontend.base-layout')
@section('content')

   <!-- Resume Section
   ================================================== -->
<section id="resume">
  <!-- Education
  ----------------------------------------------- -->
  <div class="row education">
     <div class="three columns header-col">
        <h1><span>Education</span></h1>
     </div>
     <div class="nine columns main-col">
        <div class="row item">
           <div class="twelve columns">
              <h3>University of Life</h3>
              <p class="info">Master in Graphic Design <span>&bull;</span> <em class="date">April 2007</em></p>
              <p>
              
              </p>

           </div>
        </div> <!-- item end -->
        <div class="row item">
           <div class="twelve columns">
              <h3>School of Cool Designers</h3>
              <p class="info">B.A. Degree in Graphic Design <span>&bull;</span> <em class="date">March 2003</em></p>
              <p>
              
              </p>
           </div>
        </div> <!-- item end -->
     </div> <!-- main-col end -->
  </div> <!-- End Education -->

  <!-- Work
  ----------------------------------------------- -->
  <div class="row work">
     <div class="three columns header-col">
        <h1><span>Work</span></h1>
     </div>
     <div class="nine columns main-col">
        <div class="row item">
           <div class="twelve columns">
              <h3>Awesome Design Studio</h3>
              <p class="info">Senior UX Designer <span>&bull;</span> <em class="date">March 2010 - Present</em></p>
              <p>
              
              </p>

           </div>
        </div> <!-- item end -->
        <div class="row item">
           <div class="twelve columns">
              <h3>Super Cool Studio</h3>
              <p class="info">UX Designer <span>&bull;</span> <em class="date">March 2007 - February 2010</em></p>
              <p>
              
              </p>
           </div>
        </div> <!-- item end -->
     </div> <!-- main-col end -->
  </div> <!-- End Work -->


  <!-- Skills
  ----------------------------------------------- -->
  <div class="row skill">
     <div class="three columns header-col">
        <h1><span>Skills</span></h1>
     </div>
     <div class="nine columns main-col">
        <p>
        </p>
			<div class="bars">
			   <ul class="skills">
				   <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
              <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
					<li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
					<li><span class="bar-expand css"></span><em>CSS</em></li>
					<li><span class="bar-expand html5"></span><em>HTML5</em></li>
              <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
				</ul>
			</div><!-- end skill-bars -->
		</div> <!-- main-col end -->
  </div> <!-- End skills -->
</section> <!-- Resume Section End-->

@endsection