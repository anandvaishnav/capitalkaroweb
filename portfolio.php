<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loanlift || Portfolio</title>
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
    <!-- header start -->
    <?php
   include '_inc/header.php';
   ?>
    <!-- header end -->
    <!-- inner-page hero start -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/protfolio-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Portfolio</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Portfolio </a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->
    <!-- portfolio start  -->
    <div class="portfolio-section standrad">
        <div class="container">
            <div class="heading-box text-center">
                <span class="heading-subtitle wow fadeInUp animated animated">🤝 PORTFOLIO</span>
                <h2 class="heading-title wow fadeInUp animated animated">Discover our standout projects and dynamic
                    client collaborations.</h2>
            </div>
            <div class="portfolio-tabs">
                <div class="portfolio-tab-links">
                    <button class="portfolio-tab-link active" data-tab="all">All <span
                            class="item-count"></span></button>
                    <button class="portfolio-tab-link" data-tab="home">Home Loan <span
                            class="item-count"></span></button>
                    <button class="portfolio-tab-link" data-tab="business">Business Loan <span
                            class="item-count"></span></button>
                    <button class="portfolio-tab-link" data-tab="personal">Personal Loan <span
                            class="item-count"></span></button>
                    <button class="portfolio-tab-link" data-tab="student">Student Loan <span
                            class="item-count"></span></button>
                </div>
                <div class="portfolio-tab-content active" id="all">
                    <div class="container">
                        <div class="row gutter-y-40 gutter-x-15" id="all-items">
                        </div>
                    </div>
                </div>
                <div class="portfolio-tab-content" id="home">
                    <div class="container">
                        <div class="row gutter-y-40 gutter-x-15">
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/protfolio/protfolio-image-1.jpg"
                                            alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Home Loan</h5>
                                        <h4>Seamless Homeownership </h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : technology Solutions</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/protfolio/protfolio-image-5.jpg"
                                            alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Home Loan</h5>
                                        <h4>Boosting Businesses</h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : Centric Lending</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-tab-content" id="business">
                    <div class="container">
                        <div class="row gutter-y-40 gutter-x-15">
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/case/case-study-two-1.jpg" alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Business Loan</h5>
                                        <h4>Transforming Startups: Shaping the Future of Innovation</h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : Debt Restructuring</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-tab-content" id="personal">
                    <div class="container">
                        <div class="row gutter-y-40 gutter-x-15">
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/protfolio/protfolio-image-2.jpg"
                                            alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Personal Loan</h5>
                                        <h4>Empowering Education</h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : Streamlined Application</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/protfolio/protfolio-image-4.jpg"
                                            alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Personal Loan</h5>
                                        <h4>Medical Support</h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : Quick Solutions</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-tab-content" id="student">
                    <div class="container">
                        <div class="row gutter-y-40 gutter-x-15">
                            <div class="col-lg-6 col-md-12 portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-one-item-inner">
                                    <div class="portfolio-one-item-image">
                                        <img src="assets/images/protfolio/protfolio-image-3.jpg"
                                            alt="case-studies-image">
                                    </div>
                                    <div class="portfolio-one-details">
                                        <h5 class="portfolio-one-tagline">Student Loan</h5>
                                        <h4>Mortgage Made Easy</h4>
                                        <div class="portfolio-one-category">
                                            <p>Client name : technology Solutions</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio end  -->
    <!-- cta one start -->
    <section class="cta-one">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-md-9 col-sm-9 col-9">
                    <div class="cta-title">
                        <h2>We build trust with our customers by
                            combining creativity with tailored
                            business loan solutions.</h2>
                    </div>
                    <a href="contact-us.html" class="btn btn-secondary">Contact us <i class="flaticon-next"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <img src="assets/images/cta-Logo.png" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <!-- cta one end -->
    <!-- footer two start -->
   <?php
    include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>
</body>

</html>