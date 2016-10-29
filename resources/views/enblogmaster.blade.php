<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <meta name="google-site-verification" content="uG3K0vAp7LeugfGPLsAzO78h7dn_4MPgBTuRi-293GI" />

    {!! SEO::generate() !!}

    <link rel="shortcut icon" href="{{asset ('images/tealinuxos.png')}}" />
    <!-- Page styles -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Lato:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en')}}" rel="stylesheet">
    <link href="{{url ('http://fonts.googleapis.com/css?family=Open+Sans')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('blog-css/material.min.css')}}">
    <link rel="stylesheet" href="{{asset ('blog-css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('blog-css/styles.css')}}">
    <link rel="stylesheet" href="{{asset ('css/card.css')}}">
    <link rel="stylesheet" href="{{url ('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
    @yield('header')
</head>

<body class="ng-scope" ng-app="tealinuxApp">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header tealinux-header">
                <div class="mdl-layout__header-row">
              <span class="tealinux-title mdl-layout-title">
                <a href="{{ url('en/') }}" ><img class="tealinux-logo-image" src="{{asset ('images/tealinuxos.png')}}">
                <span class="tealinux-page-title mdl-typography--text-uppercase">tealinuxos</span></a>
              </span>

                    <!-- Add spacer, to align navigation to the right in desktop -->
                    <div class="tealinux-header-spacer mdl-layout-spacer"></div>

                    <!-- Navigation -->
                    <div class="tealinux-navigation-container">
                        <nav class="tealinux-navigation mdl-navigation">
                            <a class="mdl-navigation__link mdl-typography--text-uppercase mdl-js-ripple-effect" href="{{url ('en/')}}">Home</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{url ('en/support')}}">Support</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{url ('en/contribution')}}">Contribution</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{url ('en/blog')}}">Blog</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{url ('en/report')}}">Report</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase open " style="cursor:pointer;">Download</a>
                            <!-- Right aligned menu below button -->
                            <button id="demo-menu-lower-right"
                                    class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="material-icons">more_vert</i>
                            </button>

                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right">
                                <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase mdl-js-ripple-effect" href="{{url ('/')}}">Indonesia</a></li>
                                <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase mdl-js-ripple-effect" href="{{url ('en/')}}">English</a></li>

                            </ul>
                        </nav>
                    </div>

                    <button class="tealinux-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-cell--hide-desktop" id="more-button">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link" href="{{url ('en/')}}">Home</a> </li>
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link" href="{{url ('en/support')}}">Support</a> </li>
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link" href="{{url ('en/contributin')}}">Contribution</a> </li>
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link" href="{{url ('en/blog')}}">Blog</a> </li>
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link" href="{{url ('en/report')}}">report</a> </li>
                        <li class="mdl-menu__item"> <a class="mdl-navigation__link open " style="cursor:pointer;">Download</a> </li>
                    </ul>
                  <span class="tealinux-mobile-title mdl-layout-title">
                    <img class="tealinux-logo-image" src="{{asset('images/tealinuxos.png')}}">
                  </span>
                    <!-- end of Navigation -->

                </div>
            </header>


        @yield('content')
                <!-- Modal download -->
            <div class="modal-frame">
                <div class="modal">
                    <div class="modal-inset">
                        <div class="pull-right">
                            <div class="button close">
                                <i class="material-icons">close</i>
                            </div>
                        </div>

                        <div class="modal-body">
                            <h3>TeaLinuxOS 8 "Peppermint"</h3>

                            <!-- <p>Unduh TeaLinuxOS versi 7 "Rosella"</p> -->
                            <p>Silahkan pilih arsitektur sistem komputer anda</p>
                            <a class="" href="http://pinguin.dinus.ac.id/iso/tealinuxos/TeaLinuxOS-8.0-i386.iso"><button class="mdl-button mdl-js-button mdl-js-ripple-effect sistem-btn">32 bit</button></a>
                            <a class="" href="http://pinguin.dinus.ac.id/iso/tealinuxos/TeaLinuxOS-8.0-amd64.iso"><button class="mdl-button mdl-js-button mdl-js-ripple-effect sistem-btn">64 bit</button></a>
                            <a target="blank" href="http://pinguin.dinus.ac.id/iso/tealinuxos/"><p class="ps">**untuk mengunduh versi lain</p></a>
                            <p>Share</p>
                            <button class="ico-social mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <span class="ico-facebook"></span>
                            </button>
                            <button class="ico-social mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <span class="ico-twitter"></span>
                            </button>
                            <button class="ico-social mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <span class="ico-gplus"></span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end of Modal download -->


        <!-- Footer -->
        <div class="mdl-mega-footer tealinux-footer-down text-center">
            <div class="mdl-mega-footer--top-section">
                <div class="mdl-mega-footer--left-section">
                    <span class="bold">Copyright &copy; TeaLinuxOS Developer</span>
                </div>
                <div class="mdl-mega-footer--right-section">

                    <button id="btn-fb" href="http://tealinuxos.org" class="ico-social mdl-button mdl-js-button mdl-button--icon">
                        <span class="ico-facebook-blank"></span>
                    </button>
                    &nbsp;
                    <button id="btn-twitter" class="ico-social mdl-button mdl-js-button mdl-button--icon">
                        <span class="ico-twitter-blank"></span>
                    </button>
                    &nbsp;
                    <button id="btn-github" class="ico-social mdl-button mdl-js-button mdl-button--icon">
                        <span class="ico-github-blank"></span>
                    </button>
                    &nbsp;
                    <button id="btn-mail" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">mail</i>
                    </button>
                    &nbsp;
                    <button id="btn-bug-report" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">bug_report</i>
                    </button>
                </div>
            </div>
        </div>

        <!-- end of Footer -->


             <script src=" {{asset('/js/vendor/jquery-2.1.1.min.js')}}"></script>
             <script src="{{asset('/js/vendor/material.min.js')}}"></script>
                <!-- // <script src="http://isotope.metafizzy.co/beta/isotope.pkgd.js"></script> -->
             <script src="{{asset('/js/vendor/isotope.js')}}"></script>
             <script src="{{asset ('/js/plugin.js')}}"></script>
            <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
          </div>

@yield('footer')
</body>
<script>
// Donate button
  $('#btn-donate').on('click', function(){
      window.location.href = "https://www.bountysource.com/teams/tealinuxos";
  });
  // Social Button
  $('#btn-fb').on('click', function(){
      window.location.href = "https://www.facebook.com/tealinuxos";
  });
  $('#btn-twitter').on('click', function(){
      window.location.href = "https://twitter.com/tealinuxos";
  });
  $('#btn-github').on('click', function(){
      window.location.href = "http://github.com/tealinuxos";
  });
  $('#btn-email').on('click', function(){
      window.location.href = "mailto:sekretartiat@doscom.org";
  });
  $('#btn-bug-report').on('click', function(){
      window.location.href = "http://tealinuxos.org/lapor";
  });
</script>
</html>
