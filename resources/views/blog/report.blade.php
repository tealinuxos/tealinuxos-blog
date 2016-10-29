@extends('blogmaster')

@section('header')
<style>
    .mdl-textfield{
        bottom: 20px;
        position: relative;
        font-size: 16px;
        display: inline-block;
        box-sizing: border-box;
        margin: 0px;
        padding: 20px 0px;

    }
    .width-nama-email{
        width: 175px;

    }
</style>

@endsection

@section('content')


    {!! Form::open(
    array(
        'url' => 'lapor',
        'class' => 'form',
        'class' => 'form-horizontal',
        'id' => 'form-konfirmasi',
        'files' => true)) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <main class="mdl-layout__content">
        <div class="tealinux-blog-content">
            <section class="section--center mdl-grid mdl-grid--no-spacing ">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__supporting-text">
                    <div class="mdl-cell mdl-cell--12-col mdl-color-text-grey-700">
                        <div class="tealinux-white-space">
                            <div class="doc mdl-color-text--grey-700 mdl-card__supporting-text">
                                <h2 class="mdl-typography--text-center">LAPOR BUG</h2>
                            </div>

                        </div>
                    </div>
                    <form >

                        <section class="mdl-grid  ">
                            <div class="mdl-layout__tab-bar mdl-js-ripple-effect tealinux-header" >

                                <div class="mdl-cell mdl-cell--4-col ">
                                    <div class="mdl-textfield width-nama-email mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="text"  name="nama">
                                        <label class="mdl-textfield__label" for="sample1">Nama</label>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--8-col ">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="judul_bug">
                                    <label class="mdl-textfield__label" for="sample1">Judul Bug</label>
                                </div>
                                </div>
                            </div>
                        </section>

                        <section class="mdl-grid ">
                            <div class="mdl-layout__tab-bar mdl-js-ripple-effect tealinux-header">

                                <div class="mdl-cell mdl-cell--4-col">
                                    <div class="mdl-textfield width-nama-email mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="email" name="email">
                                        <label class="mdl-textfield__label" for="sample1">Email</label>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--8-col ">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="text" name="bug">
                                        <label class="mdl-textfield__label" for="sample1">Bug</label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br><br><br>
                        Screenshoot bugs :
                        {!! Form::file('foto', array('required' => 'true') ) !!}
                    </form>
                    <input type="submit" name='save' class="btn btn-success" value = "Tambahkan"/>

                </div>
                </div>
            </section>
        </div>
    </main>
    {!! Form::close() !!}

    <main class="mdl-layout__content">
        <div class="tealinux-blog-content"><main class="mdl-layout__content">
                        <div class="tealinux-blog-content">
                            <section class="section--center mdl-grid mdl-grid--no-spacing ">
                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__supporting-text">

                                        @foreach($bug as $bugs)

                                            <section class="section--center mdl-grid mdl-grid--no-spacing ">
                                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                                    <div class="mdl-card__supporting-text">
                                                        <h4><a  href="{{ url('/lapor/'.$bugs->slug) }}"> {{ $bugs->judul_bug }}</a></h4>

                                                    </div>
                                                    @if(!Auth::guest() && (Auth::user()->is_admin()))
                                                        <form action="{{ url('/updatestatus/')}}" method="post">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                            <input type="hidden" name="id" value="{{ $bugs->id }}{{ old('id') }}">
                                                        <select name="status">
                                                            <option value="uncheck">Uncheck</option>
                                                                <option value="checked">Check</option>
                                                            <option value="fix">Fix</option>
                                                        </select>
                                                        <input type="submit" name='save' class="btn btn-success" value = "Tambahkan"/>
                                                        </form>
                                                    @endif
                                                    <p>{{$bugs->status}}</p>
                                                    <div class="mdl-card__actions mdl-card--border">
                                                        {!! str_limit($bugs->bug, $limit = 100, $end = '....... <a href='.url("/lapor/".$bugs->slug).'>Read More</a>') !!}
                                                    </div>
                                                    <p>{{ $bugs->created_at->format('M d,Y \a\t h:i a') }}</p>
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
