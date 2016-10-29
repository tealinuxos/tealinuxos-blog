@extends('enblogmaster')
@section('header')
    <style>
        .isotope p{
            background: rgba(255, 255, 255, 0.5) none repeat scroll 0% 0%;
            -webkit-border-radius:5%;
            -moz-border-radius:5%;
            border-radius:5%;
        }
    </style>

@endsection
@section('content')
    <div class="tealinux-content mdl-layout__content">
        <div class="tealinux-download-section mdl-typography--text-center">
            <!-- <div class="tealinux-font">TeaLinuxOS</div>
            <div class="tealinux-font"></div> -->

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
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect sistem-btn"><a class="" href="">32 bit</a></button>
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect sistem-btn"><a class="" href="">64 bit</a></button>
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


            <div class="modal-overlay"></div>
            <!-- end modal download section -->

            <button class="unduh-btn open mdl-js-ripple-effect">
                Download
            </button>

        </div>

        <div class="tealinux-screen-section tealinux-white-space mdl-typography--text-center">

            <h3 class="mdl-typography--font-light">Operating System for Your Developing Environment</h3>

            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"></div>
              <div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-phone">
                <p class="mdl-typography--font-light ">
                    TeaLinuxOS is an operating system based on Ubuntu created for programming
                    purpose. Everything inside such as application, interface and configuration are
                    designed for developer activity. The main purpose to make learning
                    programming escpecially in education world easy.
                    TeaLinux, developed together by <a href="http://doscom.org" style="color:#2196F3;text-decoration: none;">Dinus Open Source Community (DOSCOM)</a> with tagline
                    "the joy of blend".
                </p>
              </div>
              <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"></div>
            </div>

            <span class="fine-line"></span>

            <div class="mdl-grid tealinux-slogan">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">
                    <span class="icon-umbrella slogan-icon" aria-hidden="true"></span>
                    <h4>Anteapiracy</h4>
                    <p class="mdl-typography--font-light">The opensource has come true, this is the time to revenge.</p>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">
                    <span class="icon-diamond slogan-icon" aria-hidden="true"></span>
                    <h4>High Qualitea</h4>
                    <p class="mdl-typography--font-light"> Starting from the support of all parties this operating system has experienced improvements to make it more stable and have a better quality.</p>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">
                    <span class="icon-globe-alt slogan-icon" aria-hidden="true"></span>
                    <h4>Communitea</h4>
                    <p class="mdl-typography--font-light">Huge support from the virtual and the real world communities and forums make this operating system developed quickly.</p>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">
                    <span class="icon-chemistry slogan-icon" aria-hidden="true"></span>
                    <h4>Nutriteaon</h4>
                    <p class="mdl-typography--font-light">The huge support and the availability of a full repository make this operating system full of nutrients
                        and you can get it for free in TeaLinuxOS,  you can give us a (credit) if you (find a joy in our products.)
                    </p>
                </div>
            </div>

        </div>
        <!-- Aplikasi tealinuxos -->
        <div class="tealinux-app-section brightness">
            <div class="tealinux-screen-section mdl-typography--text-center">
                <h3 class="">Aplikasi di TeaLinuxOS</h3>
                <br/>

                <div id="filters" class="button-group">
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter="*">show all</button>
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter=".multimedia">Multimedia</button>
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter=".graphic">Graphic</button>
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter=".programming">Programming</button>
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter=".office">Office</button>
                    <button class="mdl-button mdl-js-button mdl-navigation__link mdl-js-ripple-effect" data-filter=".internet">Internet</button>
                </div>


                <!-- <div class="mdl-grid"> -->
                <div class="isotope ">
                    <div class="element-item multimedia " data-category="multimedia">
                        <img src="{{asset ('/images/aplikasi/audacious.svg')}}">
                        <p class="name">Audacious</p>
                    </div>
                    <div class="element-item graphic " data-category="graphic">
                        <img src="{{asset ('/images/aplikasi/blender.svg')}}">
                        <p class="name">Blender</p>
                    </div>
                    <div class="element-item programming " data-category="programming">
                        <img src="{{asset('/images/aplikasi/bluefish.svg')}}">
                        <p class="name">bluefish</p>
                    </div>
                    <div class="element-item programming " data-category="programming">
                        <img src="{{asset('/images/aplikasi/brackets.svg')}}">
                        <p class="name">brackets</p>
                    </div>
                    <div class="element-item internet " data-category="internet">
                        <img src="{{asset('/images/aplikasi/chromium.svg')}}">
                        <p class="name">chromium</p>
                    </div>
                    <div class="element-item internet " data-category="internet">
                        <img src="{{asset('/images/aplikasi/firefox.svg')}}">
                        <p class="name">firefox</p>
                    </div>
                    <div class="element-item internet " data-category="internet">
                        <img src="{{asset('/images/aplikasi/google-chrome.svg')}}">
                        <p class="name">google chrome</p>
                    </div>
                    <div class="element-item graphic " data-category="graphic">
                        <img src="{{asset('/images/aplikasi/inkscape.svg')}}">
                        <p class="name">inkscape</p>
                    </div>
                    <div class="element-item office" data-category="office">
                        <img src="{{asset('/images/aplikasi/libreoffice-writer.svg')}}">
                        <p class="name">Libre Office Writter</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- end of Aplikasi tealinuxos -->
        <div class="tealinux-footer mdl-mega-footer">
            <div class="mdl-mega-footer--middle-section text-center">

                <h4 class="mdl-typography--font-light">
                    Dapatkan TeaLinuxOS dengan geratis, namun jika anda menyukai kami, anda dapat traktir kami
                    <span class=" icon-emoticon-smile" aria-hidden="true"></span>
                </h4>
                <button id="btn-donate" class="mdl-button mdl-js-button mdl-js-ripple-effect sistem-btn"><a class="" href="https://www.bountysource.com/teams/tealinuxos"> Donasi </a></button>
            </div>
        </div>

@endsection
