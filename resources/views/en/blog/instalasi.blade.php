@extends('enblogmaster')

@section('content')
    <main class="mdl-layout__content">

        <section class="mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-color-text-grey-700">
                <h1 class="mdl-color-text--grey  mdl-typography--text-center"><br/>Instalasi</h1>
                <div class="tealinux-white-space">

                    <div class="doc mdl-color-text--grey-700 mdl-card__supporting-text">
                        <h3 class="mdl-color-text--grey">Unduh Tealinux OS </h3>
                        <p>Unduh ISO <a href="{{url('http://pinguin.dinus.ac.id/iso/tealinuxos/')}}">Tealinux</a>,
                            kemudian cari tutorial install linux di youtube sendiri,digoogle juga udah banyak tutorial kok, tenang aja, :v</p>
                        <p>Tealinux dibuild dengan dua versi menurut dengan arsitektur prosesor, 32 bit dan 64 bit.</p>
                        <ul>
                            <li>Jika komputermu memiliki arsitektur prosesor 64 , silahkan pilih yang 64 bit</li>
                            <li>Jika komputermu jadul dan masih arsitektur 32 , silahkan pilih yang 32 bit </li>
                        </ul>
                        <h3 class="mdl-color-text--grey">Minimun  Requirement</h3>
                        <ul>
                            <li>Intel Core 2 Duo</li>
                            <li>RAM 2 GB</li>
                            <li>50 GB disk space</li>
                            <li>Akses Internet</li>
                        </ul>
                        <p>Sebelum melakukan instalasi diharapkan membackup data anda</p>
                        <br>
                        <h3 class="mdl-color-textb --grey mdl-typography--text-center">Pilih OS yang anda gunakan</h3>
                        <p>Bertujuan untuk membantu anda dalam melakukan instalasi Tealinux OS pada device anda :)</p>
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                            <div class="mdl-tabs__tab-bar">
                                <a href="#windows" class="mdl-tabs__tab is-active">Windows</a>
                                <a href="#linux" class="mdl-tabs__tab">Linux</a>
                            </div>

                            <div class="mdl-tabs__panel is-active" id="windows">
                                <h3 class="mdl-color-text--grey">Pembuatan Drive Install</h3>
                                <h4>Ada 2 langkah</h4>
                                    <ul>
                                        <li> Menggunakan DVD TealinuxOS </li>
                                        <li> Menggunakan Bootingan Flashdisk</li>
                                    </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="linux">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
