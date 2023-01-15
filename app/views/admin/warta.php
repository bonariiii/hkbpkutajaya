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
                        <h5 class="card-title">Tabel Warta Jemaat <span>| HKBP Kutajaya</span></h5>

                        <!-- Button trigger modal TAMBAH WARTA -->
                        <button type="button" class="btn btn-primary mb-3 tampilModalTambahWarta" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Warta Jemaat
                        </button>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanggal Warta</th>
                                    <th scope="col">Link Warta</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data['warta'] as $warta) : ?>
                                <tr>
                                    <th scope="row"><a href="#"><?= $i++ ?></a></th>
                                    <td><?= $warta['tanggal']; ?></td>
                                    <td><?= $warta['link_warta']; ?></td>
                                    <td><a href="admin/warta" class="badge bg-primary me-1 tampilModalUbahWarta"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal" id="ubahwarta"
                                            data-id="<?= $warta['id_warta'];?>">Edit</a>
                                        <a href="<?= BASEURL; ?>admin/hapuswarta/<?= $warta['id_warta']; ?>"
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
                    Warta Jemaat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form Tambah Data Jemaat -->
            <div class="modal-body">
                <form action="<?= BASEURL; ?>admin/tambahwarta" method="post">
                    <input type="hidden" id="id_warta" name="id_warta">
                    <div class="mb-3 row">
                        <label for="tanggal_warta" class="col-sm-3 col-form-label">Tanggal Warta</label>
                        <div class="col-sm-9">
                            <div class="input-group date">
                                <input type="text" class="form-control" value="yyyy-mm-dd" id="tanggal_warta"
                                    name="tanggal_warta">
                                <span class="glyphicon glyphicon-th"></span>
                                <div class="input-group-addon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="link_warta" class="col-sm-3 col-form-label">Link Warta</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="link_warta" name="link_warta">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Warta</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->