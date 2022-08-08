<?= $this->extend('company/default'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="ont-weight-bold text-primary">FORM EDIT Transaksi</h4>
                </div>
                <form action="/update/status/<?= $transaksi['id'] ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-group row mb-4">
                            <label for="floatingSelect" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Transaksi</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="status" class="form-select form-input col-sm-12 col-md-20" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected hidden>Open this select menu</option>
                                    <option value="pembayaran diterima">Pembayaran Diterima</option>
                                    <option value="device dalam proses">Device Dalam Proses</option>
                                    <option value="device selesai diperbaiki">Device Selesai Diperbaiki</option>
                                    <option value="transaksi selesai">Transaksi Selesai</option>
                                </select>
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