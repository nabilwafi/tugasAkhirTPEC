<?= $this->extend('frontend/layout/body.php') ?>

<?= $this->section('content') ?>
<h1 class="text-uppercase" style="text-align: center;"><br>Data Pesanan</h1>
<div class="section-body">
    <div class="mx-auto" style="width: 1000px;">
        <div class="table-responsive">
            <table class="table table-bordered table-md">
                <table class="table table-striped">
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
    </section>
    <?= $this->endSection() ?>

    <?= $this->section('jumbotron') ?>
    <h1 class="text-uppercase">Data Pesanan Page</h1>
    <?= $this->endSection() ?>

    <?= $this->section('head') ?>
    <title>Sayang Mamah Service - Data Pesanan</title>
    <?= $this->endSection() ?>