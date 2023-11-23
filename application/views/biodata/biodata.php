<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">

                            <h3 class="text-center font-weight-light my-4">Biodata</h3>

                            <div class="card-body">
                                <form class="" method="POST" action="">
                                    <div class="row mb-3">
                                    <label for="inputFirstName">Nama</label>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                            
                                                <input class="form-control" value="<?= set_value('nama'); ?>" id="nama"
                                                    type="text" name="nama" placeholder="Isi nama kamu" />
                                                
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                    <label for="gender">Jenis Kelamin</label>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                           
                                                <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>"
                                                    id="jk" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Laki-Laki">Laki Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <!-- <label for="gender">Jenis Kelamin</label> -->
                                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="tgl_lahir"
                                                    value="<?= set_value('tgl_lahir') ?>" id="tgl_lahir" type="date"
                                                    placeholder="Isi tanggal lahir" />
                                                <?= form_error('tgl_lahir', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                    <label for="hobi">Hobi</label>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="hobi" value="<?= set_value('hobi') ?>"
                                                    id="hobi" type="text" placeholder="Isi hobi" max="100" />
                                                <?= form_error('hobi', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                    <label for="file_ktp" class="d-block">Upload Foto</label>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">

                                                <input id="file_ktp" type="file" class="form-control" name="foto">
                                                
                                                <small>* Gunakan file extension jpg/png/gif</small>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <!-- <a class="btn btn-primary" href="<?= base_url('auth/cek_login'); ?>">Login</a> -->
                                        <button style="background: #684464;color: white;width: 100%;" type="submit"
                                            class="btn">Kirim</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
</body>

</html>