<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
    integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

       <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
       <link rel="stylesheet" href="{{asset('front/css/style1.css')}}">
   <!-- custom CSS -->
   <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('front/css/hover-min.css')}}">
     <!-- custom font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
   <link rel=stylesheet href="{{asset('front/css/owl.theme.default.min.css')}}">



    <title>Real estate </title>




  </head>

  <body>
     <!-- top nav section -->
    <section id="top-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="lang">
                  <!-- lang -->
                </div>
          </div>
          <div class="col-md-4">
           <div class="social-media">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-whatsapp"></i>

           </div>

          </div>
          <div class="col-md-4">
              <div class="contact">

                  <p class="email"> example@gmail.com</p>

                  <i class="fas fa-envelope-square email "></i>
                  <p class="phone "> +0010010010
                    </p>
                    <i class="fas fa-phone-volume phone hvr-buzz"></i>
                </div>

            </div>
        </div>

      </div>
    </section>
     <!-- oradaniry nav section -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background-color: #491f25;">
        <a class="nav-logo " href="/test"><img src="{{asset('front/imgs/logo.png')}}" width="40"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

              <a class="nav-link " href="/test">الرئيسية   </a>
              <span class="test"></span>



            </li>
            
            <li class="nav-item">
              <a class="nav-link border-left" href="/test/products">المعرض</a>
            </li>
            
              <li class="nav-item">
                  <a class="nav-link border-left" href="/test/who-we-are">من نحن</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="/test/contact-us">اتصل بنا </a>
                  </li>
                

          </ul>
          
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(!auth('client')->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('test/login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('test/register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                                    <a class="nav-link border-left" href="/test/profile">{{auth('client')->user()->name}}
                                      <ul class="dropdown-menu">
                                        <li>
                                          1
                                        </li>
                                        <li>
                                          
                                        </li>
                                      </ul>
                                    </a>
                                    <div class="col-md-1">
                                    </div>
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                    <button class="btn login-btn shadow">خروج</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                        @endif
                    </ul>

          <span class="navbar-text">

          </span>
          
        </div>
      </nav>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">      
        <h1>  
             @yield('page_title')  
        </h1>
        <small> 
            @yield('small_title')
        </small>   
        
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">المقالات</a></li>
             <li class="breadcrumb-item active" aria-current="page">طريقه الوقاية من الامراض </li>
          </ol> -->
            <li class="active">
                  @yield('page_title') 
            </li>
        </ol>
    </section>

    <div id="app">

        @include('flash-message')


        @yield('content')

    
   
  </div>
  <!-- /.content-wrapper -->

  <footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        <ul class="footer-list">
          

        </ul>
        </div>
        

    </div>
  </div>

</footer>
<section id="last-footer">
<div class="container">
<div class="row">
<div class="col-md-4">
  <div class="social-media">
 <i class="fab fa-facebook-f hvr-float"></i>
    <i class="fab fa-instagram hvr-float"></i>
    <i class="fab fa-twitter hvr-float"></i>
    <i class="fab fa-whatsapp hvr-float"></i>

 </div>

</div>
<div class="col-md-8">
<p class="copys"> جميع الحقوق محفوظ ل <span id="website-name"> بنك الدم وابداع تك </span> &copy;2019 </p>

</div>

</div>
<p class="myname">Made with <i class="fas fa-heart"></i> by Mazen Anwar</p>
</div>


</section>

<!-- loader  -->
<section class="overlay">
  <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
  </div>
</section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow92.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>


    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="{{asset('adminlte/plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" {{asset('adminlte/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('adminlte/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminlte/plugins/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
 <!-- JavaScript Libraries -->
  <script src="{{asset('front/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('front/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('front/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('front/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('front/js/main.js')}}"></script>

  </body>
</html>
