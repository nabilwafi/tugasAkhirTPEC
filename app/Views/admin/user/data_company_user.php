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
                <h4 class="font-weight-bold text-primary">COMPANY ACCOUNT</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($compusers as $cmpusr) : ?>
                            <td style="vertical-align: middle;"><?= $i; ?></td>
                            <td style="vertical-align: middle;"><?= $cmpusr['email']; ?></td>
                            <td style="vertical-align: middle;"><?= $cmpusr['password']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>