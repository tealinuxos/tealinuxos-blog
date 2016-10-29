@extends('blogmaster')

@section('content')

    <main class="mdl-layout__content">
        <div class="tealinux-toko-content">

            <div class="mdl-grid">
                <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop mdl-shadow--2dp">
                    <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-color--accent"><i class="material-icons mdl-color-text--white">shopping_cart</i></button>
                    <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                        <img src="{{asset('images/logo.png')}}">
                        Rp. 10.000
                    </div>
                    <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                        <div>
                            <strong>TeaLinuxOS kit</strong>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons">share</i>
                        </button>
                    </div>
                </div>
                <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop mdl-shadow--2dp">
                    <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-color--accent"><i class="material-icons mdl-color-text--white">shopping_cart</i></button>
                    <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                        <img src="{{asset('images/logo.png')}}">
                        Rp. 50.000
                    </div>
                    <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                        <div>
                            <strong>Mug TeaLinux</strong>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons">share</i>
                        </button>
                    </div>
                </div>
                <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop mdl-shadow--2dp">
                    <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-color--accent"><i class="material-icons mdl-color-text--white">shopping_cart</i></button>
                    <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
                        <img src="{{asset('images/logo.png')}}">
                        Rp. 100.000
                    </div>
                    <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
                        <div>
                            <strong>Kaos TeaLinuxOS</strong>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons">share</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

@endsection