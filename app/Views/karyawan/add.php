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
                                        <label>Nama Karyawan <span class="text-danger">*</span></label>
                                        <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor Telepon <span class="text-danger">*</span></label>
                                        <input type="text" name="no_telepon" class="form-control" placeholder="Nomor Telepon" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" />
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Alamat <span class="text-danger">*</span></label>
                                        <textarea name="alamat" class="form-control" rows="4" id=""></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control" placeholder="username" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <select name="role" class="form-select" id="">
                                            <option value="" hidden>-- Pilih --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Kasir">Kasir</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" placeholder="password" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
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