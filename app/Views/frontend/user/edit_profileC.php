<?= $this->extend('frontend/layout/body.php') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"><br>
                <h4 class="ont-weight-bold text-primary" style="text-align: center;">Edit Profil Pengguna</h4>
            </div>
            <form action="/edit_profile/user/update/<?= $customers['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="card-body">

                    <div class="form-group row mb-4">
                        <label for="nama" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $customers['nama_cus']; ?>">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="alamat" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $customers['email']; ?>">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="harga" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. Telp</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="telp" name="telp" value="<?= $customers['telp']; ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $customers['alamat']; ?>">
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
<?= $this->endSection() ?>

<?= $this->section('jumbotron') ?>
<h1 class="text-uppercase">My Profile Page</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - My Profile</title>
<?= $this->endSection() ?>