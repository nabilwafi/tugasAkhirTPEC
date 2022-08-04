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
                <h4 class="font-weight-bold text-primary">COMPANY PROFILE</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat</th>
                        <th>Jenis Service</th>
                        <th>Harga</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($company as $cmp) : ?>
                            <td style="vertical-align: middle;"><?= $i; ?></td>
                            <td style="vertical-align: middle;"><?= $cmp['nama_com']; ?></td>
                            <td style="vertical-align: middle;"><?= $cmp['alamat']; ?></td>
                            <td style="vertical-align: middle;"><?= $cmp['jenis_devices']; ?></td>
                            <td style="vertical-align: middle;"><?= $cmp['harga_com']; ?></td>
                            <td style="vertical-align: middle;"><?= $cmp['email']; ?></td>
                            <td style="vertical-align: middle;">

                                <a href="/dashboard/data/company/edit/<?= $cmp["id"]; ?>" class="btn btn-warning">Edit</a>

                                <form action="/dashboard/data/company/data_profile/<?= $cmp["id"]; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>