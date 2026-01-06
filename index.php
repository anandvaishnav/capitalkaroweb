<!DOCTYPE html>
<html lang="en">
<?php include '_data/data.php'; ?>

<head>
    <?php include '_inc/seo.php'; ?>  <!-- dynamic title is generated here -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '_inc/skin.php'; ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one">
        <div class="custom-cursor-inner"></div>
    </div>
    <?php
    include '_inc/pre-loader-home.php';
    ?>
    <!-- header start -->
    <?php
    include '_inc/header.php';
    ?>
    <!-- header end -->
    <!-- banner one start -->
    <section class="banner-one">
        <div class="container-fluid p-0">
            <div class="banner-one-slider">
                <div class="banner-one-slider-item">
                    <div class="banner-one-slider-item-image zoom-in">
                        <img src="assets/images/background/banner-one-bg.jpg" alt="banner-images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-md-10">
                                <div class="banner-one-info">
                                    <div class="banner-title fade-left">
                                        <h1>Elevate Your Growth with <b class="brand-secondary" style=""><?php echo $site_name; ?></b></h1>
                                    </div>
                                    <div class="section-details fade-left">
                                        <p>We offer a range of expert services designed to support your financial
                                            journey and business success. Our consultancy includes tailored financial
                                            planning, strategic business advice.</p>
                                    </div>
                                    <div class="fade-in-up">
                                        <a href="contact-us" class="btn btn-primary">Contact Us<i
                                                class="flaticon-next"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-one-box">
                                <div class="banner-one-box-inner">
                                    <i class="flaticon-money-bag"></i>
                                    <h2>60+ Lenders </h2>
                                </div>
                                <p>Work confidently with 60+ trusted Bank and NBFC partners offering every major loan category.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-one-slider-item">
                    <div class="banner-one-slider-item-image">
                        <img src="assets/images/background/banner-one-bg-2.jpg" alt="banner-images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-md-10">
                                <div class="banner-one-info">
                                    <div class="banner-title fade-left">
                                        <h1>Your Partner Financial Growth Success</h1>
                                    </div>
                                    <div class="section-details fade-left">
                                        <p>We offer a range of expert services designed to support your financial
                                            journey and business success. Our consultancy includes tailored financial
                                            planning, strategic business advice.</p>
                                    </div>
                                    <div class="fade-in-up">
                                        <a href="contact-us" class="btn btn-primary">Contact Us<i
                                                class="flaticon-next"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="banner-one-box">
                                <div class="banner-one-box-inner">
                                    <i class="flaticon-money-bag"></i>
                                    <h2>200+ Partners</h2>
                                </div>
                                <p>Join a fast-growing community of 200+ active partners building their own finance brands with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner one end -->
    <!-- services one start -->
    <section class="services-section-one">
        <div class="service-one-shape-1">
            <img src="assets/images/shape/service-shape-1.png" alt="shape">
        </div>
        <div class="service-one-shape-2">
            <img src="assets/images/shape/service-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading-box text-center">
                        <span class="heading-subtitle wow fadeInUp animated animated">🤝 OUR SERVICES</span>
                        <h2 class="heading-title wow fadeInUp animated animated">Comprehensive financial solutions
                            tailored to your needs</h2>
                    </div>
                </div>
            </div>
            <div class="service-one-inner">

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/personal-loan.jpg" alt="Personal Loan">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-personal"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Personal Loan</h4>
                        <p>Get quick and easy personal loans with minimal documents and fast approval. Ideal for medical needs, travel, or personal expenses.</p>
                    </div>
                    <a href="personal-loan" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/business-loan.jpg" alt="Business Loan">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-money-bag"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Business Loan</h4>
                        <p>Grow your business with flexible loans designed for startups, SMEs, retail, and expanding enterprises.</p>
                    </div>
                    <a href="business-loan" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/instant-loan.jpg" alt="Instant Loan">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-money-bag-1"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Instant Loan</h4>
                        <p>Instant approval and quick disbursal to meet urgent financial needs. Fast, simple, and fully digital.</p>
                    </div>
                    <a href="instant-loan" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/kyc-loan.jpg" alt="KYC Loan">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-loan-1"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>KYC Loan</h4>
                        <p>Fast loan processing with simple KYC. No heavy paperwork required — quick verification and approval.</p>
                    </div>
                    <a href="kyc-loan" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/demat-account.jpg" alt="Demat Account">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-mortgage-loan"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Demat Account</h4>
                        <p>Open your Demat account quickly and start investing in shares, mutual funds, IPOs, and more.</p>
                    </div>
                    <a href="demat-account" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/credit-card.jpg" alt="Credit Card">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-mortarboard"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Credit Card</h4>
                        <p>Choose from top bank credit cards with rewards, cashback, and exclusive benefits—approved quickly.</p>
                    </div>
                    <a href="credit-card" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/bank-account.jpg" alt="Bank Account">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-loan-1"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Bank Account</h4>
                        <p>Open savings, current, or zero-balance accounts easily through our partnered banks.</p>
                    </div>
                    <a href="bank-account" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/home-loan.jpg" alt="Home Loan">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-mortgage-loan"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Home Loan</h4>
                        <p>Get affordable home loans with low interest rates and long tenures to build your dream home.</p>
                    </div>
                    <a href="home-loan" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

                <div class="service-one-box">
                    <div class="service-one-box-image">
                        <img src="assets/images/services/loan-against-shares.jpg" alt="Loan Against Shares">
                    </div>
                    <div class="service-one-icon-box">
                        <i class="flaticon-money-bag"></i>
                    </div>
                    <div class="service-one-info">
                        <h4>Loan Against Shares</h4>
                        <p>Use your shares as collateral and get an instant loan without selling your investments.</p>
                    </div>
                    <a href="loan-against-shares" class="read-more-btn">
                        <i class="flaticon-next"></i>
                    </a>
                </div>

            </div>

            <div class="text-center">
                <a href="service" class="btn btn-secondary">View More<i class="flaticon-next"></i></a>
            </div>
        </div>
    </section>
    <!-- services one end -->
    <!-- features one start -->
    <section class="features-section-one">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center justify-content-xl-start">
                <div class="col-xxl-3 col-xl-3 col-md-5 col-sm-7">
                    <div class="features-one-image">
                        <img src="assets/images/features-1.jpg" alt="features-image">
                        <div class="image-shape">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-md-7">
                    <div class="features-one-info">
                        <div class="heading-box">
                            <span class="heading-subtitle wow fadeInUp animated">🤝 OWN BRANDING PROGRAM</span>
                            <h2 class="heading-title wow fadeInUp animated">Start Your Own Loan Business With Your Brand</h2>
                        </div>

                        <p>
                            Become a white-label partner and launch your own loan company under your personal brand.
                            Get a fully branded CRM, lead management, DSA tools, payout dashboards, and complete backend support.
                            Build a profitable loan business with zero technical work.
                        </p>

                        <div class="features-one-list-block">
                            <ul class="features-one-list">
                                <li>100% White-Label CRM with your brand name.</li>
                                <li>Earn commission on every loan disbursed.</li>
                                <li>Manage leads, customers & DSAs in one platform.</li>
                                <li>Automated tracking for commissions & payouts.</li>
                                <li>Full onboarding, training & ongoing support.</li>
                                <li>Zero coding, instant setup — everything managed for you.</li>
                            </ul>
                        </div>

                        <a href="partner-program" class="btn btn-secondary">Join Now <i class="flaticon-next"></i></a>
                    </div>
                </div>

                <!-- STATIC EARNING CALCULATION (NO JS, NO SLIDER) -->
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-8 col-sm-10">
                    <div class="features-one-form wow fadeInUp animated"
                        style="padding:30px; border-radius:16px; background:#ffffff; box-shadow:0 4px 18px rgba(0,0,0,0.08);">

                        <h3 style="margin-bottom:18px; font-weight:700; font-size:22px; display:flex; align-items:center;">
                            <i class="flaticon-money-bag" style="font-size:26px; margin-right:8px; color:#1B1464;"></i>
                            Estimated Earnings
                        </h3>

                        <div class="static-earning-box" style="font-size:16px; line-height:1.7;">

                            <div style="padding:15px 0; border-bottom:1px solid #eee;">
                                <p style="margin:0; font-weight:600;">
                                    <i class="flaticon-loan-1" style="color:#F3AB09; margin-right:6px;"></i>
                                    Loan Disbursed: <span style="float:right;">₹5,00,000</span>
                                </p>
                                <p style="margin:5px 0 0; font-weight:700; color:#1B1464;">
                                    Your Earnings (2%): <span style="float:right;">₹10,000</span>
                                </p>
                            </div>

                            <div style="padding:15px 0; border-bottom:1px solid #eee;">
                                <p style="margin:0; font-weight:600;">
                                    <i class="flaticon-loan-1" style="color:#F3AB09; margin-right:6px;"></i>
                                    Loan Disbursed: <span style="float:right;">₹10,00,000</span>
                                </p>
                                <p style="margin:5px 0 0; font-weight:700; color:#1B1464;">
                                    Your Earnings (2%): <span style="float:right;">₹20,000</span>
                                </p>
                            </div>

                            <div style="padding:15px 0; border-bottom:1px solid #eee;">
                                <p style="margin:0; font-weight:600;">
                                    <i class="flaticon-loan-1" style="color:#F3AB09; margin-right:6px;"></i>
                                    Loan Disbursed: <span style="float:right;">₹25,00,000</span>
                                </p>
                                <p style="margin:5px 0 0; font-weight:700; color:#1B1464;">
                                    Your Earnings (2%): <span style="float:right;">₹50,000</span>
                                </p>
                            </div>

                            <div style="padding:15px 0;">
                                <p style="margin:0; font-weight:600;">
                                    <i class="flaticon-loan-1" style="color:#F3AB09; margin-right:6px;"></i>
                                    Loan Disbursed: <span style="float:right;">₹50,00,000</span>
                                </p>
                                <p style="margin:5px 0 0; font-weight:700; color:#1B1464;">
                                    Your Earnings (2%): <span style="float:right;">₹1,00,000</span>
                                </p>
                            </div>

                        </div>

                        <a href="earning-calculator"
                            class="btn btn-primary btn-block btn btn-secondary"
                            style="width:100%; margin-top:18px; font-weight:600; font-size:16px; padding:12px 0; border-radius:10px;">
                            <i class="flaticon-next" style="margin-right:6px; font-size:14px;"></i>
                            Open Full Calculator
                        </a>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- features one end -->
    <!-- why-choos one start -->
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
                        <span class="heading-subtitle wow fadeInUp animated animated">🤝 WHY CHOOSE</span>
                        <h2 class="heading-title wow fadeInUp animated animated">Your trusted partner for personalized
                            loan solutions, expert financial guidance</h2>
                    </div>
                    <div class="why-choose-one-image">
                        <img src="assets/images/why-choose-image-1.jpg" alt="why-choose-image">
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-solution"></i>
                                    <h4>Personalized Loan</h4>
                                </div>
                                <p>We offer customized loan options tailored to meet your specific financial
                                    requirements.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-badge"></i>
                                    <h4>Competitive Rates</h4>
                                </div>
                                <p>Benefit from <?= $site_name ?>competitive rates, designed to make your loans more affordable.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="why-choose-one-box">
                                <div class="why-choose-box-one-title">
                                    <i class="flaticon-trusted"></i>
                                    <h4>Trusted Partner</h4>
                                </div>
                                <p>With a commitment to transparency personalized service, we work you every step of
                                    way.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <ul class="counter-box-one">
                        <li>
                            <h6 data-target="25" data-symbol="+">0</h6>
                            <span>01</span>
                            <p>Years of trusted expertise</p>
                        </li>
                        <li>
                            <h6 data-target="50" data-symbol="k">0</h6>
                            <span>02</span>
                            <p>Loans approved</p>
                        </li>
                        <li>
                            <h6 data-target="10" data-symbol="K">0</h6>
                            <span>03</span>
                            <p>Satisfied clients</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choos one end -->
    <!-- partner one start -->
    <!-- <section class="partner-one">
        <div class="container-fluid">
            <div class="partner-slider-one">
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_1.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_2.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_3.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_4.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_5.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_1.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_2.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_3.svg" alt="partner-logo">
                    </div>
                </div>
                <div class="partner-slider-one-item">
                    <div class="partner-slider-logo">
                        <img src="assets/images/partner-logo/Logo_4.svg" alt="partner-logo">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- partner one end -->
    <!-- process one start -->
    <section class="process-one">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-lg-6">
                    <div class="heading-box">
                        <span class="heading-subtitle wow fadeInUp animated">🤝 HOW TO BECOME A DSA</span>
                        <h2 class="heading-title wow fadeInUp animated">
                            Simple Process to Start Working as a DSA Agent — Free of Cost
                        </h2>
                        <p class="heading-details">
                            Anyone can become a DSA for free and start earning commissions by sourcing loan customers.
                            Work with 60+ lenders across all major loan categories and build a long-term stable income.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="process-one-video">
                        <img src="assets/images/process-video-thamb.jpg" alt="video-thumb">
                        <a href="https://www.youtube.com/watch?v=rzfmZC3kg3M" class="process-one-video-btn">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4">
                    <div class="process-one-image">
                        <img src="assets/images/process-image-1.jpg" alt="process-image">
                    </div>
                </div>

                <div class="col-xl-9 col-md-8 align-self-center">
                    <div class="process-item-one wow fadeInRight animated" data-wow-delay="500ms" data-wow-duration="2000ms">

                        <div class="process-one-box">
                            <div class="process-one-box-icon">
                                <i class="flaticon-application"></i>
                            </div>
                            <div class="process-one-box-title">
                                <h3>Register for Free</h3>
                            </div>
                            <div class="process-one-box-devider"></div>
                            <div class="process-one-box-details">
                                <p>Sign up online with basic details. No fee, no investment, and no documents required during registration.</p>
                            </div>
                        </div>

                        <div class="process-one-box">
                            <div class="process-one-box-icon">
                                <i class="flaticon-contract"></i>
                            </div>
                            <div class="process-one-box-title">
                                <h3>Submit Leads</h3>
                            </div>
                            <div class="process-one-box-devider"></div>
                            <div class="process-one-box-details">
                                <p>Add customer information for any loan category — Personal, Business, Home, Credit Card & more.</p>
                            </div>
                        </div>

                        <div class="process-one-box">
                            <div class="process-one-box-icon">
                                <i class="flaticon-approval"></i>
                            </div>
                            <div class="process-one-box-title">
                                <h3>Bank Processing</h3>
                            </div>
                            <div class="process-one-box-devider"></div>
                            <div class="process-one-box-details">
                                <p>Our team and partnered banks/NBFCs process your customer file and coordinate for approval.</p>
                            </div>
                        </div>

                        <div class="process-one-box">
                            <div class="process-one-box-icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="process-one-box-title">
                                <h3>Earn Commission</h3>
                            </div>
                            <div class="process-one-box-devider"></div>
                            <div class="process-one-box-details">
                                <p>Once the loan is disbursed, you receive your commission directly based on lender payout slabs.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- process one end -->
    <!-- case-studies one start -->
    <section class="case-studies-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-11">
                    <div class="heading-box">
                        <span class="heading-subtitle wow fadeInUp animated animated">🤝 OUR PORTFOLIO</span>
                        <h2 class="heading-title wow fadeInUp animated animated">Our portfolio elevating financial
                            services through innovation & technology</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="case-studies-slider-inner-one">
                <div class="case-studies-background">
                </div>
                <div class="case-studies-slider-one">
                    <div class="case-studies-slider-one-item">
                        <div class="case-studies-one-image">
                            <img src="assets/images/case-study/case-study-1.jpg" alt="case-image">
                            <div class="case-studies-one-details">
                                <div class="case-studies-details-one-inner">
                                    <h4><a href="portfolio-details">A case study on securing growth funding with
                                            capitalkaro</a></h4>
                                </div>
                                <div class="case-studies-one__details">
                                    <span class="tagline">Business</span>
                                    <p>Client name : technology Solutions</p>
                                    <a href="portfolio-details" class="more-btn m-auto"><i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-studies-slider-one-item">
                        <div class="case-studies-one-image">
                            <img src="assets/images/case-study/case-study-2.jpg" alt="case-image">
                            <div class="case-studies-one-details">
                                <div class="case-studies-details-one-inner">
                                    <h4><a href="portfolio-details">How <?= $site_name ?>supported in managing cash
                                            flow</a></h4>
                                </div>
                                <div class="case-studies-one__details">
                                    <span class="tagline">Home</span>
                                    <p>Client name : Centric Lending</p>
                                    <a href="portfolio-details" class="more-btn m-auto"><i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-studies-slider-one-item">
                        <div class="case-studies-one-image">
                            <img src="assets/images/case-study/case-study-3.jpg" alt="case-image">
                            <div class="case-studies-one-details">
                                <div class="case-studies-details-one-inner">
                                    <h4><a href="portfolio-details">A case study on growth through capitalkaro
                                            financing</a></h4>
                                </div>
                                <div class="case-studies-one__details">
                                    <span class="tagline">Student</span>
                                    <p>Client name : Debt Restructuring</p>
                                    <a href="portfolio-details" class="more-btn m-auto"><i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-studies-slider-one-item">
                        <div class="case-studies-one-image">
                            <img src="assets/images/case-study/case-study-4.jpg" alt="case-image">
                            <div class="case-studies-one-details">
                                <div class="case-studies-details-one-inner">
                                    <h4><a href="portfolio-details">capitalkaro's strategies for enhancing loan
                                            accessibility</a></h4>
                                </div>
                                <div class="case-studies-one__details">
                                    <span class="tagline">Business</span>
                                    <p>Client name : Streamlined Application </p>
                                    <a href="portfolio-details" class="more-btn m-auto"><i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-studies-slider-one-item">
                        <div class="case-studies-one-image">
                            <img src="assets/images/case-study/case-study-1.jpg" alt="case-image">
                            <div class="case-studies-one-details">
                                <div class="case-studies-details-one-inner">
                                    <h4><a href="portfolio-details">A deep dive into capitalkaro's innovative mortgage
                                            solutions</a></h4>
                                </div>
                                <div class="case-studies-one__details">
                                    <span class="tagline"> Personal</span>
                                    <p>Client name : Quick Solutions</p>
                                    <a href="portfolio-details" class="more-btn m-auto"><i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-studies one end -->
    <!-- team one start -->

    <!-- team one end -->
    <!-- testimonial one start -->

    <!-- testimonial one end -->
    <!-- blog one start -->

    <!-- blog one end -->
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
    <!-- footer one start -->
    <?php
    include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>

</body>

</html>