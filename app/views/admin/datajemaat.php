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

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Tabel Jemaat <span>| HKBP Kutajaya</span></h5>

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
                                <?php $i=1; ?>
                                <?php foreach ($data['jemaat'] as $jemaat) : ?>
                                <tr>
                                    <th scope="row"><a href="#"><?= $i++ ?></a></th>
                                    <td><?= $jemaat['nama_jemaat']; ?></td>
                                    <td><?= $jemaat['umur']; ?></td>
                                    <td><?= $jemaat['alamat_jemaat']; ?></td>
                                    <td><?= $jemaat['nama_wijk']; ?></td>
                                    <td><?= $jemaat['jenis_kelamin']; ?></td>
                                    <td><?= $jemaat['status_menikah']; ?></td>
                                    <td><span class="badge bg-success me-3">Edit</span><span
                                            class="badge bg-danger">Hapus</span></td>
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