<!-- Header ================================================== -->
<header id="home">
   <nav id="nav-wrap">
      <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
      <ul id="nav" class="nav">
         <li class="current"><a  href="{{ route('frontend.profile') }}">@lang('mylang.home')</a></li>
         <li><a  href="{{ route('frontend.resume') }}">@lang('mylang.resume')</a></li>
         <li><a class="smoothscroll" href="#">@lang('mylang.work')</a></li>
         <li><a class="smoothscroll" href="#">@lang('mylang.testimonials')</a></li>
         <li><a class="smoothscroll" href="#">@lang('mylang.contact')</a></li>
         <li><a href="" title="">|</a></li>
         <li><a href="{{ route('switchLang',['lang'=>'vi']) }}" title="">Vietnamese</a></li>
         <li><a href="{{ route('switchLang',['lang'=>'en']) }}" title="">English</a></li>
      </ul> <!-- end #nav -->
   </nav> <!-- end #nav-wrap -->
   <div class="row banner">
      <div class="banner-text">
         <h1 class="responsive-headline">{{ $info->fullname }}</h1>
         <h3>{{ $info->nickname }}</h3>
         <hr />
         <ul class="social">
            <li><a href="https://www.facebook.com/tuanthanh.tran1211"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
         </ul>
      </div>
   </div>
   <p class="scrolldown">
      <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
   </p>
</header> <!-- Header End -->