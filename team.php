<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Team</title>
    <?php
    include '_inc/skin.php'; // includes data.php already
    ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>

    <?php include '_inc/pre-loader.php'; ?>

    <!-- header start -->
    <?php include '_inc/header.php'; ?>
    <!-- header end -->

    <!-- inner-page hero start -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/team-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Team page</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#">Page </a></li>
                <li><a href="#">Team Details </a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->

    <!-- team one start -->
    <section class="team-one inner-page" style="background-color: transparent;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="heading-box text-center">
                        <span class="heading-subtitle wow fadeInUp animated">🤝 OUR TEAM</span>
                        <h2 class="heading-title wow fadeInUp animated">Meet Our Expert Team</h2>
                        <p class="heading-details">
                            Meet the team dedicated to turning your homeownership dreams into reality. Our experts bring
                            a wealth of experience and personalized care to guide you every step of the way.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gutter-y-40">

                <!-- DYNAMIC TEAM MEMBER LOOP -->
                <?php foreach ($team as $member): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-one-box">

                            <a href="team-details.php?id=<?= $member['id'] ?>" class="team-one-image">
                                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
                            </a>

                            <div class="team-one-details">
                                <div class="team-one-details-inner">
                                    <h5><?= $member['name'] ?></h5>
                                    <p><?= $member['designation'] ?></p>

                                    <div class="team-one-social-media">
                                        <ul>

                                            <?php if (!empty($member['details']['social']['facebook'])): ?>
                                                <li><a href="<?= $member['details']['social']['facebook'] ?>" target="_blank">
                                                        <i class="fa-brands fa-facebook-f"></i></a></li>
                                            <?php endif; ?>

                                            <?php if (!empty($member['details']['social']['instagram'])): ?>
                                                <li><a href="<?= $member['details']['social']['instagram'] ?>" target="_blank">
                                                        <i class="fa-brands fa-instagram"></i></a></li>
                                            <?php endif; ?>

                                            <?php if (!empty($member['details']['social']['linkedin'])): ?>
                                                <li><a href="<?= $member['details']['social']['linkedin'] ?>" target="_blank">
                                                        <i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <?php endif; ?>

                                            <?php if (!empty($member['details']['social']['twitter'])): ?>
                                                <li><a href="<?= $member['details']['social']['twitter'] ?>" target="_blank">
                                                        <i class="fa-brands fa-twitter"></i></a></li>
                                            <?php endif; ?>

                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- STATIC PAGINATION (Kept as it is) -->
                <div class="col-12">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- team one end -->

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
                    <a href="contact-us" class="btn btn-secondary">
                        Contact us <i class="flaticon-next"></i>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <img src="assets/images/cta-Logo.png" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <!-- cta one end -->

    <!-- footer -->
    <?php
    include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>

</body>
</html>
