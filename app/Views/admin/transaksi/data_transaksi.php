<?= $this->extend('admin/default') ?>
<?= $this->section('title') ?>
<title>User &mdash; SMG</title>>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <h4 class="font-weight-bold text-primary">DATA TRANSAKSI</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th style="text-align: center;">Nama Costumer</th>
                        <th style="text-align: center;">Nama Company</th>
                        <th style="text-align: center;">Harga Jasa</th>
                        <th style="text-align: center;">Nama Device</th>
                        <th style="text-align: center;">Jenis Device</th>
                        <th style="text-align: center;">Nama Kurir</th>
                        <th style="text-align: center;">Harga Kurir</th>
                        <th style="text-align: center;">Keluhan</th>
                        <th style="text-align: center;">PPN</th>
                        <th style="text-align: center;">Total Harga</th>
                        <th style="text-align: center;">Bukti Pembayaran</th>
                        <th style="text-align: center;">Status Transaksi</th>
                        <th style="text-align: center;">Created At</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                    <?php foreach ($transaksi as $trn) : ?>
                        <tr>
                            <td><?= $trn->nama_cus ?></td>
                            <td><?= $trn->nama_com ?></td>
                            <td><?= $trn->harga_com ?></td>
                            <td><?= $trn->nama_device ?></td>
                            <td><?= $trn->jenis_devices ?></td>
                            <td><?= $trn->nama_kurir ?></td>
                            <td><?= $trn->harga_kurir ?></td>
                            <td><?= $trn->keluhan ?></td>
                            <td><?= $trn->ppn ?></td>
                            <td><?= $trn->total_harga ?></td>
                            <td><?= $trn->bukti_pembayaran ?></td>
                            <td><?= $trn->status_transaksi ?></td>
                            <td><?= $trn->created_at ?></td>
                            <td class="text-center" style="width:10%">
                                <a href="#" class="btn btn-warning btn-sm"> <i class="fa fa-pencil-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>