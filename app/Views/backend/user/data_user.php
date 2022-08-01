<?= $this->extend('backend/admin/default') ?>
<?= $this->section('title') ?>
<title>User &mdash; SMG</title>>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Users</h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <h4>Data Users</h4>
            </div>
            <div class="col mt-3">
                <a href="/barang/tambah" class="btn btn-primary mb-3">Tambah Dataa Users</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $usr) : ?>
                            <td style="vertical-align: middle;"><?= $i; ?></td>
                            <td style="vertical-align: middle;"><?= $usr['name']; ?></td>
                            <td style="vertical-align: middle;"><?= $usr['email']; ?></td>
                            <td style="vertical-align: middle;"><?= $usr['roles']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>