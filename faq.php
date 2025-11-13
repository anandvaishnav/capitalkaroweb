<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || FAQ</title>

    <?php include '_inc/skin.php'; // includes data.php ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>

    <?php include '_inc/pre-loader.php'; ?>
    <?php include '_inc/header.php'; ?>

    <!-- inner-page hero start -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/team-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>FAQS</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">FAQS</a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->

    <div class="faq-section">
        <div class="container">
            <div class="row gutter-y-30 gutter-x-15">

                <!-- LEFT FAQ LIST -->
                <div class="col-lg-8">

                    <div class="accordion" id="accordionfaq">

                        <?php
                        $faqIndex = 1;
                        foreach ($faqs as $faqBlock):
                        ?>
                            <div class="fqa-block">
                                <h4><?= $faqBlock['category'] ?></h4>

                                <?php foreach ($faqBlock['items'] as $faq): ?>
                                    <?php
                                    $collapseId = "faq" . $faqIndex;
                                    $faqIndex++;
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button <?= $faqIndex != 2 ? 'collapsed' : '' ?>"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#<?= $collapseId ?>"
                                                aria-expanded="<?= $faqIndex == 2 ? 'true' : 'false' ?>"
                                                aria-controls="<?= $collapseId ?>">
                                                <?= $faq['question'] ?>
                                            </button>
                                        </h2>

                                        <div id="<?= $collapseId ?>"
                                            class="accordion-collapse collapse <?= $faqIndex == 2 ? 'show' : '' ?>"
                                            data-bs-parent="#accordionfaq">
                                            <div class="accordion-body">
                                                <p><?= $faq['answer'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>

                <!-- RIGHT SIDE STATIC BOX -->
                <div class="col-lg-4">
                    <div class="fqa-block stcky">
                        <div class="faq-right">
                            <div class="faq-right-inner">
                                <h4>Still have questions? Feel free to ask us!</h4>
                                <p>Contact us directly, drop us an email!</p>

                                <img src="assets/images/faq-image.jpg" alt="fqa-image">

                                <div class="faq-details">
                                    <p>We’d love to hear from you! Whether you have questions, need assistance, or want
                                        to learn more about our services, feel free to reach out to us anytime.</p>
                                </div>

                                <a href="contact-us.php" class="btn btn-primary">
                                    Contact Us <i class="flaticon-next"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="cta-one">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-md-9 col-sm-9 col-9">
                    <div class="cta-title">
                        <h2>We build trust with our customers by combining creativity with tailored business loan solutions.</h2>
                    </div>
                    <a href="contact-us.php" class="btn btn-secondary">Contact us <i class="flaticon-next"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <img src="assets/images/cta-Logo.png" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <?php include '_inc/footer.php'; ?>
    <?php include '_inc/footer-js.php'; ?>

</body>

</html>
