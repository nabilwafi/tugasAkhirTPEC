<?= $this->extend('admin/default'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="ont-weight-bold text-primary">FORM EDIT COMPANY</h4>
                </div>
                <form action="/dashboard/data/company/update/<?= $company['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-group row mb-4">
                            <label for="nama" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $company['nama_com']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="alamat" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $company['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="jenis_devices" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Service</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="jenis_devices" name="jenis_devices" value="<?= $company['jenis_devices']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="harga" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $company['harga_com']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $company['email']; ?>">
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