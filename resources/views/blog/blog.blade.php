@extends('blogmaster')

@section('content')
    <main class="mdl-layout__content">

        <div class="tealinux-blog-content">
            @foreach($posts as $post)
                <section class="section--center mdl-grid mdl-grid--no-spacing ">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h3><a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a></h3>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {!! str_limit($post->body, $limit = 500, $end = '....... <a href='.url("/blog/".$post->slug).'>Read More</a>') !!}
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
                            </a>
                        </div>
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
@endsection
