<?= $this->extend('frontend/layout/body'); ?>

<?= $this->section('content'); ?>
    <div id="services" class="home-section section-layout">
        <div class="container">
            <h1 class="text-center home-title">SERVICES</h1>

            <div class="home-products row justify-content-between w-100">
                <div class="card home-product col-3" style="width: 25rem;">
                    <div class="home-product-img">
                        <img class="w-100 home-img" src="/assets/images/about-img-umbr.jpg" alt="">
                    </div>

                    <div class="card-body position-absolute text-white text-center home-information">
                        <h5 class="card-title home-information-title">Service Computer</h5>
                        <a href="/" class="btn btn-primary">Take Service</a>
                    </div>
                </div>

                <div class="card home-product col-3" style="width: 25rem;">
                    <div class="home-product-img">
                        <img class="w-100 home-img" src="/assets/images/about-img-umbr.jpg" alt="">
                    </div>

                    <div class="card-body position-absolute text-white text-center home-information">
                        <h5 class="card-title home-information-title">Service Handphone</h5>
                        <a href="/" class="btn btn-primary">Take Service</a>
                    </div>
                </div>

                <div class="card home-product col-3" style="width: 25rem;">
                    <div class="home-product-img">
                        <img class="w-100 home-img" src="/assets/images/about-img-umbr.jpg" alt="">
                    </div>

                    <div class="card-body position-absolute text-white text-center home-information">
                        <h5 class="card-title home-information-title">Service Laptop</h5>
                        <a href="/" class="btn btn-primary">Take Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section section-layout">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="about-img rounded">
                    <img src="/assets/images/about-img-umbr.jpg" alt="" class="w-100">
                </div>

                <div class="card about-information" style="width: 30rem;">
                    <div class="card-body">
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
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quae iste molestiae numquam. Natus, praesentium
        repellat, in quibusdam molestias amet dignissimos modi dolores magni placeat exercitationem consectetur dolorum
        tempora temporibus, vitae ratione?</p>

    <a href="#services" class="btn btn-info">Discover More</a>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
    <title>Home</title>
<?= $this->endSection(); ?>