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
                                <img src="<?= BASEURL; ?>public/assets_admin/img/logo.png" alt="">
                                <span class="d-none d-lg-block">HKBP KUTAJAYA</span>
                            </a>
                        </div><!-- End Logo -->



                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login Akun</h5>
                                    <p class="text-center small">Masukan Nama dan Password untuk login</p>
                                </div>
                                <form action="<?= BASEURL; ?>login/auth" method="post" class="row g-3 needs-validation"
                                    novalidate>
                                    <div class="col-12">
                                        <label for="nama" class="form-label">nama</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="nama" class="form-control" id="nama" required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Ingatkan Saya</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Belum punya akun? <a href="<?= BASEURL; ?>registrasi">Buat
                                                akun
                                                terlebih dahulu</a></p>
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