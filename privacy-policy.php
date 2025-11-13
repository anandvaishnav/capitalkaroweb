<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Privacy Policy</title>
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
                <h2>Privacy Policy</h2>
            </div>
            <ul class="bradcrumb text-center">
                <li><a href="index">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </section>

    <!-- PRIVACY POLICY CONTENT -->
    <section class="features-section-one" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-10 col-md-12">
                    <div class="features-one-info">

                        <div class="heading-box text-center mb-4">
                            <span class="heading-subtitle wow fadeInUp animated">🔒 PRIVACY POLICY</span>
                            <h2 class="heading-title wow fadeInUp animated">
                                How We Protect & Use Your Information
                            </h2>
                        </div>

                        <div class="section-details">

                            <p>
                                At Capital Karo, we respect your privacy and are committed to protecting your personal information.
                                We collect only the data necessary to provide our services efficiently and securely.
                            </p>

                            <p>
                                Any data shared with us is used strictly for service delivery, communication, and support.
                                We never sell, rent, or disclose user data to third parties without consent, unless legally required.
                            </p>

                            <p>
                                We may use cookies and analytics tools to improve user experience and optimize our website’s performance.
                                You may disable cookies through your browser at any time.
                            </p>

                            <p>
                                For privacy-related queries, you can reach out to us at:
                                <strong>support@capitalkaro.com</strong>
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
