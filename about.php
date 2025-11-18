<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || About</title>
    <?php
    include '_inc/skin.php';
    ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>
     <?php
    include '_inc/pre-loader.php';
    ?>
    <?php include '_inc/header.php'; ?>

    <div class="inner-page-hero" style="background-image: url(assets/images/background/about-hero-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>About Us</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#"><?= $site_name ?> </a></li>
                <li><a href="#">About Us </a></li>
            </ul>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <div class="about-four">
        <div class="about-four-shape-one-1">
            <img src="assets/images/shape/about-shape-1.png" alt="shape">
        </div>
        <div class="about-four-shape-one-2">
            <img src="assets/images/shape/service-shape-2.png" alt="shape">
        </div>

        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-xl-7 col-lg-10">
                    <div class="about-four-info">
                        <div class="heading-box">
                            <span class="heading-subtitle wow fadeInUp animated">🤝 ABOUT CAPITAL KARO</span>
                            <h2 class="heading-title wow fadeInUp animated">
                                Empowering India’s Financial Entrepreneurs Since 2024
                            </h2>
                        </div>
                        <div class="section-details">
                            <p>
                                Capital Karo began its journey in 2024, working closely with offline partners and leading DSAs across India.
                                After years of strong offline success, we took a major leap in 2024 by launching our digital platform — a complete
                                loan sourcing and partner management ecosystem.
                            </p>

                            <p>
                                Today, Capital Karo has successfully helped disburse over <strong>₹18+ crore</strong> in loans nationwide. With our
                                Own Branding Program, we empower entrepreneurs to launch their own loan company under their brand name using our
                                white-label CRM technology.
                            </p>

                            <p>
                                More than <strong>200+ partners</strong> across India trust us to manage their DSA business, grow their network, and
                                scale financially — all under the mission of making every Indian financially independent with their own brand.
                            </p>
                        </div>

                        <ul class="about-details-four">
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="about-contact-four">
                                    <h6>Call For Any Query</h6>
                                    <p>+91 9217164796</p>
                                </div>
                            </li>

                            <li>
                                <img src="assets/images/about/about-four-ceo.png" alt="ceo-image">
                                <div class="about-contact-four">
                                    <h6>Founder & CEO</h6>
                                    <p>Capital Karo Team</p>
                                </div>
                                <img src="assets/images/Sign.png" alt="sign">
                            </li>
                        </ul>

                        <a href="contact-us" class="btn btn-outline-secondary">Contact us <i class="flaticon-next"></i></a>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-8 ms-auto">
                    <div class="row gutter-y-30">
                        <div class="col-sm-7 col-6">
                            <div class="about-four-image">
                                <img src="assets/images/about/about-four-imag-1.jpg" alt="about-image">
                            </div>
                        </div>
                        <div class="col-sm-5 col-6 ">
                            <div class="about-four-right">
                                <div class="about-four-images">
                                    <img src="assets/images/about/about-four-image-2.jpg" alt="about-image">
                                </div>
                                <div class="about-experiences-box">
                                    <div class="about-four-shape"></div>
                                    <h2>5+</h2>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="col-xl-4 col-lg-6">
                    <div class="about-four-box">
                        <div class="about-four-icon">
                            <i class="flaticon-mission"></i>
                        </div>
                        <div class="about-four-details">
                            <h4>Our Mission</h4>
                            <p>
                                To empower individuals and businesses by providing seamless loan sourcing, white-label CRM technology, and
                                digital tools that help financial partners grow under their own brand.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-xl-4 col-lg-6">
                    <div class="about-four-box">
                        <div class="about-four-icon">
                            <i class="flaticon-targeting"></i>
                        </div>
                        <div class="about-four-details">
                            <h4>Vision & Goal</h4>
                            <p>
                                To become India’s leading financial partner network — enabling entrepreneurs to launch, manage, and scale their
                                loan business with world-class digital infrastructure.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dedicated Team -->
                <div class="col-xl-4 col-lg-6">
                    <div class="about-four-box">
                        <div class="about-four-icon">
                            <i class="flaticon-active"></i>
                        </div>
                        <div class="about-four-details">
                            <h4>Dedicated Support</h4>
                            <p>
                                Our technical and operational teams work closely with partners to ensure smooth onboarding, CRM setup,
                                integration, and business support for long-term growth.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- WHY CHOOSE SECTION -->
    <section class="why-choose-section-one">
        <div class="why-choose-shape-one-1">
            <img src="assets/images/shape/why-choose-shape-1.png" alt="shape">
        </div>
        <div class="why-choose-shape-one-2">
            <img src="assets/images/shape/why-choose-shape-2.png" alt="shape">
        </div>

        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-xl-9 why-choose-left-one">
                    <div class="heading-box heading-white">
                        <span class="heading-subtitle wow fadeInUp animated">🤝 WHY CHOOSE CAPITAL KARO</span>
                        <h2 class="heading-title wow fadeInUp animated">
                            Your trusted partner for digital loan sourcing, CRM technology, and financial business growth
                        </h2>
                    </div>

                    <div class="why-choose-one-image-2">
                        <img src="assets/images/why-choose-image-1.jpg" alt="why-choose-image">
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-solution"></i>
                                    <h4>White-Label CRM</h4>
                                </div>
                                <p>
                                    Build your own financial brand with our ready-to-use CRM, complete with lead management, partner onboarding,
                                    payout tracking, and more.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-badge"></i>
                                    <h4>Strong Network</h4>
                                </div>
                                <p>
                                    With 200+ partners and 50+ lending institutions, we provide a powerful ecosystem to grow your DSA business.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-trusted"></i>
                                    <h4>Trusted & Transparent</h4>
                                </div>
                                <p>
                                    Since 2019, entrepreneurs across India trust us for transparent processes, real-time CRM tracking, and
                                    reliable operations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COUNTERS -->
                <div class="col-xl-3 col-lg-12">
                    <ul class="counter-box-one">
                        <li>
                            <h6 data-target="60" data-symbol="+">0</h6>
                            <span>01</span>
                            <p>Banking Partners</p>
                        </li>

                        <li>
                            <h6 data-target="18" data-symbol="Cr+">0</h6>
                            <span>02</span>
                            <p>Total Loan Disbursed</p>
                        </li>

                        <li>
                            <h6 data-target="160" data-symbol="+">0</h6>
                            <span>03</span>
                            <p>Active White-Label Partners</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
   <div class="testimonial-two">
    <div class="testimonial-shape-one-1">
        <img src="assets/images/shape/testimonial-shape-two-1.png" alt="shape">
    </div>

    <div class="container">
        <div class="heading-box">
            <span class="heading-subtitle wow fadeInUp animated">🤝 TESTIMONIALS</span>
            <h2 class="heading-title wow fadeInUp animated">What our partners & clients say about us</h2>
        </div>

        <div class="testimonial-slider-two">

            <?php foreach ($testimonials as $t): ?>
                <div class="testimonial-slider-two-item">
                    <div class="testimonial-slider-two-box">

                        <div class="testimonial-two-box-meta">
                            <img src="<?= $t['image'] ?>" alt="img">
                            <div class="testimonial-two-membar">
                                <h5><?= $t['name'] ?></h5>
                                <span><?= $t['designation'] ?></span>
                            </div>
                        </div>

                        <p><?= $t['message'] ?></p>

                        <span class="tagline"><?= $t['tagline'] ?></span>

                        <div class="last-quote text-end">
                            <i class="flaticon-quote-1"></i>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>



   

    <!-- CTA -->
    <section class="cta-one">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-md-9 col-sm-9 col-9">
                    <div class="cta-title">
                        <h2>
                            Join more than 200+ partners growing their financial business with Capital Karo’s trusted CRM and digital tools.
                        </h2>
                    </div>
                    <a href="contact-us" class="btn btn-secondary">Contact us <i class="flaticon-next"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <img src="assets/images/cta-Logo.png" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php
    include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>

</body>

</html>
