        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Peminjaman Online</h1>
                </div>
            </main>
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="row">
                    <div class="col-md-6"><a href="<?= base_url('Pinjol/tambah') ?>" class="btn btn-info mb-2">Tambah Pinjol</a></div>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>No.HP</td>
                                <td>Besar Peminjaman</td>
                                <td>Durasi Peminjaman</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pinjol as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama_lengkap']; ?></td>
                                    <td><?= $us['nik']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Pinjol/hapus/') . $us['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                                        <a href="<?= base_url('Pinjol/edit/') . $us['id']; ?>" class="btn btn-outline-warning">Edit</a>
                                        <a href="<?= base_url('Pinjol/detail/') . $us['id']; ?>" class="btn btn-outline-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>