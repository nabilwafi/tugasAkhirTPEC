<?= $this->extend('company/default'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="ont-weight-bold text-primary">FORM EDIT Transaksi</h4>
                </div>
                <form action="/dashboard/company/transaksicom/transaksi_com/update/<?= $transaksi['id'] ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-group row mb-4">
                            <label for="nama" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $transaksi['status_transaksi'] ?>">
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