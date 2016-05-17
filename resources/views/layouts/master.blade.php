<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Lilu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.ico">
  {!! HTML::style('assets/css/bootstrap.min.css') !!}
  {!! HTML::style('assets/css/vendor.css') !!}
  {!! HTML::style('assets/css/style.css') !!}
  {!! HTML::style('fontello/css/fontello.css') !!}
  {!! HTML::style('assets/css/demo.css') !!}
  {!! HTML::style('assets/css/custom.css') !!}


  <!--[if lte IE 9]><!-->
  {!! HTML::script('assets/js/vendor/html5shiv.min.js') !!}
  <!--<![endif]-->
</head>
<body>

  <div class="site">
    <div class="site-loader">
      <div class="site-loader-spinner"></div>
    </div> <!-- .site-loader -->



    <div class="site-canvas">
      <header class="site-header">
        <nav class="navbar navbar-theme">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand-wrap">
                <a class="navbar-brand" href="#">
                  <img src="assets/img/site-header-logo.png" alt="">
                </a>
              </div>
            </div> <!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home">Inicio</a></li>
                <li><a href="#about">¿Qué ofrecemos?</a></li>
                <li><a href="#brief_1">El Equipo</a></li>
{{--                 <li><a href="#pricing">Pricing</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#contact">Contact</a></li> --}}
                <li class="audio-toggle"><a href="#"><i class="fa fa-volume-up"></i></a></li>
              </ul>
            </div> <!-- .navbar-collapse -->
          </div>
        </nav>
      </header> <!-- .site-header -->
      <main class="site-main">
        <div id="home" class="section block-primary position-r align-c-xs-max">
          <div id="particles-js" class="site-bg">
            <div class="site-bg-img"></div>
            <div class="site-bg-video"></div>
            <div class="site-bg-overlay"></div>
            <div class="site-bg-effect layer" data-depth=".30"></div>
            <canvas class="site-bg-canvas layer" data-depth=".30"></canvas>
          </div> <!-- .site-bg -->

          <div class="container">
            <div class="row row-table">
              <div class="col-sm-12">
                <div class="col-inner" data-sr="left">
                  <div class="section-heading text-center">
                    <h5>Desarrollo versátil para el mundo del mañana</h5>
                    <h1>En este sitio podrá conocer información del equipo de trabajo interesado en prestar todo el soporte que requiera en sus proyectos web, para este caso específico el proyecto de lilucuracao.com</h1>
                    
                  </div> <!-- .section-heading -->

                </div>
              </div>
{{--               <div class="col-sm-6 col-md-p-l-1 m-t-60-xs-max">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="assets/img/item/home.png" alt="" data-sr="right">
                </div>
              </div> --}}
            </div>
          </div>
        </div> <!-- #home -->

        <div id="about" class="section p-a-0 align-c">
          <div class="container-fluid p-x-0">
            <div class="row row-table">
              <div class="col-sm-4 block-invert p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/rocket.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Desarrollo Escalable</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-pink p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/mobile.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Mobile First</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-light p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/diamond.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>About App / Product</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

          {{--  --}}
          <div class="container-fluid p-x-0">
            <div class="row row-table">

              <div class="col-sm-4 block-light p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/diamond.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>About App / Product</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-invert p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/rocket.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Desarrollo Escalable</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 block-pink p-x-30-sm-max p-x-60-md-min p-t-20-sm-min align-t-sm-min">
                <div class="col-inner p-y-50-sm-min p-y-30-xs-max max-width m-x-auto-xs-max">
                  <div class="icon-box _center">
                    <div class="icon-box-media">
                      <img src="assets/img/icon/mobile.png" alt="" data-sr="bottom">
                    </div>
                    <div class="icon-box-heading">
                      <h3>Mobile First</h3>
                    </div>
                    <div class="icon-box-content">
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          {{--  --}}
        </div> <!-- #about -->

        <div id="brief_1" class="section block-default align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading text-center">
                    <img src="http://dummyimage.com/140x140/4d494d/686a82.gif&text=placeholder+image" class="img-circle" alt="placeholder+image"><br>
                    <h3>Ernesto Suarez</h3>
                    <i class="icon-twitter-2"></i>
                    <i class="icon-linkedin"></i>
                    
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                    <br>
                   
                  </div> <!-- .section-heading -->
                   <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90% Complete</span></div>
                      <span class="progress-type">PHP</span>           
                    </div>

                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span class="sr-only">95% Complete</span></div>
                      <span class="progress-type">HTML/CSS</span>           
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80% Complete</span></div>
                      <span class="progress-type">Angular</span>           
                    </div>

           
                </div>
              </div>

      <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading text-center">
                    <img src="http://dummyimage.com/140x140/4d494d/686a82.gif&text=placeholder+image" class="img-circle" alt="placeholder+image"><br>
                    <h3>Carlos Moran</h3>
                    <i class="icon-twitter-2"></i>
                    <i class="icon-linkedin"></i>
                    
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                    <br>
                   
                  </div> <!-- .section-heading -->
                   <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90% Complete</span></div>
                      <span class="progress-type">PHP</span>           
                    </div>

                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span class="sr-only">95% Complete</span></div>
                      <span class="progress-type">HTML/CSS</span>           
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80% Complete</span></div>
                      <span class="progress-type">Angular</span>           
                    </div>

           
                </div>
              </div>

            </div>
          </div>
        </div> <!-- #brief_1 -->

        <div id="brief_2" class="section block-warning align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6 m-b-60-xs-max p-r-60-md-min">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-l-sm-min m-x-auto-xs-max" src="assets/img/item/brief-2.png" alt="" data-sr="left">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>Flat Style Landing Page</h5>
                    <h2>App Brief Section #2</h2>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in scelerisque nisi, a convallis nibh. Etiam posuere faucibus lectus, quis volutpat urna consequat et. Aenean rutrum dui in turpis feugiat, at facilisis dui laoreet.</p>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                    <a class="btn btn-success m-y-5" href="#brief_3">Learn More</a>
                    <a class="btn btn-pink m-y-5" href="#brief_3">More Button</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #brief_2 -->

        <div id="brief_3" class="section block-success align-c-xs-max">
          <div class="container">
            <div class="row row-table">
              <div class="col-sm-6">
                <div class="col-inner">
                  <div class="section-heading">
                    <h5>Flat Style Landing Page</h5>
                    <h2>App Brief Section #3</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                  </div> <!-- .section-heading -->
                  <div class="section-content">
                    <ul class="icon-list align-l m-t-30">
                      <li><img src="assets/img/icon/camera.png" alt=""> Quisque sapien metus, ornare ac suscipit eget.</li>
                      <li><img src="assets/img/icon/support.png" alt=""> Quisque sapien metus, ornare ac suscipit eget.</li>
                      <li><img src="assets/img/icon/paint.png" alt=""> Quisque sapien metus, ornare ac suscipit eget.</li>
                    </ul>
                    <a class="btn btn-primary m-y-5" href="#pricing">Our Plan</a>
                    <a class="btn btn-invert m-y-5" href="#pricing">More Button</a>
                  </div> <!-- .section-content -->
                </div>
              </div>
              <div class="col-sm-6 m-t-60-xs-max p-l-60-md-min">
                <div class="col-inner clearfix">
                  <img class="img-responsive float-r-sm-min m-x-auto-xs-max" src="assets/img/item/brief-3.png" alt="" data-sr="right">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- #brief_3 -->

      </main> <!-- .site-main -->
      
    </div>
  </div>

  <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/plugin.js'></script>
  <script src='assets/js/variable.js'></script>
  <script src='assets/js/map.js'></script>
  <script src='assets/js/main.js'></script>
  <script src='assets/js/demo.js'></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <!--
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>
-->

</body>

</html>