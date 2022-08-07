<?= $this->extend('frontend/layout/body'); ?>

<?= $this->section('content'); ?>
<div id="services" class="home-section section-layout">
    <div class="container">
        <h1 class="text-center home-title">SERVICES</h1>

        <div class="row w-100 home-products">
            <div class="card home-product col-2">
                <div class="home-product-img">
                    <img class="w-100 home-img" src="/assets/images/pc.jpg" alt="">
                </div>

                <div class="card-body position-absolute text-white text-center home-information">
                    <h5 class="card-title home-information-title">Service Computer</h5>
                    <a href="/take/services/<?= 'pc' ?>" class="btn btn-primary">Take Service</a>
                </div>
            </div>

            <div class="card home-product col-2">
                <div class="home-product-img">
                    <img class="w-100 home-img" src="/assets/images/hp.jpg" alt="">
                </div>

                <div class="card-body position-absolute text-white text-center home-information">
                    <h5 class="card-title home-information-title">Service Handphone</h5>
                    <a href="/take/services/<?= 'handphone' ?>" class="btn btn-primary">Take Service</a>
                </div>
            </div>

            <div class="card home-product col-2">
                <div class="home-product-img">
                    <img class="w-100 home-img" src="/assets/images/laptop.jpg" alt="">
                </div>

                <div class="card-body position-absolute text-white text-center home-information">
                    <h5 class="card-title home-information-title">Service Laptop</h5>
                    <a href="/take/services/<?= 'laptop' ?>" class="btn btn-primary">Take Service</a>
                </div>
            </div>

            <div class="card home-product col-2">
                <div class="home-product-img">
                    <img class="w-100 home-img" src="/assets/images/printer.jpg" alt="">
                </div>

                <div class="card-body position-absolute text-white text-center home-information">
                    <h5 class="card-title home-information-title">Service Printer</h5>
                    <a href="/take/services/<?= 'printer' ?>" class="btn btn-primary">Take Service</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-section section-layout">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center about-content">
            <div class="about-img rounded">
                <img src="/assets/images/about.jpg" alt="" class="w-100">
            </div>

            <div class="card about-information">
                <div class="card-body about-card">
                    <h5 class="card-title about-information-title">About Us</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="/about" class="btn btn-info text-gray-50">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-section section-layout">
    <div class="container contact-information">
        <h1 class="h1 contact-title">Have Any Questions?</h1>
        <p class="contact-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, eligendi aut quis sunt a cumque esse debitis sit earum perspiciatis neque quaerat, magnam quidem nobis maxime. Eligendi, soluta facilis? Tenetur exercitationem vitae minima atque iure!</p>

        <a href="/contact" class="btn btn-info btn-lg px-5">Contact Us</a>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section('jumbotron') ?>
<h1>Helping you to fix your device</h1>
<p>together to help you repair your device for a more enjoyable experience</p>
<a href="#services" class="btn btn-info">Discover More</a>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>Sayang Mamah Service - Home</title>
<?= $this->endSection(); ?>