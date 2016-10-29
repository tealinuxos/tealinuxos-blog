@extends('blogmaster')

@section('header')


    <link rel="stylesheet" href="{{asset ('tealinuxos8_docs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('tealinuxos8_docs/fonts/open-sans/stylesheet.css')}}">
@endsection

@section('content')

    <main class="mdl-layout__content">

        {{--<section class="mdl-grid mdl-grid--no-spacing">--}}
            {{--<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-color-text-grey-700">--}}
                {{--<h1 class="mdl-color-text--grey  mdl-typography--text-center"><br/>Panduan Awal</h1>--}}
                {{--<div class="tealinux-white-space">--}}

                    {{--<div class="doc mdl-color-text--grey-700 mdl-card__supporting-text">--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut blanditiis consectetur cum deleniti dolores ex fugiat itaque maxime, modi nam necessitatibus neque nostrum perspiciatis possimus sapiente sint tempora voluptate.</p>--}}
                        {{--<h3 class="mdl-color-text--grey  mdl-typography--text-center"></h3>--}}
                        {{--<p>Tealinux dibuild dengan dua versi menurut dengan arsitektur prosesor, 32 bit dan 64 bit.</p>--}}
                        {{--<ul>--}}
                            {{--<li>Jika komputermu memiliki arsitektur prosesor 64 , silahkan pilih yang 64 bit</li>--}}
                            {{--<li>Jika komputermu jadul dan masih arsitektur 32 , silahkan pilih yang 32 bit :o</li>--}}
                        {{--</ul>--}}
                        {{--<h3 class="mdl-color-text--grey">Minimun  Requirement</h3>--}}
                        {{--<ul>--}}
                            {{--<li>Intel i7</li>--}}
                            {{--<li>RAM 16 GB</li>--}}
                            {{--<li>50 GB disk space</li>--}}
                            {{--<li>Akses Internet</li>--}}
                        {{--</ul>--}}
                        {{--<p>Sebelum melakukan instalasi diharapkan membackup data anda</p>--}}
                        {{--<br>--}}
                        {{--<h3 class="mdl-color-text--grey mdl-typography--text-center">Pilih OS yang anda gunakan</h3>--}}
                        {{--<p>Bertujuan untuk membantu anda dalam melakukan instalasi Tealinux OS pada device anda :)</p>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <header>
            <div class="logo">
                <img src="/tealinuxos8_docs/img/logo.png"  width="200px">
            </div>
            <div class="flex-container vertical">
                <img class="center" src="/tealinuxos8_docs/img/help.png" width="200px">
            </div>
            <h2> <span>Dokumentasi</span> <br/> <span>Pengguna</span> <br/><span>TealinuxOS</span> <br/> <span>Pappermint</span></h2>
        </header>
        <section>
            <div class="container">
                <ul class="docs-nav toplinks" id="menu-left">
                    <li><a href="#apa-itu-tealinuxos" class=" ">Apa itu TealinuxOS</a></li>
                    <li><a href="#migrasi-dan-upgrade" class=" ">Migrasi dan Upgrade</a></li>
                    <li><a href="#pengenalan-de" class=" ">Pengenalan Dekstop Environment</a></li>
                    <li><a href="#pengaturan-dan-pilihan" class=" ">Pengaturan dan Pilihan</a></li>
                    <li><a href="#pengenalan-aplikasi-bawaan" class=" ">Pengenalan Aplikasi Bawaan</a></li>
                    <li><a href="#koneksi-jaringan-dan-internet" class=" ">Koneksi Jaringan dan Internet</a></li>
                    <li><a href="#print-dan-scan" class=" ">Print dan Scan</a></li>
                    <li><a href="#mengelola-aplikasi-terinstall" class=" ">Mengelola Aplikasi Terinstall</a></li>
                    <!-- <li><a href="#mengelola-paket-offline" class=" ">Mengelola Paket Offline</a></li> -->
                    <li><a href="#menjaga-keamanan-komputer" class=" ">Menjaga Keamanan Komputer</a></li>
                    <li><a href="#perangkat-keras" class=" ">Perangkat Keras</a></li>
                    <li><a href="#tugas-tugas-administratif" class=" ">Tugas-tugas administratif</a></li>
                    <li><a href="#perintah-baris" class=" ">Perintah Baris</a></li>
                    <li class="separator"></li>
                    <!-- <li><a href="#daftar-aplikasi" class=" "><strong>Daftar Aplikasi</strong></a></li> -->
                    <li><a href="#lisensi" class=" "><strong>Lisensi</a></strong></li>
                </ul>
                <div class="docs-content">

                    <!-- ==================================================== -->
                    <h2 class="title" id="apa-itu-tealinuxos"> Apa itu Tealinuxos</h2>

                    <h3 id="pengenalan-singkat" class="sub-title"> Pengenalan TealinuxOS </h3>
                    <article>
                        <h4>Tentang</h4>
                        <a href="http://tealinuxos.org" target="_blank">TeaLinuxOS</a> adalah distro Linux turunan Ubuntu yang dikembangkan oleh <a href="http://doscom.org">Dinus Open Source Community (DOSCOM)</a>
                        yang berorientasi pemrograman. Dengan menghadirkan filosofi, <blockquote> “Nikmatnya sebuah racikan”</blockquote> TeaLinuxOS dikembangkan secara terbuka dan bersama-sama untuk menghasilkan distro Linux pemrograman yang dikhususkan untuk dunia pendidikan.

                        <br/>
                        <h4>Nama</h4>
                        TeaLinuxOS – Nikmatnya Sebuah Racikan!
                        <br/>
                        Kami menggunakan nama distro TeaLinuxOS karena beberapa alasan, yaitu tea yang dalam bahasa Indonesia berarti teh, merupakan minuman khas rakyat Indonesia yang merakyat dan dapat dikonsumsi semua orang. Kami berharap TeaLinuxOS dapat mencukupi kebutuhan penggunanya, terutama para programmer.

                        <br/>
                        <h4>Versi</h4>
                        TealinuxOS telah diluncurkan sebanyak 8 versi diantaranya adalah :

                        <ul>
                            <li>TeaLinuxOS ver 1.0 Code Name : Green Tea, based on Ubuntu 8.04</li>
                            <li>TeaLinuxOS ver 2.0 Code Name : Black Tea, based on Ubuntu 9.10</li>
                            <li>TeaLinuxOS ver 3.0 Code Name : White Tea, based on Ubuntu 10.10</li>
                            <li>TeaLinuxOS ver 4.0 Code Name : Oolong Tea, based on Lubuntu 11.10 </li>
                            <li>TeaLinuxOS ver 5.0 Code Name : Kukicha Tea, based on Lubuntu 12.10</li>
                            <li>TeaLinuxOS ver 6.0 Code Name : Jasmine Tea, based on Lubuntu 13.10</li>
                            <li>TeaLinuxOS ver 7.0 Code Name : Rosella Tea, based on Xubuntu 14.04</li>
                            <li>TeaLinuxOS ver 8.0 Code Name : Pappermint Tea, based on Xubuntu 16.04</li>
                        </ul>
                    </article>

                    <h3 id="pembuatan-tealinuxos" class="sub-title"> Pembuatan Tealinuxos </h3>
                    <article>
                        Versi terakhir dari TealinuxOS adalah TealinuxOS 8  Pappermint yang dibuat dari core Xbuntu 16.04, Xfce dan FOSS.

                        <br>
                        <h4>Xubuntu 16.04 LTS</h4>

                        Xubuntu merupakan sistem operasi elegan yang mudah digunakan dan dengan edisi LTS “Long Term Support” ini membuat TeaLinuxOS yang berbasis Xubuntu versi ini mendapat dukungan jangka panjang selama 5 tahun sehingga senantiasa stabil, handal dan aman. Untuk informasi lebih lanjut mengenai Xubuntu anda dapat berkunjung di webseite resmi <a href="http://xubuntu.org">Xubuntu</a>.

                        <br>
                        <h4>XFCE</h4>

                        Xfce merupakan dekstop environment yang ringan yang digunakan di TeaLinuxOS Pappermint. Dengan menggunakan Xfce pemakaian resource sistem lebih sedikit sehingga sistem operasi akan lebih ringan namum tanpa meninggalkan sisi user interface yang ramah pengguna. Untuk informasi lebih lanjut tentang xfce silahkan berkunjung di website resmi <a href="http://xfce.org">Xfce</a>.

                        <br>
                        <h4>FOSS</h4>

                        Semua software yang digunakan dalam sistem operasi TeaLinuxOS berlisensi bebas dan kode sumber yang terbuka semua orang dapat melihat kode sumbernya, berkontribusi memperbaiki atau membuatnya lebih baik. Untuk megetahui lebih tentang FOSS (Free Open Source Software) bisa dilihat di <a href="http://gnu.org">GNU website</a>.


                    </article>
                    <hr>

                    <!-- ==================================================== -->

                    <h2 class="title" id="migrasi-dan-upgrade"> Migrasi dan Upgrade</h2>

                    <h3 id="migrasi-dari-windows" class="sub-title"> Migrasi dari Windows </h3>
                    <article>
                        Jika anda sebelumnya hanya menggunakan sistem operasi windows maka selamat datang di dunia open source jika anda yang sudah familiar dengan sistem operasi linux anda dapat melanjutkan ketahap selanjutnya. Bagi anda yang masih baru bermigrasi, jangan cepat menyerah ketika menghadapi kesulitan, anda dapat bertanya di <a href="https://www.facebook.com/groups/doscomedia/">group doscom</a> atau di <a href="https://www.facebook.com/tealinuxos">fan page TeaLinuxOS</a>
                        para developer dan pengguna lain akan membantu anda. Ini beberapa kata kunci yang sering digunakan di windows dan dapat ditemukan di TeaLinuxOS.
                        <br/><br/>
                        Windows Explorer : <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Accesories → File Manager</span>
                        <br/>
                        My Document : <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Accesories → File Manager → masuk direktori /Home/Documents</span>
                        <br/>
                        Control Panel : <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Settings → Settings Manager</span>
                        <br/><br/>
                        Jika anda masih sulit bermigrasi ke linux karena ada beberapa software yang sering anda gunakan hanya dapat berjalan di sistem operasi windows anda dapat menggunakan aplikasi <a href="winehq.org">wine</a>
                        atau <a href="virtualbox.org">virtualbox</a> (sudah tersedia di TeaLinuxOS Pappermint) walaupun ini tidak disarankan mengingat tidak semua software yang berjalan di sistem operasi windows dapat berjalan di wine atau virtualbox. Solusi lain anda dapat menggunakan free open source software alternatif yang memiliki fungsi yang sama dengan software tersebut.
                    </article>

                    <h3 id="cara-mengupgrade" class="sub-title"> Cara mengupgrade </h3>
                    <article>
                        TeaLinuxOS diluncurkan setahun sekali biasanya pada bulan april (diputuskan oleh tim rilis) anda dapat mengupgrade versi TeaLinuxOS anda dengan cara mengunduhnya di
                        <a href="http://pinguin.dinus.ac.id/iso/tealinuxos/">pinguin</a>.
                    </article>
                    <hr>

                    <!-- ==================================================== -->

                    <h2 class="title" id="pengenalan-de"> Pengenalan Dekstop Environment</h2>
                    <article>
                        Tampilan lingkungan dekstop TeaLinuxOS Pappermint dengan tema elegan dan simple namun bersahabat dengan pengguna. Beberapa pengenalan tentang lingkungan dekstop di TeaLinuxOS sebagai berikut :
                    </article>

                    <h3 class="sub-title"> Panel </h3>
                    <article>
                        <br/><br/>
                        <img src="/tealinuxos8_docs/img/screenshot/panel.png" width="700px">
                        <br/>
                        Pada bagian panel ini terdiri dari icon menu di pojok kiri anda dapat mengkliknya dan menu aplikasi akan muncul.
                        <br/>
                        Disisi kiri ada pengaturan workspace swicher, nama user yang berupa tombol aksi (suspend, logout, shutdown dll) , clock (jam), indikator baterai, indikator volume, indikator jaringan, indikator virtual keyboard.
                        <br/>
                        Untuk panel bagian tengah berisi window menu yaitu aplikasi-aplikasi aktif atau yang sedang berjalan.
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings → Panel → Item </span>. Anda dapat menambahkan atau menghapus item-item yang ada di panel anda.
                    </article>

                    <h3 class="sub-title"> Dekstop </h3>
                    <article>
                        <br/>
                        <img src="/tealinuxos8_docs/img/screenshot/dekstop.png" width="700px">
                        <br/>
                        Pada bagian dekstop hanya terdapat tampilan wallpaper, anda dapat dapat menambahkan folder menambah shortcut mengubah wallpaper atau icon pada dekstop anda. Pengaturannya bisa anda lakukan dengan mengklik kanan di sekitar area dekstop anda.
                    </article>

                    <h3 id="file-dan-direktori" class="sub-title"> File dan Direktori </h3>
                    <article>
                        <br/>
                        <img src="/tealinuxos8_docs/img/screenshot/filemanager.png" width="400px">
                        <br/>
                        TeaLinuxOS Pappermint menggunakan file manager Nautilus dari gnome. Untuk mengaksesnya dengan  <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Accesories → File Manager</span>.
                        <h4>Membuat folder baru (new folder)</h4>
                        <ul>
                            <li class="path">Klik kanan → New Folder</li>
                        </ul>
                        <h4>Mengopi file (copy)</h4>
                        <ul>
                            <li>Pilih folder atau file yang ingin dicopy </li>
                            <li><span class="path"> Klik kanan → Copy </span></li>
                            <li>atau menggunakan shortcut <span class="path"> Ctrl + c</span></li>
                        </ul>
                        <h4>Memotong file (cut)</h4>
                        <ul>
                            <li>Pilih folder atau file yang ingin dicut</li>
                            <li><span class="path">Klik kanan → Cut</span></li>
                            <li>atau menggunakan shortcut <span class="path"> Ctrl + x</span></li>
                        </ul>
                        <h4>Menempel file (paste)</h4>
                        <ul>
                            <li>Pilih tempat tujuan folder atau file yang ingin ditempel</li>
                            <li><span class="path">Klik kanan → Paste</span></li>
                            <li>atau menggunakan shortcut <span class="path"> Ctrl + v</span></li>
                        </ul>
                        <h4>Menghapus file (delete)</h4>
                        <ul>
                            <li>Pilih folder atau file yang ingin dihapus</li>
                            <li><span class="path">Klik kanan → Move to trash</span></li>
                            <li>atau menggunakan shortcut <span class="path">  delete</span></li>
                        </ul>
                        <h4>Mengeluarkan device (eject) </h4>
                        <ul>
                            <li>Pilih device yang ingin dikeluarkan</li>
                            <li><span class="path">Klik kanan > unmount</span></li>
                            <li>atau klik pada icon arrow keatas di samping kanan nama device</li>
                        </ul>
                    </article>
                    <hr>

                    <h2 class="title" id="pengaturan-dan-pilihan"> Pengaturan dan Pilihan</h2>

                    <h3 id="pengubahan-menu" class="sub-title"> Pengubahan Menu </h3>
                    <article>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  Settings Manager →  Menu Editor</span>
                        <br/>
                        Pada menu editor ini anda dapat sepenuhnya dapat mengatur baik hirarkhi menu anda, menambahkan perintah-perintah, mengelompokkan aplikas-aplikasi favorit anda, maupun membuat launcher baru.
                    </article>


                    <h3 id="pengubahan-informasi" class="sub-title"> Pengubahan Informasi Personal </h3>
                    <article>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  User and Groups</span>
                        <br/>
                        <strong>User and Gorups</strong> ini digunakan untuk mengubah informasi pengguna, diantaranya nama, username, password, jenis user apakan administrator atau user biasa. Pada pengaturan ini juga dapat ditambahkan user baru maupun menghapus user lama. Pengaturan Goups dapat menambahkan group baru, menambahkan user dan mengatur privileges user pada groub tersebut. Pada <span class="path">advance setting</span> anda dapat menambahkan inforamsi contact, mengatur user privileges, dan pengaturan mendalam lainnya.
                    </article>

                    <h3 id="pengubahan-tampilan" class="sub-title"> Pengubahan Tampilan </h3>
                    <article>
                        <h4> Menganti wallpaper </h4>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings → Dekstop</span>
                        <br/>
                        Pada bagian wallpaper anda  dapat memilih wallpaper yang telah kami sediakan ini terletak di
                        <span class="path">/usr/share/xfce4/backdrops/</span> jika anda ingin menambahkan wallpaper yang lain, pada bagian Folder anda dapat memilih direktori anda meletakkan gambar wallpaper anda lalu memilihnya.

                        <br/>
                        <h4>Merubah tampilan tema </h4>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  Appearance →  Style</span>
                        <br/>
                        Anda dapat mengubah tampilan TeaLinuxOS Pappermint sesuai dengan selera anda, tema deffault yang digunakan oleh TeaLinuxOS Pappermint adalah <strong> Tea-Mint-Light </strong>, jika anda kurang nyaman dengan tema ini anda dapat menggantinya dengan tema lain dari TeaLinuxOS yaitu <strong> Tea-Mint-Dark </strong> melalui aplikasi Theme-switcher atau jika tidak berkenan anda bisa mengubah ketema tampilan yang dapat anda unduh sendiri misalnya <strong>Orion</strong>, <strong>Numix</strong> atau yang lainnya.
                        <br/><br/>
                        Jika anda menginginkan tema-tema yang lain, anda dapat menginstallnya lalu mengaturnya pada pengaturan <span class="path"> Appearance</span> ini.

                        <br/>
                        <h4>Merubah tampilan icon </h4>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  Appearance → Icons</span>
                        <br/>
                        Icons deffault yang digunakan oleh TeaLinuxOS Pappermint adalah <strong>Tea-Mint-Light</strong> jika anda kurang menyukainya anda dapat menginstall icon lain pada sistem TeaLinuxOS Pappermint anda akan menemukan pengaturannya di <span class="path">Appearance</span>. Jika anda mengunduh icon anda harus menginstallnya terlebih dahulu atau anda bisa meletakkannya di <span class="path"> /usr/share/icons/ </span> jika anda hanya user anda saja yang memiliki icon tersebut (user lain di komputer anda tidak) icon bisa diletakkan di <span class="path"> /home/username/.icons/ </span> jika folder ini belum ada, anda bisa membuatnya sendiri.

                        <br/>
                        <h4>Theme Switcher</h4>
                        <img src="/tealinuxos8_docs/img/screenshot/theme-switcher.png" width="300px"><br/>
                        TeaLinuxOS 8 telah dilengkapi dengan Theme Switcher Tray, sebuah aplikasi yang memungkinkan anda untuk mengganti tema dengan cepat. Aplikasi ini berupa sebuah icon kecil yang muncul di area indikator pada panel. Klik untuk mengganti tema, dan klik kanan pada icon untuk melihat pengaturan dan <i>about</i>.<br/>
                        <br/>
                        <h4>Konfigurasi panel </h4>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  Panel</span>
                        <br/>
                        atau
                        <br/>
                        Klik kanan pada bagian panel yang kosong lalu pilih <span class="path">Panel → Panel preferences</span>
                        <br/>
                        Dalam pengaturan panel ini ada tiga tabs yaitu <span class="path">Display </span> , <span class="path"> Appearance </span> dan <span class="path"> Item </span>. Dalam Pengaturan panel <span class="path">Display </span> anda dapat mengatur apakah panel anda akan horizontal, vertikal ataupun deksbar dan juga pengaturan ukuran panjang lebar panel. Pada tabs <span class="path"> Appearance </span> mengatur bagaimana panel anda terlihat, misalnya saja kita buat Background Alphanya 0 maka panel anda tidak akan memiliki background. Atau coba mengatur Leave Opacitynya menjadi 0 maka panel anda akan terlihat hanya ketika anda mendekatkan pointer ke panel anda. Tab ketiga adalah <span class="path"> Item </span> yang berisi item-item apa saja yang berada di panel anda dapat menambahkan maupun menghapus item yang telah ada. Dengan pengaturan ini anda dapat merubah panel deffault menjadi panel anda sendiri sesuai yang anda sukai.


                    </article>
                    <hr>

                    <h2 class="title" id="pengenalan-aplikasi-bawaan"> Pengenalan Aplikasi Bawaan</h2>

                    <!--  <h3 id="aplikasi-tealinuxos" class="sub-title"> Aplikasi TeaLinuxOS</h3>
                     <article>
                       <img src="img/screenshot/inkscape.png" width="700px">
                       <br/>
                       Aplikasi grafis yang telah disediakan oleh TeaLinuxOS Pappermint diantaranya adalah inkscape, gimp dan blender.
                       <br/>
                       <h4>Inkscape</h4>
                       Inkscape merupakan aplikasi desain grafis untuk mendesain gambar vektor. Dengan menggunakan aplikasi inkscape ini anda dapat membuat file vektor dan mengeksportnya menjadi SVG, PDF, JPG dll. Untuk mengetahui lebih lanjut silahkan berkunjung di website resmi <a href="inkscape.org">Inkscape</a>.
                       <br/>
                       <h4>Gimp</h4>
                       Gimp adalah software untuk memanipulasi gambar. Anda dapat menggambar, mengatur kecerahan, mengedit foto, membuat poster dll. Untuk informasi lebih lanjut anda dapat melihatnya di website resmi <a href="gimp.org">Gimp</a>.
                       <br/>
                       <h4>Bleder</h4>
                       Blender merupakan aplikasi pengolahan animasi multimedia 3 dimensi. Pada aplikasi ini juga dapat dilakukan modelling, rendering ataupun video editing. Untuk informasi lebih lanjut anda dapat melihatnya di website resmi <a href="blender.org">Blender</a>.

                     </article> -->

                    <h3 id="aplikasi-multimedia" class="sub-title"> Aplikasi Multimedia </h3>
                    <article>

                        <img src="/tealinuxos8_docs/img/screenshot/multimedia.png" width="700px">
                        <br/>

                        <h4>Audacious</h4>
                        Audacious adalah sebuah perangkat lunak Pemutar Media berlisensi bebas yang berfokus dengan penggunaan sumber daya komputer yang rendah, kualitas suara yang tinggi dan mendukung berbagai jenis format. Untuk mengetahui lebih lanjut silahkan berkunjung di website resmi audacious <a href="audacious-media-player.org">Audacious</a>.
                        <br/>
                        <h4>VLC</h4>
                        VLC Media Player merupakan perangkat lunak (software) pemutar beragam berkas (file) multimedia, baik video maupun audio dalam berbagai format, seperti MPEG, DivX, Ogg, dan lain-lain. VLC Media Player juga dapat digunakan untuk memutar DVD,VCD, maupun CD. VLC Media Player bersifat sumber terbuka (open source) dan tersedia untuk berbagai sistem operasi. Mulai dari Microsoft Windows, beragam distro Linux, Mac OS, dan beberapa sistem operasi lainnya. <a href="http://www.videolan.org/vlc/">VLC</a>.
                        <h4>Multimedia Codec</h4>
                        Multimedia Codec library yang memudahkan anda dapat memutar video-video dan musik-musik kesukaan anda.
                    </article>

                    <h3 id="aplikasi-perkantoran" class="sub-title"> Aplikasi Perkantoran</h3>
                    <article>
                        <h4>LibreOffice 5</h4>
                        TeaLinuxOS Pappermint telah menyediakan paket software perkantoran yaitu LibreOffice yang terdiri dari LibreOffice writer untuk pengolahan dokumen, LibreOffice Impress untuk pengolahan presentasi, LibreOffice Calc untuk pengolahan data spreadsheet dan banyak paket LibreOffice lainnya. Informas lebih lanjut silahkan kunjungi website resmi <a href="libreoffice.org">LibreOffice</a>.
                    </article>
                    <h3 id="browser" class="sub-title"> Browser </h3>
                    <article>
                        <h4>Firefox</h4>
                        Firefox merupakan browser yang sudah cukup tua sehingga stabil dan aman. TeaLinuxOS Pappermint menghadirkan browser Firefox sebagai deffault browser untuk menunjang produktifitas pengguna. Untuk mengetahui tentang Firefox dan berbagai fitur yang disediaannya anda dapat berkunjung ke website resmi <a href="https://www.mozilla.org/id/firefox">Firefox</a>.
                    </article>
                    <h3 id="sistem" class="sub-title"> Sistem </h3>
                    <article>
                        <br/>
                        <h4>Tea Package</h4>
                        <img src="/tealinuxos8_docs/img/screenshot/teapackage.png" width="700px">
                        <br/>
                        Menginstall aplikasi beserta seluruh dependensi secara lengkap dengan mudah menggunakan <strong>Tea Package</strong>.
                        <br/><br/>
                        Tea Package merupakan aplikasi yang dikembangkan oleh developer TeaLinuxOS berbasis Python script untuk menginstall aplikasi berserta seluruh dependensinya secara offline. Ini memudahkan pengguna untuk berbagi paket aplikasi dan menginstallnya tanpa harus terkoneksi internet. Jika anda telah mengenal <strong>.exe</strong> pada sistem operasi windows maka di TeaLinuxOS Pappermint memiliki <strong>.tea</strong> utuk paket aplikasi yang digunakan. Penginstalan  <strong>.tea</strong> dapat dilakukan pada <strong>Tea Package Installer</strong>. Untuk mengetahui tentang projek ini silahkan lihat di github <a href="github.com/tealinuxos/">Tea Package</a>.
                        <br/>
                        <h4 id="tea-mudule-installer">TeaLinux Module Installer</h4>
                        <img src="/tealinuxos8_docs/img/screenshot/moduleinstaller.png" width="700px">
                        <br/>
                        TeaLinuxOS Module Installer merupakan penginstallan aplikasi pemrograman secara offline menggunakan CD/DVD yang sudah terisi berbagai macam Modul aplikasi. Modul aplikasi yang disediakan diantaranya untuk <strong>Modul Pemrograman</strong> berisi aplikasi Android Studio, C/C++ compiler, apache2, PHP5, MySQL, PyCharm, Atom, NodeJs + npm, Geany, MonoDevelop, Brackets, NetBeans, Eclipse, dan Qt. <strong>Modul Multimedia</strong> berisi aplikasi Blender, Inkscape, GIMP, Audacity, LMMS, Ardour, Synfig, Darktable, FFMPEG, dan Krita. Sedangkan untuk <strong>Modul Networking</strong> VirtualBox, traceroute, remmina, wireshark, dan gigolo.
                        <br/>
                        Modul-modul ini dapat anda install dengan memasukkan DVD TealinuxOS lalu klik  <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Accessoris → TeaLinux Module Installer</span> pilih modul-modul yang anda inginkan, lalu klik <span class="path">Install</span>.
                        <br/>
                        <h4>Lapor Hama</h4>
                        <img src="/tealinuxos8_docs/img/screenshot/lapor-hama.png" width="700px"></br>
                        Lapor hama adalah aplikasi untuk melaporkan hama (bugs) atau saran untuk sistem operasi TeaLinuxOS dengan mudah, dengan demikian kami harap dapat mengetahui celah celah pada TeaLinux OS untuk TeaLinuxOS yang lebih baik.<br/>Selain melalui aplikasi ini, Anda juga dapat melaporkan hama TeaLinux OS di <a href="http://tealinuxos.org/lapor">tealinuxos.org/lapor</a>
                    </article>

                    <h2 class="title" id="koneksi-jaringan-dan-internet"> Koneksi Jaringan dan Internet</h2>

                    <h3 id="koneksi-jaringan" class="sub-title"> Menyambung dan Memutuskan jaringan </h3>
                    <article>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →  Network Connection</span>
                        <br/>
                        atau klik icon  <span class="path"><img src="/tealinuxos8_docs/img/screenshot/networkmanager.png" width="20px">  NetworkManager</span> yang berada di panel <span class="path"> → Edit</span>.
                        <br/>
                        Koneksi jaringan di TealinuxOS Pappermint menggunakan network connection untuk mengatur jaringan menggunakan kabel, jaringan wireless, mobile broadband, VPN dan koneksi DSL. Network connection akan menghubungkan komputer anda secara otomatis dengan jaringan, namun jika penyambungan pertama kali biasanya memerlukan informasi keamanan untuk terhubung ke jaringan.
                        <br/><br/>
                        Untuk memutuskan (disconnect) jaringan klik pada icon <span class="path"><img src="/tealinuxos8_docs/img/screenshot/networkmanager.png" width="20px">  NetworkManager</span>  yang berada di panel lalu klik <span class="path">disconnect</span>.
                    </article>
                    <h3 class="sub-title"> Konfigurasi koneksi </h3>
                    <article>
                        Jika anda menginginkan untuk mengkonfigurasi jaringan anda, Pada kotak dialog Netwok Connection anda akan melihat koneksi-koneksi jaringan yang ada. Pilih salah satu untuk mengatur konfigurasi atau anda dapat menambahkan koneksi jaringan baru dengan memilih <span class="path">Add</span>.
                    </article>
                    <h3 class="sub-title"> Berbagi koneksi ke komputer lain </h3>
                    <article>
                        Anda dapat berbagi koneksi ke komputer lain dengan menggunakan kabel Ethernet. Untuk pengaturannya klik icon <span class="path"><img src="/tealinuxos8_docs/img/screenshot/networkmanager.png" width="20px">  NetworkManager → Edit</span> lalu pilih <span class="path"> Add </span> pada kotak dialog pilih jenis koneksi yang anda inginkan, Setelah create pada bagian tab <span class="path"> IPv4 Setting </span> pilih metode yang digunakan.
                    </article>
                    <h3 class="sub-title"> Troubleshooting pada jaringan </h3>
                    <article>
                        Jika koneksi jaringan anda tidak bekerja secara sempurna anda dapat menggunakan beberapa cara untuk menemukan kesalahan koneksi anda.
                        <br/><br/>
                        <h4>Mengecek informasi koneksi</h4>
                        <ul>
                            <li>Menggunakan icon <strong>NetworkManager</strong>
                                <br/>
                                <span class="path"><img src="/tealinuxos8_docs/img/screenshot/networkmanager.png" width="20px">  NetworkManager → Information</span>. Jika information di disable ini kemungkinan karena komputer anda tidak terkoneksi dengan jaringan.
                            </li>
                            <li>Menggunakan <strong>ifconfig</strong>
                                <br/>
                                buka terminal (short cut terminal guake : F12)
                                <br/>
                                ketikkan perintah
                                <span class="terminal">ifconfig</span> lalu enter.
                                <br/>
                                <strong>ifconfig</strong> ini akan menunjukkan informasi koneksi anda meliputi nama koneksi, IP address di inet addr , dan MAC address di Hwaddr.
                            </li>
                        </ul>
                        <br/>
                        <h4>Mengecek koneksi bekerja</h4>
                        Untuk mengecek apakah koksi anda bekerja atau tidak anda dapat mengetesnya melalui <strong>ping</strong>.
                        <br/>
                        <ul>
                            <li>Buka terminal</li>
                            <li>
                                ketikkan perintah
                                <span class="terminal">ping tealinuxos.org</span>
                            </li>
                            <li>lalu enter.</li>
                        </ul>
                        Jika koneksi berhasil anda akan menerima pesan berupa jumlah statistik paket yang di transmisikan. Jika anda mendapat pasan <span class="path">ping: unknown host tealinuxos.org</span> maka komputer anda mungkin tidak  terhubung ke internet dan tidak dapat menjangkau Domine Name System (DNS) server.
                    </article>

                    <hr>

                    <h2 class="title" id="print-dan-scan"> Print dan Scan</h2>

                    <h3 id="penggunaan-printer" class="sub-title"> Penggunaan Printer </h3>
                    <article>
                        Kebanyakan printer secara otomatis didukung oleh TeaLinuxOS Pappermint. Aplikasi Konfigurasi Printer memungkinkan Anda untuk menambahkan printer, serta mengubah pengaturan mereka. Anda juga dapat menggunakan aplikasi ini untuk berbagi printer dengan komputer lain di jaringan, menonaktifkan printer atau restart.

                        <h4>Print Lokal</h4>
                        <ul>
                            <li>Dapatkan nama model printer Anda</li>
                            <li>Pastikan printer sudah hidup</li>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Setting → Setting Manager → Printers</span></li>
                            <li>Klik <span class="path"> → Server → New → Printer</span></li>
                            <li>Printer Anda harus secara otomatis terdeteksi dan ditampilkan dalam jendela Devices</li>
                            <li>Pilih printer Anda dan klik Forward</li>
                            <li>  Komputer Anda akan mencari dan menginstal driver untuk printer Anda</li>
                            <li>Anda dapat memasukkan deskripsi dan lokasi untuk printer Anda</li>
                            <li>Tekan <span class="path"> Apply</span></li>
                            <li>Printer Anda harus dikonfigurasi dengan benar pada saat ini dan Anda akan diminta jika Anda ingin mencetak halaman uji</li>
                            <li>Jika Anda menekan tombol Print Test Page, halaman uji akan mencetak dan Anda dapat memverifikasi apakah itu dicetak dengan benar, atau Anda dapat menekan Batal.</li>
                            <li> Jika Anda masih mengalami masalah, cobalah menggunakan antarmuka berbasis browser CUPS. Hal ini dapat diakses di http: // localhost: 631 /.</li>
                        </ul>
                        <h4>Print menggunakan jaringan</h4>
                        <ul>
                            <li>Dapatkan nama model printer Anda</li>
                            <li>Pastikan printer sudah hidup</li>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Setting → Setting Manager → Printers</span></li>
                            <li>Klik <span class="path"> → Server → New → Printer</span></li>
                            <li> Klik pada Network Printer di jendela Devices</li>
                            <li>Jika printer Anda terhubung langsung ke mesin Windows di jaringan Anda, pilih Windows Printer via SAMBA. Jika tidak, pilih protokol printer Anda menggunakan untuk berkomunikasi.</li>
                            <li>   Masukkan rincian printer jaringan dan tekan Teruskan</li>
                            <li>Pilih produsen printer dan kemudian tekan Teruskan</li>
                            <li>Pilih model printer dan driver kemudian tekan Teruskan</li>
                            <li>nda dapat memasukkan deskripsi dan lokasi untuk printer Anda di bidang yang sesuai</li>
                            <li>Tekan <span class="path"> Apply</span></li>
                            <li> Printer Anda dikonfigurasi dengan benar pada saat ini dan Anda akan diminta untuk mencetak halaman uji, tekan Batal atau Print Test Page tergantung pada preferensi Anda</li>
                        </ul>
                    </article>

                    <h3 id="penggunaan-scanner" class="sub-title"> Penggunaan Scanner </h3>
                    <article>
                        Banyak scanner telah didukung oleh TeaLinuxOS Pappermint, sehingga mudah dalam penginstallan dan pengoperasiannya.
                        <h4>Scan dokumen</h4>
                        <ul>
                            <li>Tempatkan dokumen yang ingin di scan ke scanner</li>
                            <li> <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Graphics →  Simple Scan</span></li>
                            <li>Klik <span class="path"> Document → Scan</span></li>
                            <li>Pilih media yang ingin anda scan: Single Page, All Pages From Feeder, Text or Photo. Bergantian, tekan tombol Scan pada pemindai cara ini seharusnya bisa berhasil. </li>
                        </ul>
                    </article>

                    <hr>

                    <h2 class="title" id="mengelola-aplikasi-terinstall"> Mengelola Aplikasi Terinstall</h2>

                    <h3 id="menginstall-software" class="sub-title"> Menginstall Software </h3>
                    <article>
                        <h4>Menginstall aplikasi dengan menggunakan internet</h4>

                        Pastikan komputer anda terkoneksi dengan jaringan komputer karena penginstalan akan langsung mengunduh paket aplikasi yang ingin di install dari repository ubuntu.
                        Cara paling mudah adalah melalui <strong>Software Center</strong>.
                        Klik <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Software</span>
                        <br/>
                        <img src="/tealinuxos8_docs/img/screenshot/software-center.png" width="400px">
                        <br/>
                        Atau lewat terminal, Buka terminal
                        <br/>
                        Ketikan perintah:
                        <span class="terminal">sudo apt-get install nama_paket</span>
                        Masukkan password komputer anda
                        <br/>
                        Ketika ada dialog <span class="path"> “Do you want to continue? (Y/n)” </span> ketik <span class="path">“y”</span>
                        <br/>
                        Tunggu hingga proses pengunduhan dan pemasangan selesai.
                        <br/>
                        Jalankan aplikasi dengan memanggil nama_paket  di terminal atau anda dapat mencarinya di menu.
                        <br/>
                        <h4>Menginstall aplikasi tanpa internet</h4
                        >
                        Jika anda memiliki aplikasi dengan ekstensi <strong>.tar.gz</strong>, <strong>.deb</strong> ataupun <strong>.tea</strong> anda dapat menginstalnya tanpa koneksi internet.
                        <ul>
                            <li><strong>Menginstall aplikasi .tar.gz</strong>
                                <br/>
                                Buka terminal anda lalu ketikkan perintah
                                <span class="terminal">tar xzvf nama_file.tar.gz</span>(perintah untuk mengekstrak file)
                                <br/>
                                Masuk ke folder yang telah di ekstrak
                                <span class="terminal">cd nama_file</span>
                                <span class="terminal">./configure</span>
                                <span class="terminal">make</span>
                                <span class="terminal">sudo su</span>
                                <span class="terminal">#make install</span>
                                <br/>
                                Pada umumnya penginstalan file <strong> tar.gz</strong> menggunakan perintah diatas namun jika aplikasi tidak terinstall atau terjadi error, sebaiknya anda membaca file <strong>README</strong> atau <strong>INSTALL</strong> yang biasanya disertakan dalam file aplikasi tersebut untuk panduan penginstalan.
                            </li>
                            <br/>
                            <li><strong>Menginstall aplikasi .deb</strong>
                                <br/>
                                Jika anda ingin menginstall aplikasi berekstensi <strong> .deb</strong> yang merupakan debian paket ada dua langkah.
                                <ul>
                                    <li><strong> Menggunakan Package Installer</strong>
                                        <br/>
                                        kliknya dua kali pada file <strong> .deb</strong>
                                        <br/>
                                        klik tombol <strong> Install Package </strong>
                                        <br/>
                                        Masukkan password anda
                                        <br/>
                                        Tunggu hingga muncul pesan Installation finished.
                                    </li>
                                    <br/>
                                    <li>
                                        <strong> Menggunakan Terminal</strong>
                                        <br/>
                                        Buka teminal ketikkan perintah
                                        <span class="terminal">sudo dpkg -i nama_file.deb</span>
                                    </li>
                                </ul>

                                <br/>
                            <li><strong>Menginstall aplikasi .tea</strong>
                                <br/>
                                Penginstalan paket aplikasi <strong>.tea</strong> dengan menggunakan <strong>Tea Package Installer</strong>
                                <br/><br/>
                                <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → System → Tea Package Installer</span>
                                <br/>
                                Pilih <span class="path"> Cari</span>
                                <br/>
                                Lakukan pencarian dimana anda meletakkan file <strong>.tea</strong>
                                <br/>
                                Pilih <span class="path"> Install</span>
                                <br/>
                                Pilih <span class="path"> Lanjut</span> hingga selesai.
                            </li>
                            <br/>
                            <li><strong>Menginstall melalui Tea Module Installer</strong>
                                <br/>
                                Untuk mengistall aplikasi melalui Tea Module Installer anda dapat melihatnya <a href="tea-mudule-installer">disini</a>.
                            </li>
                        </ul>

                    </article>

                    <h3 id="uninstall-software" class="sub-title"> Uninstall Software </h3>
                    <article>
                        Untuk menguinstall software tertentu anda dapat melakukannya dengan cara berikut:
                        <br/>
                        Buka terminal, pastikan terlebih dahulu nama paket yang ingin anda uninstall denganmenggunakan perintah:
                        <span class="terminal">dpkg –list</span>
                        Setelah mamastikan paket yang ingin ada uninstall ketikkan perintah
                        <span class="terminal">sudo apt-get remove nama_paket</span>
                        Masukan password
                        <br/>
                        Tunggu hingga proses uninstall selesai.
                        <br/>

                    </article>

                    <h3 id="menambah-repository" class="sub-title"> Menambah Repository </h3>
                    <article>
                        Repository merupakan sekumpulan paket-paket aplikasi atau program untuk sebuah sistem operasi (Linux) yang digunakan untuk menunjang kinerja dari sebuah aplikasi, program dan sebagainya yang didapatkan dari server mirror website paket-paket tersebut. Ada dua cara untuk menambahkan repository ke sistem.
                        <ul>
                            <li><strong>Melalui Terminal</strong>
                                <br/>
                                Buka terminal, lalu ketikkan perintah:
                                <span class="terminal">sudo add-apt-repository ppa:nama_pembuat/nama_paket</span>
                                <span class="terminal">sudo apt-get update</span>
                                <span class="terminal">sudo apt-get install nama_paket</span>
                            </li>
                            <br/>
                            <li><strong>Melalui Sistem</strong>
                                <br/>
                                <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →   Software & Updaters</span>
                                <br/>
                                Pada jendela Software & Updaters pilih tab <span class="path">Other Software</span>
                                <br/>
                                Klik tobol <span class="path"> Add</span>
                                <br/>
                                Isikan repository yang ingin ditambahkan
                                <br/>
                                Klik tobol <span class="path"> Add Source</span>
                            </li>
                        </ul>
                    </article>
                    <h3 id="menginstall-melalui-tealinuxos-ide-installer" class="sub-title"> Menginstall melalui Tealinuxos IDE Installer </h3>
                    <article>
                        Penginstallan paket menggunakan TeaLinux IDE Installer sebagai berikut:
                        <br/>
                        <ol>
                            <li>Masukkan CD IDE Installer</li>
                            <li>Jalankan TeaLinux IDE Installer <span class="path"><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> → Accessories → tealinux-ide-installer</span> </li>
                            <li>Pilih paket yang ingin di Install</li>
                            <li>Klik tombol <span class="path">Install</span></li>
                        </ol>

                    </article>
                    <h3 id="mengupdate-software" class="sub-title"> Mengupdate software </h3>
                    <article>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings →   Software Updater</span>
                        <br/>
                        Mengupdate software dapat melalui layanan Software updater, sistem akan mengecek update software lalu akan mengunduh dari internet dan memasang update-update dari software.
                    </article>

                    <hr>

                    <!-- <h2 class="title" id="mengelola-paket-offline"> Mengelola Paket Offline</h2>

                    <hr> -->



                    <h2 class="title" id="menjaga-keamanan-komputer"> Menjaga Keamanan Komputer</h2>

                    <h3 id="tips-menjaga-keamanan-komputer" class="sub-title"> Tips Menjaga Keamanan Komputer </h3>
                    <article>
                        Beberapa tips menjaga keamanan komputer anda diantaranya :
                        <h4>Mengubah password komputer secara berkala</h4>
                        Meskipun anda memiliki password yang sangat sulit dipecahkan alangkah baiknya untuk tetap waspada dengan mengganti password komputer anda secara berkala, langkah-langkahnya sebagai berikut:
                        <br/><br/>
                        <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Setting → User and Groups</span>
                        <br/>
                        Klik username anda pada list
                        <br/>
                        Klik <span class="path">Change</span>, pada pengaturan Password
                        <br/>
                        Anda dapat memilih <span class="path">set password by hand</span> yaitu anda memasukkan password anda sendiri atau memilih <span class="path">Generate random password</span> untuk memilih password secara acak.
                        <br/>
                        Terakhir pilih <span class="path">Ok</span>

                        <br/>
                        <h4>Kunci layar ketika meninggalkan komputer</h4>
                        Mengunci layar saat hendak meninggalkan komputer sangat penting untuk menghindari seseorang mengakses komputer anda. Untuk mengunci <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Lock Screen</span>  atau Klik  <span class="path">nama user</span> pada panel  <span class="path"> → Lock Screen.</span>

                        <br/>
                        <h4>Mengatur Firewall</h4>
                        Firewall membantu mencegah pelanggaran keamanan dengan memblokir koneksi dari sumber yang tidak diketahui. Pada kondisi awal Firewall tidak dijalankan namun anda dapat menginstall aplikasi seperti <strong>Firestarter</strong> atau yang lainnya.

                        <br/>
                        <h4>Waspada saat mengakses internet</h4>
                        Berikut adalah beberapa tips untuk menjaga aman secara online:
                        <ol>
                            <li>
                                Jangan pernah membalas email yang tidak diminta (spam, penipuan atau email phishing) atau mengklik link di email. Biasanya anda akan dikirimin lebih banyak email spam jika mengklik link di email.
                            </li>
                            <li>
                                Jangan pernah mengklik link dalam email yang meminta password Anda atau informasi rahasia lainnya. Hal ini memungkinkan anda di arahkan untuk membuka alamat (mungkin berbahaya). Sebaliknya, ketik link langsung ke browser web Anda sendiri dan melanjutkan dari sana.
                            </li>
                            <li>
                                Jika sebuah situs web meminta rincian keuangan Anda, pastikan bahwa itu adalah aman. Dalam web browser Firefox, situs aman memiliki ikon gembok di sebelah kiri alamat. Klik pada gembok untuk membaca informasi lebih lanjut tentang keamanan website.
                            </li>
                            <li>
                                Hanya men-download dan menjalankan software dari sumber yang Anda percaya.
                            </li>
                        </ol>

                        <br/>
                        <h4>Backup data secara teratur</h4>
                        Masalah yang mungkin terjadi adalah hilangnya file atau data karena  pengaturan untuk satu atau alasan lain. Penyebab kehilangan data tersebut banyak dan beragam; misalnya saat kegagalan daya untuk sengaja menghapus file. Hal ini sangat disarankan agar Anda membuat cadangan pada file-file penting anda, jika Anda menghadapi masalah tersebut, Anda masih memiliki cadangannya.
                        <br/><br/>
                        Sebaiknya menyimpan cadangan file secara terpisah dari komputer Anda; seperti CD dan DVD, hard disk eksternal, disk USB maupun komputer lain.
                        <br/><br/>
                        Cara yang paling mudah membuat cadangan file adalah secara manual menyalinnya ke lokasi yang aman dengan menggunakan File Browser serta Archive Manager untuk mengompres file dan membungkus file-file tersebut. Atau, anda dapat menggunakan aplikasi backup khusus.
                        <br/><br/>
                        Tips saat membuat backup data:
                        <ul>
                            <li>Buat cadangan secara teratur</li>
                            <li>Pastikan sudah terbuat dengan benar</li>
                            <li>Beri label backup dengan jelas dan simpan di tempat yang aman.</li>
                        </ul>
                    </article>

                    <hr>

                    <h2 class="title" id="perangkat-keras"> Perangkat Keras</h2>
                    <h3 id="pembatasan-driver" class="sub-title"> Pembatasan Beberapa Driver </h3>
                    <article>
                        <h4>Mengapa beberapa driver dibatasi?</h4>
                        <br/>
                        Pembatasan Driver (Restricted Driver) adalah keterbatasan driver untuk sebuah perangkat hardware karena tidak tersedia secara bebas atau open source.
                        <br/><br/>
                        Kebanyakan device (hardware) yang terpasang di komputer anda bisa berfungsi secara normal di TeaLinuxOS. Device ini cenderung tidak memiliki keterbatasan driver, yang artinya driver dapat dimodifikasi dan masalah dengan device dapat dibetulkan.
                        <br/><br/>
                        Ketika beberapa hardware tidak dapat berjalan lancar di TeaLinuxOS bisa dikarenakan device tersebut memiliki Restricted Driver (Pembatasan Driver).  Biasanya pembuat hardware belum merilis detail dari hardware itu sendiri yang memungkinkan untuk developer membuat semacam driver sendiri. Device yang seperti ini mempunyai fungsi yang terbatas atau mungkin tidak bisa berkerja sama sekali

                        <h4>Mengaktifkan Pembatasan Driver</h4>
                        Jika Pembatasan Driver tersedia untuk beberapa device, anda dapat menginstalnya untuk memungkinkan perangkat anda berfungsi dengan baik.
                        <br/><br/>
                        Jika beberapa driver tersedia untuk perangkat anda dapat diinstal dari Software Source dialog:
                        <ul>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Settings Manager →  Software & Updates</span></li>
                            <li>Driver yang tersedia akan muncul di tab Additional Drivers, pilih dan Apply Changes</li>
                            <li>Anda akan, jika perlu, memasukan password administration</li>
                            <li>Anda mungkin akan diminta untuk reboot komputer anda setelah proses instalasi selesai</li>
                        </ul>

                        <h4>Menonaktifkan Pembatasan Driver</h4>
                        Jika Pembatasan Driver menyebabkan masalah, anda bisa menonaktifkan, ikuti langkah berikut
                        <ul>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Settings Manager → Software & Updates</span></li>
                            <li>Klik Additional Drivers</li>
                            <li>Cari driver yang akan dinonaktifkan dan tekan tombol Deactivate</li>
                            <li>Anda akan diminta memasukan password administration</li>
                        </ul>
                    </article>
                    <h3 id="disk-dan-partisi" class="sub-title"> Disk dan Partition </h3>
                    <article>
                        <h4>Memeriksa berapa ruang disk yang tersisa</h4>
                        Cara mudah untuk memeriksa ruang disk yang tersedia adalah menggunakan File Manager. Berikut beberapa langkah yang harus dilakukan
                        <ul>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Accessories →  File Manager</span></li>
                            <li>Double-click di File System atau icon Home di Desktop</li>
                            <li>Klik folder home di Lancher Panel</li>
                        </ul>
                        Status bar di bagian bawah jendela memperlihatkan ruang tersedia dari drive atau disk yang terpilih. Jika anda memiliki lebih dari satu drive tepasang atau terhubung, anda dapat click di side pane dan anda akan melihat ruang kosong pada drive atau disk tersebut.
                        <h4>Menambah ruang disk</h4>
                        Beberapa cara mudah untuk meberikan ruang kosong lebih:
                        <ul>
                            <li>Kosongkan trash dengan cara klik kanan di Trash icon pada Desktop atau Launcher Panel dan pilih Empty Trash</li>
                            <li>Hapus software package yang tidak digunakan lagi.</li>
                            <li>Hapus file yang tidak dibutuhkan. </li>
                        </ul>
                        <h4>Mempartisi Perangkat</h4>
                        Anda dapat menggunakan GParted (GNOME Partition Editor) untuk mempartisi perangkat penyimpanan. Klik <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> →  Settings Manager →  GParted</span> untuk memulai editor partisi
                        <h4>Membebaskan ruang untuk partisi baru</h4>
                        Untuk membuat partisi baru di perangkat yang sudah terpatisi, Anda harus mengubah ukuran partisi yang tersedia. Jika Anda sudah mempunyai ruang kosong, lewati langkah ini dan menuju kebagian Membuat partisi baru. Jika tidak, ikuti langkah dibawah:
                        <ul>
                            <li>
                                Pilih perangkat yang akan dipartisi dari list drop-down yang terdapat di kanan-atas dari jendela utama
                            </li>
                            <li>
                                List partisi akan muncul di jendela utama. Pilih partisi yang akan anda rubah ukurannya dan dari menu pilih <span class="path">Partition → Unmount</span>
                            </li>
                            <li>
                                Untuk merubah partisi pilih <span class="path">Partition →  Resize /Move</span>. Resize/Move dialog akan muncul. Anda dapat menggunakan Free Space Following (MiB) box untuk memilih berapa banyak ruang yang akan dikosongkan setelah partisi, atau Free Space Preceding (MiB) untuk mengosongkan ruang sebelum partisi ini.
                            </li>
                            <li>
                                Klik <span class="path">Resize / Move</span>
                            </li>
                            <li>
                                Untuk menerapkan perubahan, klik <span class="path">Edit →  Apply All Operations</span>
                            </li>
                        </ul>
                        <h4>Membuat Partisi baru</h4>
                        Untuk membuat partisi baru:
                        <ul>
                            <li>Pilih perangkat yang akan dipartisi dari list drop-down di bagian kanan-atas dari jendela utama.</li>
                            <li>List dari partisi akan muncul. Pilih unallocated, klik kanan dan click New</li>
                            <li>Dari File system: pick list, pilih type dari filesystem yang akan digunakan.</li>
                            <li>Jika dibutuhkan, masukkan deskripsi partisi di Label : field</li>
                            <li>Click tombol Add</li>
                            <li>Untuk menerapkan perubahan,  klik <span class="path"> Edit →  Apply All Operation</span></li>
                        </ul>
                        <h4>Memformat Partisi</h4>
                        Untuk menghapus partisi, lakukan langkah berikut:
                        <ul>
                            <li>Pilih perangkat dari list drop-down di bagian kanan-atas dari jendela utama</li>
                            <li>List partisi akan muncul. Pilih partisi dan pilih <span class="path">Partition → Unmount</span></li>
                            <li>Pilih partisi yang akan diformat dan pilih <span class="path">Partition → Format to </span> dan pilih tipe file system dari list untuk dirubah ke tipe tersebut</li>
                            <li>Untuk menerapkan perubahan, klik <span class="path"> Edit →  Apply All Operations</span></li>
                        </ul>
                        <h4>Mount dan Unmount perangkat</h4>
                        Ketika anda memasang sebuah perangakat removable storage (ex : Flashdisk) ke komputer anda, harusnya perangkat tersebut akan tersambung (mounted) oleh operating system yang memperbolehkan anda untuk mengakses file di perangkat tersebut
                        <br/><br/>
                        Untuk mencari bagaimana cara mount dan unmount perangkat penyimpanan secara manual dan/atau otomatis, liat di halaman Ubuntu community wiki untuk <a href="https://help.ubuntu.com/community/Mount"> perintah mount</a>.
                        <br/><br/>
                        Ketika anda mengcopy files dari perangkat penyimpanan removable, perangkat tersebut tidak selalu tertulis di perangkat secara langsung. Sebaliknya perangkat tersebut akan disimpan dalam antrian sehingga mereka semua dapat ditransfer ke perangkat pada saat yang sama (untuk alasan efisiensi).
                    </article>

                    <h3 id="laptop" class="sub-title"> Laptop </h3>
                    <article>
                        <h4>Pengaturan manajemen daya</h4>
                        Anda mungkin ingin mengubah pengaturan manajemen daya laptop Anda untuk membantu menghemat baterai.
                        <ul>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings Manager → Power Manager</span></li>
                            <li>Mengubah pengaturan yang sesua</li>
                            <li>Perubahan yang diterapkan dapat langsung dilihat</li>
                        </ul>
                        <h4>Touchpads</h4>
                        Sebagian besar  laptop terdapat touchpad, yang digunakan untuk mengontrol pointer mouse. Ada banyak cara untuk mengubah cara touchpad berkerja; pengaturan touchpad dasar dapat dikonfigurasi dengan cara berikut:
                        <ul>
                            <li><img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings Manager → Mouse dan Touchpad</span></li>
                            <li>Pada tab  <span class="path"> Device</span> : pilih  <span class="path">touchpad</span> </li>
                            <li>Anda dapat mengubah pengaturan touchpad sesuai dengan keinginan Anda.</li>
                        </ul>
                    </article>

                    <h3 id="suspend-dan-hibernate" class="sub-title"> Suspend dan Hibernate </h3>
                    <article>
                        Untuk menghemat daya, Anda dapat mengalihkan komputer ke salah satu dari sejumlah mode hemat daya ketika Anda tidak menggunakannya:
                        <br/><br/>
                        <span class="path"> Suspend </span> adalah perintah untuk membuat komputer anda seperti tertidur. Komputer masih akan diaktifkan dan semua pekerjaan akan dibiarkan terbuka, dengan menggunakan daya yang lebih sedikit. Anda dapat membangunkan komputer dengan menekan tombol atau mengklik mouse.
                        <br/><br/>
                        <span class="path"> Hibernate </span> adalah mematikan komputer sepenuhnya sambil menyimpan keadaan saat komputer (seperti menjaga semua dokumen yang terbuka). Ketika Anda menghidupkan kembali komputer setelah Hibernate, semua pekerjaan Anda harus dikembalikan seperti sebelum Hibernate. Tidak ada daya yang digunakan saat komputer hibernate.
                        <br/><br/>
                        <span class="path">Shutting Down</span> adalah mematikan komputer sepenuhnya tanpa menyimpan keadaan saat komputer masih hidup. Tidak ada daya yang digunakan saat komputer dimatikan.
                        <br/><br/>
                        <span class="path">Resumming</span> membawa komputer keluar dari mode hemat daya dan kembali ke operasi normal.
                        <br/><br/>
                        Anda dapat secara manual mengalihkan komputer ke mode hemat daya dengan menekan <span class="path">Menu → logout</span> dan kemudian pilih tombol mode yang sesuai.

                        <br/><br/>
                        <h4>Komputer saya tidak Suspend atau hibernasi dengan benar</h4>

                        Beberapa komputer tidak dapat Suspend atau hibernate denga benar di TeaLinuxOS. Anda mungkin melihat beberapa gejala seperti berikut:

                        <ul>
                            <li>Komputer tidak mati setelah Anda klik untuk hibernate itu.</li>
                            <li>Ketika Anda menghidupkan komputer setelah hibernate itu, program yang sebelumnya terbuka Anda tidak hidup.</li>
                            <li>Komputer tidak bangun setelah proses suspend.</li>
                            <li>Program tertentu atau perangkat keras berhenti bekerja dengan benar setelah melanjutkan dari hibernate atau suspend.</li>
                        </ul>

                        Jika Anda mengalami masalah ini, Anda harus <a href="bug.tealinuxos.org">melaporkan bug</a>. Masalah mudah-mudahan akan diperbaiki dalam versi berikutnya dari TeaLinuxOS. Jika hardware Anda tidak bekerja dengan benar setelah suspend atau hibernate komputer, restart komputer Anda. Jika program tidak bekerja dengan benar, cobalah menutup program dan kemudian mulai lagi.
                    </article>

                    <h3 id="mouse-dan-keyboard" class="sub-title"> Mouse dan keyboard </h3>
                    <article>
                        Ketika Anda menginstal TeaLinuxOS Anda diberi pilihan untuk memilih jenis keyboard dan bahasa. Selama instalasi, perangkat penunjuk harus secara otomatis terdeteksi dan dikonfigurasi. Jika Anda ingin atau perlu mengubah pengaturan dari setiap perangkat ini setelah instalasi, Anda dapat melakukannya dengan klik <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings Manager → Mouse dan Touchpad</span> atau <img src="/tealinuxos8_docs/img/screenshot/menu.png" width="40px"> <span class="path"> → Settings Manager → Keyboard</span>.
                        <br/><br/>
                        Pilihan untuk mouse dan touchpad meliputi:
                        <ul>
                            <li>Orientasi tombol</li>
                            <li>Kecepatan pointer dan sensitivitas</li>
                            <li>Sensitivitas double-click</li>
                            <li>Tema Kursor</li>
                        </ul>
                        <br/><br/>
                        Beberapa pilihan untuk mengkonfigurasi keyboard Anda meliputi:
                        <ul>
                            <li>State of the Num Lock key on startup</li>
                            <li>Key repeat speed and delay</li>
                            <li>Cursor blinking speed</li>
                            <li>Application keyboard shortcuts</li>
                            <li>Keyboard layout and language</li>
                        </ul>
                    </article>
                    <hr>

                    <h2 class="title" id="tugas-tugas-administratif"> Tugas-tugas administratif</h2>

                    <h3 id="user-dan-grub" class="sub-title"> User dan Grub </h3>
                    <article>
                        <h4>Mengelola User</h4>
                        <ul>
                            <li><strong>Menambah user baru</strong>
                                <br/><br/>
                                Klik tombol <span class="path">Add</span>
                                <br/>
                                Masukkan password anda
                                <br/>
                                Isikan Name dan Username yang akan digunakan
                                <br/>
                                Klik tombol <span class="path">Ok</span>
                            </li>
                            <br/>
                            <li><strong>Memberikan user hak sebagai super user atau administrator</strong>
                                <br/><br/>
                                pilih User yang tipe akunnya akan diubah, lalu tekan tombol  <span class="path">Change</span>
                                <br/>
                                Pilih tipe Administrator (pilih Dekstop User untuk kembali seperti semula)
                                <br/>
                                Klik tombol <span class="path">Ok</span>
                            </li>
                            <br/>
                            <li><strong>Menghapus user</strong>
                                <br/><br/>
                                Pilih User yang akan dihapus
                                <br/>
                                Klik tombol <span class="path">delete</span>
                            </li>
                        </ul>
                        <h4>Mengelola Grup</h4>
                        <ul>
                            <li><strong>Menambah grup</strong>
                                <br/><br/>
                                Klik tombol <span class="path">Manage Groups</span>
                                <br/>
                                Klik tombol <span class="path">Add</span>
                                <br/>
                                Isikan Nama grup yang anda inginkan, kalau mau anda juga dapat mengubah Group ID.
                                <br/>
                                Pilih User yang akan dimasukkan ke grup tersebut.
                                <br/>
                                Klik tombol <span class="path">Ok</span>
                            </li>
                            <br/>
                            <li><strong>Menghapus Grup</strong>
                                <br/><br/>
                                Klik tombol <span class="path">Manage Groups</span>
                                <br/>
                                Pilih Grup yang akan dihapus
                                <br/>
                                Klik tombol <span class="path">delete</span>
                            </li>
                        </ul>
                    </article>

                    <hr>

                    <h2 class="title" id="perintah-baris"> Perintah Baris</h2>

                    <h3 id="daftar-perintah" class="sub-title"> Daftar Perintah Umum </h3>
                    <article>
                        <h4>Direktori kita berada</h4>
                        Perintah <strong>pwd</strong> atau print working directory digunakan untuk mengetahui posisi direktori dimana kita berada. Cara menggunakan perintah ini tinggal ketikkan perintah <strong>pwd</strong> pada terminal, lalu akan muncul path direktori dimana kita berada.
                        <span class="terminal">pwd</span>

                        <br>
                        <h4>Pindah Direktori (change directory)</h4>
                        Perintah <strong>cd</strong> digunakan untuk mengubah direktori dimana kita berada.
                        <span class="terminal">cd [nama_direktori]</span>
                        Untuk kembali kedirekroti satu level sebelumnya perintah yang digunakan sebagai berikut:
                        <span class="terminal">cd . </span>
                        Untuk kembali kedirektori root perintahnya sebagai berikut:
                        <span class="terminal">cd .. </span>

                        <br>
                        <h4>List</h4>
                        Perintah <strong>ls</strong> digunakan untuk menampilkan daftar file yang ada di direktori.
                        <span class="terminal">ls </span>
                        Untuk menampilkan list file yang ada didirektori tertentu:
                        <span class="terminal">ls [nama_direktori]</span>

                        <br>
                        <h4>Copy File</h4>
                        Perintah <strong>cp</strong> digunakan untuk mengopi file atau direktori ke direktori lain.
                        <span class="terminal">cp [nama_file] [nama_direktori]</span>

                        <br>
                        <h4>Pindah File</h4>
                        Perintah <strong>mv</strong> digunakan untuk memindah file atau direktori ke direktori lain.
                        <span class="terminal">mv [nama_file] [nama_direktori]</span>

                        <br>
                        <h4>Hapus File</h4>
                        Perintah <strong>rm</strong> digunakan untuk menghapus file atau direktori ke direktori lain.
                        <span class="terminal">rm [nama_file]</span>

                        <br>
                        <h4>Penggunaan perintah</h4>
                        Perintah <strong>man</strong> digunakan untuk menampilkan cara penggunaan suatu perintah.
                        <span class="terminal">man [nama_perintah]</span>
                        <span class="terminal">man rm</span>

                    </article>

                    <h3 id="perintah-sudo" class="sub-title">Menjalankan Perintah dengan Hak Administrasi</h3>
                    <article>
                        Ketika kita bekerja dengan perintah-perintah baris, beberapa perintah tidak bisa dilakukan tanpa hak administrator, sehingga butuh perintah <strong>sudo</strong> di awal setiap perintah tersebut. Sesaat setelah anda memberi perintah <strong>sudo</strong> sistem akan meminta password lalu akan mengingatnya selama 15 menit. Dalam waktu 15 menit ini anda dapat menjalankan perintah <strong>sudo</strong> tanpa harus mengetik password setiap kali menjalankan perintahnya.
                        <span class="terminal">sudo apt-get update </span>
                    </article>

                    <hr>

                    <h2 class="title" id="daftar-aplikasi"> Daftar Aplikasi</h2>

                    <article>

                    </article>

                    <hr>

                    <h2 class="title" id="lisensi"> Lisensi </h2>

                    <article>
                        Lisensi : Creative Commons
                    </article>


                </div>
            </div>
        </section>
        <a id="top">top</a>
    </main>

@endsection

@section('footer')


    <script src="{{asset('/tealinuxos8_docs/js/prettify/prettify.js')}}"></script>
    <script src="{{asset('/tealinuxos8_docs/js/layout.js')}}"></script>
    <script src="{{asset('/tealinuxos8_docs/js/jquery.localscroll-1.2.7.js')}}"></script>
    <script src="{{asset('/tealinuxos8_docs/js/jquery.scrollTo.min.js')}}"></script>


    <script type="text/javascript">
        $('#top').click(function () {
            $('html,body').scrollTo('1', 500);
        });

        $("#year").html((new Date).getFullYear());

    </script>
@endsection