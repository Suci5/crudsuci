<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Pinjol
                </div>

                <div class="card-body">
                    <form action="<?= base_url('Pinjol/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $pinjol['id']; ?>">
                        <div class=" form-group">
                            <label for="nama">NIK</label>
                            <input type="text" name="nik" value="<?= $pinjol['nik']; ?>" class=" form-control" id="nama" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nama</label>
                            <input type="text" name="nama_lengkap" value="<?= $pinjol['nama_lengkap']; ?>" class="form-control" id="nim" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">Alamat</label>
                            <input type="text" name="alamat" value="<?= $pinjol['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="email">No.HP</label>
                            <input type="text" name="no_hp" value="<?= $pinjol['no_hp']; ?>" class="form-control" id="no_hp" placeholder="No.HP">
                        </div>
                        <div class="form-group">
                            <label for="nim">Email</label>
                            <input type="text" name="email" value="<?= $pinjol['email']; ?>" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="nim">Besar Peminjaman</label>
                            <input type="text" name="besar_peminjaman" value="<?= $pinjol['besar_peminjaman']; ?>" class="form-control" id="besar_peminjaman" placeholder="Besar Pinjam">
                        </div>
                        <div class="form-group">
                            <label for="nim">Durasi Peminjaman</label>
                            <input type="text" name="durasi" value="<?= $pinjol['durasi']; ?>" class="form-control" id="durasi" placeholder="Durasi">
                        </div>
                        <a href="<? base_url('pinjol') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                            Pinjol</button>
                    </form>
                </div>
            </div>
        </div>