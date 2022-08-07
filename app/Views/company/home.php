<?= $this->extend('company/default'); ?>


<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <!-- Page Heading -->

    </div>

    <div class="section-body">
        <div class="section-body">

            <div class="row">
                <!-- Transaction Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        TRANSACTION</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= count($transaksi); ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>