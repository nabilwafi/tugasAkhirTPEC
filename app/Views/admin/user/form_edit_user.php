<?= $this->extend('admin/default'); ?>
<?= $this->section('content'); ?>

<section class="section">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="ont-weight-bold text-primary">FORM EDIT USER</h4>
                </div>
                <form action="/dashboard/data/user/update/<?= $company['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">

                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $company['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="password" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="password" name="password" value="<?= $company['password']; ?>">
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