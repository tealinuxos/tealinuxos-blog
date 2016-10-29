@extends('blogmaster')

@section('content')

    <main class="mdl-layout__content">
        <div class="tealinux-blog-content">
            <section class="section--center mdl-grid mdl-grid--no-spacing ">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table mdl-typography--text-center">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            @foreach($bugs as $bug)
                                <tbody>
                                <td>{{$bug->judul_bug}}</td>
                                <td>{{$bug->status}}</td>
                                <td>{{$bug->nama}}</td>
                                <td>{{$bug->email}}</td>
                                <td><a href="{{url('/delete/'.$bug->id)}}">Hapus</a>
                                    <a href="{{url('/bugedit/'.$bug->id)}}">Edit</a>
                                </td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>



@endsection