<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Jemaat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Jemaat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row text-center justify-content-center">
        <div class="col-12">
            <div class="flash">
                <?php Flasher::flash(); ?>
            </div>
        </div>
    </div>

    <section class="section dashboard">
        <div class="row">

            <!-- Tabel Jemaat -->
            <div class="col-12">

                <div class="card recent-sales overflow-auto">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Baoa</a></li>
                            <li><a class="dropdown-item" href="#">Borua</a></li>
                            <li><a class="dropdown-item" href="#">Ama</a></li>
                            <li><a class="dropdown-item" href="#">Ina</a></li>
                            <li><a class="dropdown-item" href="#">Naposo</a></li>
                            <li><a class="dropdown-item" href="#">Remaja</a></li>
                            <li><a class="dropdown-item" href="#">Dakdanak</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Tabel Jemaat <span>| HKBP Kutajaya</span></h5>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3 tampilModalTambah" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data Jemaat
                        </button>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Umur </th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Wijk</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['jemaat'] as $jemaat) : ?>
                                <tr>
                                    <th scope="row"><a href="#"><?= $i++ ?></a></th>
                                    <td><?= $jemaat['nama_jemaat']; ?></td>
                                    <td><?= $jemaat['umur']; ?></td>
                                    <td><?= $jemaat['alamat_jemaat']; ?></td>
                                    <td><?= $jemaat['nama_wijk']; ?></td>
                                    <td><?= $jemaat['jenis_kelamin']; ?></td>
                                    <td><?= $jemaat['status_menikah']; ?></td>
                                    <td><a href="ubahjemaat" class="badge bg-primary me-1 tampilModalUbah"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal" id="ubahjemaat"
                                            data-id="<?= $jemaat['id_jemaat'];?>">Edit</a>
                                        <a href="<?= BASEURL; ?>admin/hapusjemaat/<?= $jemaat['id_jemaat']; ?>"
                                            class="badge bg-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Recent Sales -->


        </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Data
                    Jemaat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form Tambah Data Jemaat -->
            <div class="modal-body">
                <form action="<?= BASEURL; ?>admin/tambahjemaat" method="post">
                    <input type="hidden" id="id_jemaat" name="id_jemaat">
                    <div class="mb-3 row">
                        <label for="nama-jemaat" class="col-sm-3 col-form-label">Nama
                            Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_jemaat" name="nama_jemaat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_nik" class="col-sm-3 col-form-label">Nomor Induk
                            KTP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_kk" class="col-sm-3 col-form-label">Nomor Kartu
                            Keluarga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="no_kk" name="no_kk">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat_jemaat" class="col-sm-3 col-form-label">Alamat
                            Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat_jemaat" name="alamat_jemaat"
                                rows="3"></input>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat
                            Lahir</label>
                        <div class="col-sm-3 mb-3">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                        </div>
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal
                            Lahir</label>
                        <div class="col-sm-3">
                            <div class="input-group date">
                                <input type="text" class="form-control" value="yyyy-mm-dd" id="tanggal_lahir"
                                    name="tanggal_lahir">
                                <span class="glyphicon glyphicon-th"></span>
                                <div class="input-group-addon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis
                            Kelamin</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                <option></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status_menikah" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="status_menikah" name="status_menikah">
                                <option></option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="wijk" class="col-sm-3 col-form-label">Wijk</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="wijk" name="wijk">
                                <option></option>
                                <option value="1">Jeriko</option>
                                <option value="2">Efrata</option>
                                <option value="3">Judea</option>
                                <option value="4">Betlehem</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->