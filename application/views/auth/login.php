<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg  border-0 rounded-lg mt-5">
                            <div class="card-body">

                                <h3 class="text-center font-weight-light my-4">Masuk</h3>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="<?= set_value('email'); ?>" id="email" type="email" placeholder="name@example.com" name="email" />
                                        <?= form_error('email', '<small class="text-danger pl-3>', '</small>') ?>
                                        <label for="inputEmail">Alamat Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="<?= set_value('nama'); ?>" id="password" type="password" placeholder="Password" name="password" />
                                        <?= form_error('password', '<small class="text-danger pl-3' . '</small>'); ?>
                                        <label for="inputPassword">Kata Sandi</label>
                                    </div>
                                    <div><a class="small text-decoration-none" style="color: #684464;" href="password.html">Tidak Ingat Kata Sandi?</a></div>
                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <!-- <a class="btn btn-primary" href="<?= base_url('auth/cek_login'); ?>">Login</a> -->
                                        <button style="background: #684464;color: white;width: 100%;" type="submit" class="btn" href="<?= base_url('auth/cek_login'); ?>">Masuk</button>
                                    </div>
                                </form>
                            </div>
                            <div class=" text-center pb-4">
                                <div class="small">Belum Mempunyai Akun? <a href="<?= base_url('Auth/register'); ?>" style="color: #684464;" class="text-decoration-none">Daftar Sekarang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>