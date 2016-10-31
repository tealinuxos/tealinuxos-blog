@extends('enblogmaster')

@section('content')
    <form action="{{ url('/bugupdate/')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="id" value="{{ $bug->id }}{{ old('id') }}">
        <main class="mdl-layout__content">
            <div class="tealinux-blog-content">
                <section class="section--center mdl-grid mdl-grid--no-spacing ">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__supporting-text">
                            <div class="mdl-cell mdl-cell--12-col mdl-color-text-grey-700">
                                <div class="tealinux-white-space">
                                    <div class="doc mdl-color-text--grey-700 mdl-card__supporting-text">
                                        <h2 class="mdl-typography--text-center">BUG REPORT</h2>
                                    </div>

                                </div>
                            </div>
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text"  name="nama" value="@if(!old('nama')){{$bug->nama}}@endif{{ old('bug') }}">
                                    <label class="mdl-textfield__label" for="sample1">Name</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="email" name="email" value="@if(!old('email')){{$bug->email}}@endif{{ old('bug') }}">
                                    <label class="mdl-textfield__label" for="sample1">Email</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="judul_bug" value="@if(!old('judul_bug')){{$bug->judul_bug}}@endif{{ old('bug') }}">
                                    <label class="mdl-textfield__label" for="sample1">Bug Title</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="bug"value="@if(!old('bug')){{$bug->bug}}@endif{{ old('bug') }}">
                                    <label class="mdl-textfield__label" for="sample1">Bug</label>
                                </div>
                            </form>
                            <input type="submit" name='save'  value = "Perbarui"/>
                            <a href="{{ url('/delete/'.$bug->id) }}"  >Delete</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </form>

@endsection
