<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Pinjol
                </div>

                <div class="card-body">
                    <form action="<?= base_url('Pinjol/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nama</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="email">Besar Peminjaman</label>
                            <input type="text" name="besar_peminjaman" class="form-control" id="besar_peminjaman" placeholder="Besar Peminjaman">
                        </div>
                        <div class="form-group">
                            <label for="email">Durasi</label>
                            <input type="text" name="durasi" class="form-control" id="durasi" placeholder="Durasi">
                        </div>


                        <a href="<?= base_url('pinjol') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Pinjol</button>
                    </form>
                </div>
            </div>
        </div>