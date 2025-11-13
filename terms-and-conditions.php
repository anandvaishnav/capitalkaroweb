<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Terms & Conditions</title>
    <?php include '_inc/skin.php'; ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one">
        <div class="custom-cursor-inner"></div>
    </div>

    <?php include '_inc/pre-loader.php'; ?>
    <?php include '_inc/header.php'; ?>

    <!-- HERO SECTION -->
    <section class="inner-page-hero" style="background-image: url('assets/images/background/about-hero-bg.jpg'); padding:100px 0;">
        <div class="container">
            <div class="hero-heading-title text-center">
                <h2>Terms & Conditions</h2>
            </div>
            <ul class="bradcrumb text-center">
                <li><a href="index">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
    </section>

    <!-- TERMS & CONDITIONS CONTENT -->
    <section class="features-section-one" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-10 col-md-12">
                    <div class="features-one-info">

                        <div class="heading-box text-center mb-4">
                            <span class="heading-subtitle wow fadeInUp animated">📃 TERMS & CONDITIONS</span>
                            <h2 class="heading-title wow fadeInUp animated">
                                Please Read Our Terms & Conditions Carefully
                            </h2>
                        </div>

                        <div class="section-details">
                            <p>
                                By using Capital Karo’s website, CRM platform, or any related services, you agree to the terms outlined below. Please read them carefully before proceeding.
                            </p>

                            <h4 class="mt-4">1. CRM Customizations & Additional Features</h4>
                            <p>
                                All CRM customizations and additional features are chargeable based on the development time and scope.
                            </p>

                            <h4 class="mt-4">2. No Direct Lending</h4>
                            <p>
                                Capital Karo does not provide any loan directly from its own capital. We act purely as a referral and sourcing partner connecting users with banks and NBFCs.
                            </p>

                            <h4 class="mt-4">3. Refund Policy</h4>
                            <p>
                                No refund is applicable after installation, domain assignment, or hosting setup. Any reinstallation or transfer to a new domain may incur additional charges.
                            </p>

                            <h4 class="mt-4">4. Legal Responsibility</h4>
                            <p>
                                Legal responsibilities rest entirely with the partner using the platform. Capital Karo and its parent company are not liable for any misuse or external legal issues.
                            </p>
                        </div>

                        <div class="text-center mt-4">
                            <a href="contact-us" class="btn btn-secondary">Contact Support <i class="flaticon-next"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include '_inc/footer.php'; ?>
    <?php include '_inc/footer-js.php'; ?>

</body>
</html>
