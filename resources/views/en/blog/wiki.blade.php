@extends('enblogmaster')

@section('content')
    <main class="mdl-layout__content">

        <section class="mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-color-text-grey-700">
                <h1 class="mdl-color-text--grey  mdl-typography--text-center"><br/>WIKI</h1>

            </div>
        </section>
        <section class="mdl-grid mdl-grid--no-spacing mdl-typography--text-center ">
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect tealinux-header">
            <div class="mdl-cell mdl-cell--1-col "></div>
            <div class="mdl-cell mdl-cell--2-col mdl-typography--text-center">
                <!-- Raised button with ripple -->
                <a href="#design" class="mdl-navigation__link mdl-layout__tab ">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Design
                </button>
                </a>
            </div>
                <div class="mdl-cell mdl-cell--2-col mdl-typography--text-center">
                    <!-- Raised button with ripple -->
                    <a href="#pemaket" class="mdl-navigation__link mdl-layout__tab ">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Pemaket
                        </button>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-typography--text-center">
                    <!-- Raised button with ripple -->
                    <a href="#riset" class="mdl-navigation__link mdl-layout__tab ">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Riset
                        </button>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-typography--text-center">
                    <!-- Raised button with ripple -->
                    <a href="#dokumentasi" class="mdl-navigation__link mdl-layout__tab ">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Dokumentasi
                        </button>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-typography--text-center">
                    <!-- Raised button with ripple -->
                    <a href="#proyek" class="mdl-navigation__link mdl-layout__tab ">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Proyek
                        </button>
                    </a>
                </div>
            <div class="mdl-cell mdl-cell--1-col "></div>
           </div>
        </section>
    </main>
    <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="design">
            <div class="page-content">Design</div>
        </section>
        <section class="mdl-layout__tab-panel is-active" id="pemaket">
            <div class="page-content">pemaket</div>
        </section>
        <section class="mdl-layout__tab-panel is-active" id="riset">
            <div class="page-content">riset</div>
        </section>
        <section class="mdl-layout__tab-panel is-active" id="dokumentasi">
            <div class="page-content">dokumentasi</div>
        </section>
        <section class="mdl-layout__tab-panel is-active" id="proyek">
            <div class="page-content">proyek</div>
        </section>
    </main>

@endsection