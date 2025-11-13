<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Portfolio</title>
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
                <h2>Portfolio Grid</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#">Portfolio </a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->
    <!-- portfolio start  -->
    <div class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading-box text-center">
                        <span class="heading-subtitle wow fadeInUp animated animated">🤝 PORTFOLIO</span>
                        <h2 class="heading-title wow fadeInUp animated animated">Explore our exceptional projects and
                            collaborations with clients.</h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-y-40 gutter-x-15">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-1.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Quick Funding Solutions</h4>
                                <p>Small Business </p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-2.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Customer-Centric Lending</h4>
                                <p>Client Focused</p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-3.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Efficient Loan Processing</h4>
                                <p>Digital Loans</p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-4.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Low Interest Programs</h4>
                                <p>Financial Relief</p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-5.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Streamlined Application Workflow</h4>
                                <p>Easy Application</p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="assets/images/protfolio/portfolio-2-img-6.jpg" alt="case-studies-image">
                        </div>
                        <div class="portfolio-details">
                            <div class="portfolio-details-inner">
                                <h4>Successful Debt Restructuring</h4>
                                <p> Financial Recovery</p>
                            </div>
                            <a href="portfolio-details" class="portfolio-btn" tabindex="-1"><i
                                    class="flaticon-next"></i></a>
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
                    <a href="contact-us" class="btn btn-secondary">Contact us <i class="flaticon-next"></i></a>
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