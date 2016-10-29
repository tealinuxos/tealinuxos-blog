@extends('blogmaster')

@section('content')
        <main class="mdl-layout__content"><section class="mdl-layout__tab-panel is-active">
                <section class="" id="developer">
                    <div class="page-content">
                        <!-- Your content goes here -->
                        <section class="mdl-grid mdl-grid--no-spacing">
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-color-text-grey-700">
                                <div class="tealinux-kontribusi-content tealinux-white-space">
                                    <div class="doc gabung-section text-center">
                                        <h3 class="mdl-typography--font-light">bergabung menjadi salah satu pengembang TealinuxOS </h3>
                                        <br/>
                                        <p>Kami butuh kamu. Jadilah bagian dari developer-developer TeaLinuxOS untuk berkontribusi dan terlibat melakukan perubahan pada pengembangan TeaLinuxOS.</p>
                                        <span class="breathe"></span>
                                    </div>
                                    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                                        <div class="mdl-tabs__tab-bar">
                                            <a href="#desain" class="mdl-tabs__tab is-active">desain</a>
                                            <a href="#riset" class="mdl-tabs__tab">riset</a>
                                            <a href="#package" class="mdl-tabs__tab">pemaketan</a>
                                            <a href="#dokumentasi" class="mdl-tabs__tab">dokumentasi</a>
                                        </div>

                                        <div class="mdl-tabs__panel is-active" id="desain">
                                            <p>Desain tidak hanya tampilan visual (UI) untuk TeaLinuxOS namun juga cara menggnakan TeaLinuxOS (UX) dan TeaLinuxOS itu sendiri (branding). Terlibat dalam tim desain membuatmu dapat melakukan perubaan dalam TeaLinuxOS. Design TeaLinuxOS mengusung tema "simple and elegant" dimana segala pengguna dapat dengan mudah menggunakan TeaLinuxOS secara efektif, namun tetap memliki tampilan yang bagus. </p>

                                            <br/>
                                            <p>Tugas-tugas tim design antara lain:</p>
                                            <ul>
                                                <li>Menentukan tema antarmuka TeaLinuxOS (warna, font, icon dll)</li>
                                                <li>Menentukan guideline design</li>
                                                <li>Melakukan penelitian pengguna (user research)</li>
                                            </ul>
                                        </div>
                                        <div class="mdl-tabs__panel" id="riset">
                                            <p>Informasi-infomasi tentang aplikasi-aplikasi maupun paket-paket terbaru yang dikumpulkan oleh tim riset menjadi kunci kualitas dari TeaLinuxOS. </p>

                                            <br/>
                                            <p>Tugas-tugas tim riset antara lain:</p>
                                            <ul>
                                                <li>Membuat kuesioner pengguna</li>
                                                <li>Menentukan core tealinuxos</li>
                                                <li>Menetukan aplikasi-aplikasi ataupun paket-paket yang akan dimasukkan dalam TeaLinuxOS</li>
                                                <li>Mengembangkan software TeaLinuxOS</li>
                                            </ul>
                                        </div>
                                        <div class="mdl-tabs__panel" id="package">
                                            <p>Memadukan, mengelola, dan memelihara paket-paket yang ada pada TeaLinuxOS, baik paket impor, khas, maupun paket mentah merupakan tanggung jawab tim pemaket.</p>

                                            <br/>
                                            <p>Tugas-tugas tim pemaket antara lain:</p>
                                            <ul>
                                                <li>Meremaster TeaLinuxOS</li>
                                            </ul>
                                        </div>
                                        <div class="mdl-tabs__panel" id="dokumentasi">
                                            <p>Tanpa dokumentasi yang baik, TeaLinuxOS akan susah sekali diperlihara. TeaLinuxOS memilki dokumentasi pengguna dan dokumentasi developer untuk memudahkan keduanya, baik untuk menggunakan dan mengembangkan TeaLinuxOS.</p>

                                            <br/>
                                            <p>Tugas-tugas tim dokumentasi antara lain:</p>
                                            <ul>
                                                <li>Menulis dokumentasi pengguna</li>
                                                <li>Menulis dokumentasi developer</li>
                                                <li>Mengisi konten blog TeaLinuxOS</li>
                                                <li>Mendokumentasikan proses maupun hasil kerja tim lain</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#starks-panel" class="mdl-tabs__tab is-active">Starks</a>
                <a href="#lannisters-panel" class="mdl-tabs__tab">Lannisters</a>
                <a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a>
            </div>

            <div class="mdl-tabs__panel is-active" id="starks-panel">
              <ul>
                <li>Eddard</li>
                <li>Catelyn</li>
                <li>Robb</li>
                <li>Sansa</li>
                <li>Brandon</li>
                <li>Arya</li>
                <li>Rickon</li>
              </ul>
            </div>
            <div class="mdl-tabs__panel" id="lannisters-panel">
              <ul>
                <li>Tywin</li>
                <li>Cersei</li>
                <li>Jamie</li>
                <li>Tyrion</li>
              </ul>
            </div>
            <div class="mdl-tabs__panel" id="targaryens-panel">
              <ul>
                <li>Viserys</li>
                <li>Daenerys</li>
              </ul>
            </div>
          </div> -->
                            </div>
                        </section>
                    </div>
                </section>

        <section class="mdl-layout__tab-panel" id="donasi">
            <div class="page-content"><!-- Your content goes here -->2</div>
        </section>

@endsection