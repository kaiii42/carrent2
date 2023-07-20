x<!DOCTYPE html>
<html lang="en">

<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="hero-section app-hero">
<img src="<?= base_url() ?>/assets/images/banner4.jpg" alt="Feature">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">CARRENT</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                         <br class="hidden-xs"> Its best choice for your Car Rental.
                    </p>
                    
                </div>
                <div class="col-md-12">
                    <div class="hero-image">
                        <img class="img-fluid" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-section text-center" id="services">
    <!-- Services section (small) with icons -->
    <div class="container">
        <div class="row  justify-content-md-center">
            <div class="col-md-8">
                <div class="services-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Latest News</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Our Best Car!! 
                    </p>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="services-icon">
                                <img src="<?= base_url() ?>/assets/logos/icon5.png" height="60" width="60" alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Daihatsu</h1>
                                <p>
                                Daihatsu Motor Co., Ltd., commonly known as Daihatsu, is a Japanese automobile manufacturer and one of the oldest surviving Japanese internal combustion engine manufacturers.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="services-icon">
                                <img class="icon-2" src="<?= base_url() ?>/assets/logos/icon7.png" height="60" width="60" alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Mercedes Benz</h1>
                                <p>
                                Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926.  
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="services-icon">
                                <img class="icon-3" src="<?= base_url() ?>/assets/logos/icon6.png" height="60" width="60" alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Toyota</h1>
                                <p>
                                Toyota Motor Corporation is a Japanese multinational automotive manufacturer headquartered in Toyota City, Aichi, Japan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex-features" id="features">
    <div class="container">
        <div class="flex-split">
            <div class="f-left wow fadeInUp" data-wow-delay="0s">
                <div class="left-content">
                    <img class="img-fluid" src="<?= base_url() ?>/assets/images/cars/default.png" alt="">
                </div>
            </div>
            <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
                <div class="right-content">
                    <h2>Try Our Newest Ride!!</h2>
                    <p>
                        Join Carrent to get more fun exprience!
                    </p>
                    <ul>
                        <li><i class="ion-android-checkbox-outline"></i>We Sent The Car.</li>
                        <li><i class="ion-android-checkbox-outline"></i>You Can Book The Car</li>
                        <li><i class="ion-android-checkbox-outline"></i>And It Will Be Ready For Use!!</li>
                    </ul>
                    <button class="btn btn-primary btn-action btn-fill">Rent Now!!</button>
                </div>
            </div>
        </div>
        <div class="flex-split">
            <div class="f-right">
                <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Try Our Best Seller Car!!</h2>
                    <p>
                        Go ahead and try our top 3 cars.
                    </p>
                    <ul>
                        <li><i class="ion-android-checkbox-outline"></i>Toyota Avanza</li>
                        <li><i class="ion-android-checkbox-outline"></i>Daihatsu Xenia</li>
                        <li><i class="ion-android-checkbox-outline"></i>Mercedes Benz slk</li>
                    </ul>
                    <button class="btn btn-primary btn-action btn-fill">RENT NOW!!</button>
                </div>
            </div>
            <div class="f-left">
                <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="<?= base_url() ?>/assets/images/cars/default2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-section" id="reviews">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="testimonials owl-carousel owl-theme">
                    <div class="testimonial-single"><img class="img-circle" src="<?= base_url() ?>/assets/images/testimonial2.jpg" alt="Client Testimonoal">
                        <div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
                            <p>Pilihan mobil yang berkualitas dan layanan pelanggan yang ramah membuat pengalaman menyewa mobil dengan Anda menjadi sangat menyenangkan. <br class="hidden-xs"> 
                            </p>
                            <h3></h3>
                            <h3> - amit1134 [Carrents - IDN]</h3>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single"><img class="img-circle" src="<?= base_url() ?>/assets/images/testimonial1.jpg" alt="Client Testimonoal">
                        <div class="testimonial-text">
                            <p>Sistem pemesanan dan reservasi yang Anda miliki sangat mudah digunakan. Saya senang dengan kemudahan dalam memesan mobil melalui situs web Anda. <br class="hidden-xs"> 
                            </p>
                            <h3></h3>
                            <h3>- vishalmg [Carrents -IDN]</h3>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-ios-star-half"></i>
                        </div>
                    </div>
                    <div class="testimonial-single"><img class="img-circle" src="<?= base_url() ?>/assets/images/testimonial3.jpg" alt="Client Testimonoal">
                        <div class="testimonial-text">
                            <p>Armada mobil yang Anda sediakan selalu dalam kondisi prima dan terawat dengan baik. Saya merasa aman dan nyaman ketika berkendara menggunakan mobil dari usaha Anda.  <br class="hidden-xs"></p>
                            <h3></h3>
                            <h3>- ab69aho [Carrents -IDN]</h3>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-ios-star-half"></i>
                        </div>
                    </div>
                    <div class="testimonial-single"><img class="img-circle" src="<?= base_url() ?>/assets/images/testimonial2.jpg" alt="Client Testimonoal">
                        <div class="testimonial-text">
                            <p>Tingkat profesionalisme yang ditunjukkan oleh usaha Anda dalam merental mobil sungguh luar biasa. <br class="hidden-xs">.</p>
                            <h3></h3>
                            <h3>- donpavulon [Carrents -US]</h3>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                            <i class="ion ion-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('')  ?>