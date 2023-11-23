<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">

                            <h3 class="text-center font-weight-light my-4">Buat Akun</h3>

                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" value="<?= set_value('nama'); ?>" id="inputFirstName" type="text" name="nama" placeholder="Enter your first name" />
                                                <label for="inputFirstName">Nama</label>
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="<?= set_value('email'); ?>" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Alamat Email</label>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="password1" value="<?= set_value('password1') ?>" id="inputFirstName" type="password" placeholder="Enter your password" />
                                                <?= form_error('password1', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                <label for="inputFirstName"> password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="password2" value="<?= set_value('password2') ?>" id="inputFirstName" type="password" placeholder="Enter your password" />
                                                <?= form_error('password2', '<small class = "text-danger pl-3">', '</small>'); ?>
                                                <label for="inputFirstName">Confirm password</label>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" style="background-color: #684464;color: white;" class="btn btn-block">Create Account</button></div>
                                        </div>
                                </form>
                            </div>
                            <div class=" text-center py-3">
                                Sudah Mempunyai Akun? <a class="text-decoration-none" style="color: #684464;" href="<?= base_url('Auth'); ?>">Klik Untuk Login</a>
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