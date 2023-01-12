<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                    <p class="text-center small">Masukan Data anda</p>
                                </div>

                                <form action="<?= BASEURL; ?>/registrasi/tambah" method="post"
                                    class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" required>
                                        <div class="invalid-feedback">Mohon isi nama anda!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Mohon masukan email dengan benar!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                        <div class="invalid-feedback">Mohon mengisi Password</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password2" class="form-label">Ulangi Password</label>
                                        <input type="password" name="password2" class="form-control" id="password2"
                                            required>
                                        <div class="invalid-feedback">Mohon masukan Password</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value=""
                                                id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">Saya menyetujui <a
                                                    href="#">persyaratan dan ketentuan yang berlaku</a></label>
                                            <div class="invalid-feedback">Anda harus menyetujui sebelum melanjutkan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Sudah punya akun? <a href="pages-login.html">Log
                                                in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->