@extends('masterdesktop')
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
        'url' => 'desktop/lapor',
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

                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text"  name="nama">
                            <label class="mdl-textfield__label" for="sample1">Nama</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="email" name="email">
                            <label class="mdl-textfield__label" for="sample1">Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="judul_bug">
                            <label class="mdl-textfield__label" for="sample1">Judul Bug</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="bug">
                            <label class="mdl-textfield__label" for="sample1">Bug</label>
                        </div>
                        <br>
                        Screenshot bugs :
                        {!! Form::file('foto', array('required' => 'true') ) !!}
                    </form>
                    <input type="submit" name='save' class="btn btn-success" value = "Tambahkan"/>

                </div>
            </div>
        </section>
    </div>
</main>
{!! Form::close() !!}
@endsection