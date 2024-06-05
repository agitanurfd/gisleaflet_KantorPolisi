@extends("layouts.landing-page")

@section("css")
<style>
    #map {
        height: 400px;
    }
</style>
@endsection

@section("content")
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1>Selamat Datang di POLRESTABES Bandung</h1>
                    <h2>Selamat datang di POLRESTABES Bandung, di mana kami berkomitmen untuk memberikan akses mudah dan cepat kepada informasi keamanan di sekitar Anda. Dengan bantuan teknologi geospasial, kami memastikan bahwa Anda dapat dengan mudah menemukan dan mengakses kantor polisi terdekat.</h2>
                    <!-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
<a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="{{URL::to('/')}}/assets/img/polrestabes.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>Polrestabes Bandung merupakan kependekan dari Kepolisian Resort Kota Besar Bandung, yang merupakan lembaga penegak hukum di wilayah Kota Bandung, Jawa Barat. Polrestabes Bandung bertanggung jawab atas penegakan hukum,
                    pencegahan kejahatan, dan pemeliharaan keamanan di kota tersebut. Dengan personel yang terlatih dan peralatan yang memadai, Polrestabes Bandung berperan penting dalam menjaga ketertiban dan
                    keamanan masyarakat serta menangani berbagai kasus kriminal dan pelanggaran hukum di wilayahnya.. Berikut adalah gambaran singkat tentang nilai, visi, dan misi kami:</p>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4>Misi</h4>
                                <p>Kami berkomitmen untuk menyediakan akses yang mudah dan cepat kepada informasi keamanan di sekitar masyarakat. Dengan memanfaatkan teknologi geospasial, kami memungkinkan masyarakat untuk dengan mudah menemukan lokasi kantor polisi, pos polisi, dan mendapatkan informasi keamanan lainnya.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Visi</h4>
                                <p>Visi kami adalah menciptakan lingkungan yang aman dan terinformasi. Melalui pemanfaatan teknologi SIG, kami berharap dapat memberikan alat yang bermanfaat bagi masyarakat untuk memahami, melaporkan, dan berpartisipasi dalam menjaga keamanan lingkungan mereka.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{URL::to('/')}}/assets/img/visimisi.jpg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End App Features Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <ol>
                    <li>Peta Interaktif</li>
                    <p>Gunakan peta interaktif kami untuk menemukan lokasi kantor polisi dan pos polisi terdekat. Peta kami memberikan informasi terkini dan akurat untuk memastikan Anda dapat dengan cepat mengakses layanan keamanan yang Anda butuhkan.</p>
                    <li>Statistik Kejahatan</li>
                    <p>Dapatkan wawasan mendalam tentang keamanan di sekitar Anda dengan melihat statistik kejahatan terbaru. Kami menyajikan data yang relevan dan terkini untuk membantu Anda memahami tren kejahatan dan tingkat keamanan di wilayah tertentu.</p>
                    <li>Laporan Kejahatan Online</li>
                    <p>Mengalami atau menyaksikan kejadian kriminal? Gunakan layanan pelaporan kejahatan online kami untuk memberikan informasi dengan cepat kepada pihak berwenang. Kami mengutamakan keamanan dan kerahasiaan dalam setiap laporan yang diterima.</p>
                    <li>Pemberitahuan Keamanan</li>
                    <p>
                        Langganan pemberitahuan keamanan dari kami untuk mendapatkan informasi terkini tentang kejadian penting, patroli keamanan, dan informasi keamanan lainnya. Kami memberikan pemberitahuan secara langsung kepada Anda melalui email atau pesan singkat.
                    </p>
                    <li>Edukasi Keamanan Masyarakat</li>
                    <p>Ikuti program edukasi keamanan masyarakat kami untuk meningkatkan kesadaran tentang praktik keamanan dan pencegahan kejahatan. Kami menyediakan materi edukatif dan seminar online secara berkala.</p>
                </ol>
            </div>
        </div>
        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h2>Frequently Asked Questions</h2>
                <p>Kami berusaha memberikan jawaban atas pertanyaan yang sering diajukan untuk memudahkan Anda dalam menggunakan layanan kami. Jika pertanyaan Anda tidak terjawab di sini, jangan ragu untuk menghubungi tim dukungan kami.</p>
            </div>

            <div class="accordion-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"> Apa itu Sistem Informasi Geografis Kantor Polisi?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                            <p>
                                Sistem Informasi Geografis (SIG) Kantor Polisi adalah platform digital yang menyediakan akses mudah dan cepat ke informasi keamanan di sekitar masyarakat. Melalui teknologi geospasial, SIG memungkinkan pengguna untuk menemukan lokasi kantor polisi, melihat statistik kejahatan, dan melaporkan kejadian secara online.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Bagaimana Cara Menggunakan Peta Interaktif?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Untuk menggunakan peta interaktif, cukup ketikkan alamat atau lokasi Anda pada kolom pencarian. Peta akan menampilkan kantor polisi, pos polisi, dan informasi keamanan lainnya di sekitar area tersebut. Klik pada penanda untuk mendapatkan rincian lebih lanjut.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Bagaimana Cara Melaporkan Kejahatan Online?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Anda dapat melaporkan kejahatan dengan mengakses layanan pelaporan kejahatan online kami. Isi formulir pelaporan dengan detail yang akurat, dan informasi Anda akan diteruskan kepada pihak berwenang. Pastikan untuk memberikan informasi sejelas mungkin.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Apakah Layanan Ini Gratis Digunakan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Ya, layanan dasar kami, seperti penggunaan peta interaktif dan akses informasi dasar, tersedia secara gratis. Namun, ada kemungkinan beberapa layanan tambahan atau fitur khusus memerlukan biaya tambahan. Pastikan untuk memeriksa detailnya di bagian layanan kami.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">Bagaimana Saya Dapat Berkontribusi dalam Edukasi Keamanan Masyarakat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Kami mengundang Anda untuk berpartisipasi dalam program edukasi keamanan masyarakat kami. Anda dapat menyebarkan informasi tentang praktik keamanan, mengikuti seminar online, atau berbagi sumber daya pendidikan dengan masyarakat di sekitar Anda.
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacts</h2>
                <p>Kami senang mendengar dari Anda dan siap membantu dengan pertanyaan, umpan balik, atau bantuan teknis. Silakan pilih cara terbaik untuk menghubungi tim kami.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 info">
                            <i class="bx bx-map"></i>
                            <h4>Address</h4>
                            <p>Jl. Merdeka No.18-21, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-phone"></i>
                            <h4>Call Us</h4>
                            <p>(022)4238858</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-envelope"></i>
                            <h4>Email Us</h4>
                            <p>polisi@gmail.com</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-time-five"></i>
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 24 Jam<br>Sunday: Tutup</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                        <div class="form-group">
                            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group mt-3">
                            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- Google Maps -->
<div style="text-align: center;">
    <h3>KANTOR POLISI TERDEKAT</h3>
    <div id="map"></div>
</div>
@endsection
@section("script")
<script>
    $(function() {
        var map = L.map('map').setView([-6.869688043085771, 107.57125854492189], 13);

        L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        var markers = L.markerClusterGroup();

        @foreach($kantorPolisi as $index => $row)

        var popupContent = '<strong>{{$row->kantorpolisi}}</strong><br>Alamat: {{$row->alamat}}<br>No.HP: {{$row->nohp}}<br>Jam Operasional: {{$row->jamoperasional}}<br><br><a href="{{route("police-station.show",$row->id)}}">Buka di Halaman Baru</a> atau <a href="https://www.google.com/maps?q={{$row->latitude}},{{$row->longitude}}" target="_blank">Buka di Google Maps</a>';
        var marker = L.marker(['{{$row->latitude}}', '{{$row->longitude}}']).bindPopup(popupContent);
        markers.addLayer(marker);
        @endforeach

        map.addLayer(markers);
    });
</script>
@endsection