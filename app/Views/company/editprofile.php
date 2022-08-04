<?= $this->extend('company/default'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="ont-weight-bold text-primary">FORM EDIT COMPANY</h4>
                </div>
                <form action="/dashboard/company/profile/update/<?= $companies['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-group row mb-4">
                            <label for="nama" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $companies['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="alamat" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $companies['alamat']; ?>">
                            </div>
                        </div>

                         <div class="form-floating mb-4">
                            <select name="jenis_devices" class="form-select form-input" id="floatingSelect" aria-label="Floating label select example">
                            <option selected hidden>Open this select menu</option>
                            <option <?= old('jenis_devices') == 'handphone' ? "selected"  : null ?> value="handphone">Handphone</option>
                            <option <?= old('jenis_devices') == 'laptop' ? "selected"  : null ?> value="laptop">Laptop</option>
                            <option <?= old('jenis_devices') == 'pc' ? "selected"  : null ?> value="pc">PC</option>
                            <option <?= old('jenis_devices') == 'printer' ? "selected"  : null ?> value="printer">Printer</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="harga" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $companies['harga']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $companies['email']; ?>">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Ubah Data</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>