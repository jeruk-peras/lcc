<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Karyawan</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Karyawan</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Form Karyawan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Karyawan</div>
                    </div>
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Nama Karyawan <span class="text-danger">* <?= validation_show_error('nama_karyawan') ?></span></label>
                                        <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" value="<?= old('nama_karyawan'); ?>" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor Telepon <span class="text-danger">* <?= validation_show_error('no_telepon') ?></span></label>
                                        <input type="text" name="no_telepon" class="form-control" placeholder="Nomor Telepon" value="<?= old('no_telepon'); ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">* <?= validation_show_error('email') ?></span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?= old('email'); ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Alamat <span class="text-danger">* <?= validation_show_error('alamat') ?></span></label>
                                        <textarea name="alamat" class="form-control" rows="4" id=""><?= old('alamat'); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">* <?= validation_show_error('username') ?></span></label>
                                        <input type="text" name="username" class="form-control" placeholder="username" value="<?= old('username'); ?>" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">* <?= validation_show_error('role') ?></span></label>
                                        <select name="role" class="form-select" id="">
                                            <option value="" hidden>-- Pilih --</option>
                                            <option value="Admin" <?= old('role') == 'Admin' ? 'selected' : '' ?> >Admin</option>
                                            <option value="Kasir" <?= old('role') == 'Kasir' ? 'selected' : '' ?> >Kasir</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">* <?= validation_show_error('password') ?></span></label>
                                        <input type="password" name="password" class="form-control" placeholder="password" value="<?= old('password'); ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-danger">* <?= validation_show_error('confirm_password') ?></span></label>
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>