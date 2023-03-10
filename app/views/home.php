    <!-- Swipper section starts  -->
    <section class="slider" id="slider">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url(<?= BASEURL; ?>public/img/home-bg-1.jpg) no-repeat;">
                        <div class="content">
                            <span>Selamat datang di website resmi</span>
                            <h3>HKBP KUTAJAYA</h3>
                            <p>Selamat beribadah, Tuhan Yesus memberkati..</p>
                            <!-- <a href="solution.php" class="btn">get started</a> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box " style="background: url(<?= BASEURL; ?>public/img/home-bg-2.jpg) no-repeat;">
                        <div class="content">
                            <span>Selamat datang di website resmi</span>
                            <h3>HKBP KUTAJAYA</h3>
                            <p>Selamat beribadah, Tuhan Yesus memberkati..</p>
                            <!-- <a href="solution.php" class="btn">get started</a> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(<?= BASEURL; ?>public/img/home-bg-3.jpg) no-repeat;">
                        <div class="content">
                            <span>Selamat datang di website resmi</span>
                            <h3>HKBP KUTAJAYA</h3>
                            <p>Selamat beribadah, Tuhan Yesus memberkati..</p>
                            <!-- <a href="solution.php" class="btn">get started</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Swipper section ends -->


    <!-- ======= About Us Section ======= -->
    <section id="warta-jemaat" class="warta-jemaat">
        <div class="container">
            <div class="section-title section-title1" data-aos="fade-up">
                <h1 class="heading">WARTA JEMAAT <br> HKBP KUTAJAYA</h1>
            </div>
            <hr>

            <?php foreach ($data["warta"] as $warta) : ?>
            <div class="row content pb-4">
                <div class="col-sm text-center" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <p class="tanggal">
                        <?= $warta['tanggal']; ?>
                    </p>
                </div>
                <div class="col-sm text-center" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <a href="<?= $warta['link_warta']; ?>" class="btn btn-primary rounded-pill"
                        type="button">Download</a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </section>
    <!-- End About Us Section -->




    <!-- about section starts  -->
    <section class="about" id="about">
        <div class="image" data-aos="zoom-in-up">
            <img src="<?= BASEURL; ?>public/img/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3 data-aos="fade-up" data-aos-delay="100">Dasar Pelayanan HKBP Kutajaya</h3>
            <div data-aos="fade-up" data-aos-delay="150">
                <p>Prinsip HKBP Tebet Pada dasarnya prinsip yang dikembangkan dalam menjalankan visidan misi akan
                    mencakup beberapa prinsip, antara lain:
                    Melayani sebagai bagian mengaktualisasikan firman Tuhan dalam kehidupan sehari-hari
                    Menjadi Garam dan Terang sehingga kehadiran jemaat HKBP Tebet bermanfaat dan berguna
                    Menjaga keutuhan ciptaan sebagai bagian masyarakat global yang menghadapi krisis lingkungan
                    Menyuarakan perdamaian dan suara keadilan dalam hidup berjemaat</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <p>Visi HKBP Tebet Membangun jemaat di HKBP Tebet yang missioner,inklusif, terbuka dan dialogis untuk
                    menjadi pewarta kasih Kristus.</p>
                <p>Misi HKBP Tebet HKBP Tebet berusaha dan berupaya untuk membangun dan meningkatkan Kematangan Iman
                    Jemaat sehingga semua jemaat HKBP Tebet bisa menjadi terang dan garam buat lingkungan sebagai bagian
                    menjaga keutuhan ciptaan serta menciptakan jemaat yang mandiri.</p>
                <!-- <a href="#" class="btn btn-primary rounded-pill">Download</a> -->
            </div>
        </div>
    </section>
    <!-- about section ends -->




    <!-- Our Services -->
    <!-- <section class="our-services">
        <div class="container">
            <div class="section-title section-title1" data-aos="fade-up">
                <h1 class="heading">JADWAL PELAYANAN</h1>
                <p>
                    MDS solution deliver bright solutions to make your data and system ???Secure and Strengthen??? with
                    smart design, high technology in its development and operational.
                </p>
            </div>
            <div class="col-12">
                <div class="card h-100 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="<?= BASEURL; ?>public/img/datacenter.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Data Center Design & Assessment</h5>
                        <p class="card-text">MDS offers a comprehensive array of facility and support infrastructure
                            design and assessment services aimed at providing clients with recommendations that save
                            money, reduce the time spent implementing upgrades and improvements, and maximize the
                            availability of data centers, computer rooms, and other mission critical facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card h-100 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= BASEURL; ?>public/img/datacenterconstruction.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Data Center Construction</h5>
                        <p class="card-text">MDS is an Data Center infrastructure solutions provider specializing in
                            highly available, scalable, redundant and manageable, turnkey solutions for IT
                            environments
                            from utility-to-desktop.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <img src="<?= BASEURL; ?>public/img/cable.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Structured Cabling System</h5>
                        <p class="card-text">MDS is the best choice for being partner in Cabling System Solutions,
                            design, implementation, and maintenance. We provide professional service especially in
                            Enterprise solution in Structured Data Cabling System.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 icon-box" data-aos="zoom-in" data-aos-delay="400">
                    <img src="<?= BASEURL; ?>public/img/electrical.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mechanical/Electrical Development System</h5>
                        <p class="card-text">We offer our customer a range of high quality general mechanical,
                            electrical and instrumentation work for energy conservation (HVAC) including: System
                            Planning, Installation, Optimization, Re-Engineering, Feasibility Study, Construction
                            Management and Maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> -->


    <section class="our-service">
        <div class="container">
            <div class="section-title section-title1" data-aos="fade-up">
                <h1 class="heading">JADWAL IBADAH</h1>
                <h2>HKBP KUTAJAYA</h2>
            </div>
            <div class="row tempat-jadwal justify-content-center" data-aos="fade-up">
                <div class="col-sm-1 align-self-center me-4" id="logo-pelayanan">
                    <img src="<?= BASEURL; ?>public/img/bi.png" class="img-thumbnail border-0" alt="...">
                </div>
                <div class="col-sm-6 black p-3">
                    <div class="row ">
                        <div class="col-sm-4 jp-1">
                            <h2>IBADAH PAGI</h2>
                            <h3>Setiap Minggu</h3>
                            <h4>Gerejaa HKBP KUTAJAYA</h4>
                        </div>
                        <div class="col-sm-3 jp-2 text-center  align-self-center">
                            <h2>Mulai Pukul</h2>
                            <h2>08:00 WIB</h2>
                        </div>
                        <div class="col-sm-4 jp-3">
                            <h2>Gereja Online</h2>
                            <h3><a href="youtube.com/gerejahkbp">Link Youtube</a></h3>
                            <h3><a href="youtube.com/gerejahkbp">Link ZOOM</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tempat-jadwal justify-content-center " data-aos="fade-up">
                <div class="col-1 tes align-self-center me-4 ">
                    <img src="<?= BASEURL; ?>public/img/bi.png" class="img-thumbnail border-0" alt="...">
                </div>
                <div class="col-sm-6 black p-3">
                    <div class="row">
                        <div class="col-sm-4 jp-1">
                            <h2>IBADAH SIANG</h2>
                            <h3>Setiap Minggu</h3>
                            <h4>Gerejaa HKBP KUTAJAYA</h4>
                        </div>
                        <div class="col-sm-3 jp-2 text-center  align-self-center">
                            <h2>Mulai Pukul</h2>
                            <h2>09:30 WIB</h2>
                        </div>
                        <div class="col-sm-4 jp-3">
                            <h2>Gereja Online</h2>
                            <h3><a href="youtube.com/gerejahkbp">Link Youtube</a></h3>
                            <h3><a href="youtube.com/gerejahkbp">Link ZOOM</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tempat-jadwal justify-content-center " data-aos="fade-up">
                <div class="col-1 tes align-self-center me-4 ">
                    <img src="<?= BASEURL; ?>public/img/bi.png" class="img-thumbnail border-0" alt="...">
                </div>
                <div class="col-sm-6 black p-3">
                    <div class="row">
                        <div class="col-sm-4 jp-1">
                            <h2>IBADAH SORE</h2>
                            <h3>Setiap Minggu</h3>
                            <h4>Gerejaa HKBP KUTAJAYA</h4>
                        </div>
                        <div class="col-sm-3 jp-2 text-center  align-self-center">
                            <h2>Mulai Pukul</h2>
                            <h2>17:00 WIB</h2>
                        </div>
                        <div class="col-sm-4 jp-3">
                            <h2>Gereja Online</h2>
                            <h3><a href="youtube.com/gerejahkbp">Link Youtube</a></h3>
                            <h3><a href="youtube.com/gerejahkbp">Link ZOOM</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tempat-jadwal justify-content-center " data-aos="fade-up">
                <div class="col-1 tes align-self-center me-4 ">
                    <img src="<?= BASEURL; ?>public/img/bi.png" class="img-thumbnail border-0" alt="...">
                </div>
                <div class="col-sm-6 black p-3">
                    <div class="row">
                        <div class="col-sm-4 jp-1">
                            <h2>SEKOLAH MINGGU</h2>
                            <h3>Setiap Minggu</h3>
                            <h4>RUANG SEKOLAH MINGGU</h4>
                        </div>
                        <div class="col-sm-3 jp-2 text-center  align-self-center">
                            <h2>Mulai Pukul</h2>
                            <h2>08:00 WIB</h2>
                        </div>
                        <div class="col-sm-4 jp-3">
                            <h2>Gereja Online</h2>
                            <h3><a href="youtube.com/gerejahkbp">Link Youtube</a></h3>
                            <h3><a href="youtube.com/gerejahkbp">Link ZOOM</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tempat-jadwal justify-content-center " data-aos="fade-up">
                <div class="col-1 tes align-self-center me-4 ">
                    <img src="<?= BASEURL; ?>public/img/bi.png" class="img-thumbnail border-0" alt="...">
                </div>
                <div class="col-sm-6 black p-3">
                    <div class="row">
                        <div class="col-sm-4 jp-1">
                            <h2>IBADAH NAPOSO</h2>
                            <h3>Setiap Sabtu</h3>
                            <h4>Gerejaa HKBP KUTAJAYA</h4>
                        </div>
                        <div class="col-sm-3 jp-2 text-center  align-self-center">
                            <h2>Mulai Pukul</h2>
                            <h2>20:00 WIB</h2>
                        </div>
                        <div class="col-sm-4 jp-3">
                            <h2>Gereja Online</h2>
                            <h3><a href="youtube.com/gerejahkbp">Link Youtube</a></h3>
                            <h3><a href="youtube.com/gerejahkbp">Link ZOOM</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>