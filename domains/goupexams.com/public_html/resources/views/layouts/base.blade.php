<!DOCTYPE html>
<!--
Template Name: Xanpon
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Go UP exams</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/Logo_3.jpg')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animatee.css')}}">



<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"
/>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="Content-Language" content="fa" />
<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="path-to-the-file/splide.min.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="{{asset('assets/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}">
<style>
    span.desh {
    color: black;
    background: white;
         font-size: 17px;
         border-radius: 3px;
    font-weight: bold;
}
</style>
@livewireStyles
</head>
<body id="top"  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="" >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper overlay row0">
  <div id="topbar" class="hoc clear">

    <div class="fl_left">
      <!-- ################################################################################################ -->
      <ul class="nospace">

        <a href="{{route('index')}}"> <img class="SRC_IMAGE"     src="{{asset('assets/Logo_3.jpg')}}"/></a>

      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right">
      <!-- ################################################################################################ -->
      <ul class="nospace">
          <form id="logout-form" method="POST" action="{{route('logout')}}" >
            @csrf
          </form>
        @if(Route::has('login'))
        @auth

        @if(Auth::user()->utype==='ADM')
        <div class="login_icon">
            <li><a href="#"  "><i ></i><span class="dashboard_name" >{{Auth::user()->name}}</span></a></li>
            <li><a href="{{route('admin.dashboard')}}"  ><i ></i><span>Dashboard</span></a></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"   ><i  class="fas fa-sign-in-alt" ></i><span>Logout</span></a></li>


        </div>
        @elseif (Auth::user()->utype==='TEC')
          <div class="login_icon">
            <li><a    href="{{route('teacher.dashboard',['teacher_id'=>Auth::user()->id])}}"  ><i ></i><span class="desh">Dashboard</span></a></li>
            <li><a  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  ><i  class="fas fa-sign-in-alt" ></i><span class="desh">Logout</span></a></li>

        </div>

        @elseif (Auth::user()->utype==='USR')
        <div class="login_icon">
            <li><a href="{{route('student.dashboard')}}"  ><i ></i><span class="desh">Dashboard</span></a></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Login"><i  class="fas fa-sign-in-alt" ></i><span class="desh">Logout</span></a></li>

        </div>
        @endif

        @else
        <div class="login_icon">
        <li><a href="{{route('login')}}"  "><i   class="fas fa-sign-in-alt" ></i><span class="desh">Login</span></a></li>
        </div>
        <div class="login_icon">
         <li><a href="{{route('register')}}"  ><i class="fas fa-edit"></i><span class="desh">Register</span></a></li>
        </div>
        @endif
        @endif

      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded"  >
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right">
        <!-- ################################################################################################ -->

        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  {{$slot}}
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" >
  <footer id="footer" class="hoc clear">
    <figure id="ctdetails">
      <ul class="nospace group">
        <li class="one_third first">
          <div class="clear"><a href="tel:01020508149"><i class="fas fa-phone"></i></a> <span><strong>اتصل بنا:</strong> 01020508149</span></div>
        </li>
        <li class="one_third">
          <div class="clear"><a href="mailto:goup20000@gmail.com"><i class="fas fa-envelope"></i></a> <span><strong  >Send us a mail:</strong> goup20000@gmail.com</span></div>
        </li>
        <li class="one_third">
            <div class="clear"><a href="https://www.facebook.com/goupexams"><i class="fab fa-facebook-f"></i></a> <span><strong>Facebook:</strong> Go UP Exams
            </span></div>
          </li>
      </ul>
    </figure>
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; SRC Company <a href="#">Manager Eng:george samy</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<!-- JAVASCRIPTS -->

</script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
              <script>
              new WOW().init();
              </script>
              @yield('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

@livewireScripts
</body>
</html>
