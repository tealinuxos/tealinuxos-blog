@extends('masterdesktop')

@section('content')

<main class="mdl-layout__content">
    <div class="tealinux-blog-content"><main class="mdl-layout__content">
            <div class="tealinux-blog-content">
                <section class="section--center mdl-grid mdl-grid--no-spacing ">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__supporting-text">

                            @foreach($bugs as $bug)

                                <section class="section--center mdl-grid mdl-grid--no-spacing ">
                                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                        <div class="mdl-card__supporting-text">
                                            <h4><a  href="{{ url('/desktop/list/'.$bug->slug) }}"> {{ $bug->judul_bug }}</a></h4>

                                        </div>
                                        <p>{{$bug->status}}</p>
                                        <div class="mdl-card__actions mdl-card--border">
                                            {!! str_limit($bug->bug, $limit = 100, $end = '....... <a href='.url("/dekstop/list/".$bug->slug).'>Read More</a>') !!}
                                        </div>
                                        <p>{{ $bug->created_at->format('M d,Y \a\t h:i a') }}</p>
                                        <div class="mdl-card__menu">
                                            <button id="demo-menu-top-right" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="material-icons">more_vert</i>
                                            </button>

                                            <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect"
                                                data-mdl-for="demo-menu-top-right ">
                                                <li class="mdl-menu__item">Some Action</li>
                                                <li class="mdl-menu__item">Another Action</li>
                                                <li disabled class="mdl-menu__item">Disabled Action</li>
                                                <li class="mdl-menu__item">Yet Another Action</li>
                                            </ul>

                                        </div>
                                    </div>
                                </section>

                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
    </div>
</main>
@endsection