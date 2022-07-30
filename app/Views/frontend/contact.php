<?= $this->extend('frontend/layout/body'); ?>


<?= $this->section('content'); ?>
<div class="contact-page section-layout">
    <div class="container d-flex justify-content-center align-items-center">
        <form class="contact-page-form" action="" method="POST">
            <h1 class="contact-page-title text-uppercase text-center">Say Something</h1>

            <div class="mt-5">
                <div class="mb-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                </div>
    
                <div class="mb-4">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
                </div>
    
                <div class="mb-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your number">
                </div>

                <div class="mb-4">
                    <textarea type="text" class="form-control contact-page-textarea" id="exampleFormControlInput1" placeholder="Enter your messages"></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-100">Send Messages</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('jumbotron') ?>
<h1 class="text-uppercase">Contact Us</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Contact</title>
<?= $this->endSection() ?>