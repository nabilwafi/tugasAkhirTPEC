<?= $this->extend('frontend/layout/body'); ?>

<?= $this->section('content'); ?>
<div class="about-section section-layout">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center about-page-content">
            <div class="about-img-page rounded">
                <img src="/assets/images/about-img-umbr.jpg" alt="" class="w-100">
            </div>

            <div class="about-page-information">
                <h1 class="about-page-title">About Us</h1>
                <p class="about-page-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nesciunt fugit incidunt quaerat libero sint vel magnam eveniet esse vitae modi dignissimos deserunt inventore laborum autem delectus tempora impedit, fugiat quidem maxime quas dolorem ex sunt et! Veniam minus cumque quasi architecto perspiciatis quas reprehenderit commodi consequatur, saepe eius, delectus, nam dolorem? Quod sunt eum inventore, ipsa aliquam nam iure, eaque cupiditate distinctio suscipit rem placeat. Qui eligendi obcaecati corrupti quam pariatur voluptas earum at explicabo rem ea nobis perspiciatis ratione nesciunt odio beatae, nemo facilis incidunt! Totam, officia accusantium ad itaque dicta, repellendus.</p>
            </div>
        </div>
    </div>
</div>

<div class="sponsored-section section-layout">
    <div class="container">
        <h1 class="text-uppercase text-center">Sponsored</h1>
    
        <div class="row align-items-center sponsored-content">
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_gojek.png" alt="">
            </div>
    
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_grab.png" alt="">
            </div>
    
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_unikom_kuning.png" alt="">
            </div>
    
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_harvard.png" alt="">
            </div>
    
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_oxford.png" alt="">
            </div>
    
            <div class="col-2 sponsored-img">
                <img class="w-100" src="/assets/images/logo_cambridge.png" alt="">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section('jumbotron') ?>
<h1 class="text-uppercase">About Us</h1>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - About</title>
<?= $this->endSection() ?>