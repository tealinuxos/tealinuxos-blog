@extends('enblogmaster')

@section('content')
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active">
            <div class="page-content">
                <!-- Your content goes here -->
                <section class="mdl-grid mdl-grid--no-spacing">
                    <div class="mdl-cell mdl-cell--12-col mdl-color-text-grey-700">
                        <div class="tealinux-white-space">
                            <div class="doc mdl-color-text--grey-700 mdl-card__supporting-text">
                                <h1><center>Let's Go</center></h1>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid mdl-cell--12-col tealinux-slogan mdl-typography--text-center">
                      <div class="mdl-cell mdl-cell--2-col mdl-cell--12-col-phone"></div>

                        <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone">
                            <span class="icon-rocket slogan-icon" aria-hidden="true"></span>
                            <a href="{{ url('/en/support/installation') }}">
                            <h4>Installation</h4>
                            </a>
                            <p class="mdl-typography--font-light"> Install TeaLinuxOS itu mudah, berikut langkah demi langkahnya</p>
                        </div>

                        <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone">
                            <span class="icon-globe-alt slogan-icon" aria-hidden="true"></span>
                            <a href="{{ url('en/support/guid') }}">
                            <h4>Getting Started</h4>
                                </a>
                            <p class="mdl-typography--font-light">Lihat cara menggunakan TeaLinuxOS beserta tips-tipsnya</p>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col mdl-cell--12-col-phone"></div>
                    </div>
                </section>
            </div>
        <br>
        <br>
        <br>
        <br>
@endsection
