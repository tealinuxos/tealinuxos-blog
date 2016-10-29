@extends('enblogmaster')

@section('content')
    <main class="mdl-layout__content">
        <div class="tealinux-blog-content">


                <section class="section--center mdl-grid mdl-grid--no-spacing ">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h3><a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a></h3>
                        </div>
                        <div class="mdl-card__supporting-text">
                            {!! str_limit($post->body, $limit = 1000000000000) !!}
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
                            </a>
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"
                                    id="demo-menu-top-right">
                                <i class="material-icons">share</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="demo-menu-top-right ">
                                <li class="mdl-menu__item">Some Action</li>
                                <li class="mdl-menu__item">Another Action</li>
                                <li disabled class="mdl-menu__item">Disabled Action</li>
                                <li class="mdl-menu__item">Yet Another Action</li>
                            </ul>

                        </div>
                        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

                            <div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES * * */
                                var disqus_shortname = 'tealinuxos';

                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

                        </div>
                    </div>
                </section>

@endsection
