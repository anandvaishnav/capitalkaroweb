<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Career</title>
    <?php include '_inc/skin.php'; // data.php included ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>

    <?php include '_inc/pre-loader.php'; ?>
    <?php include '_inc/header.php'; ?>

    <!-- inner-page hero start -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/apply-now-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Careers</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->

    <!-- careers start -->
    <div class="careers-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="heading-box text-center">
                        <span class="heading-subtitle wow fadeInUp animated">🤝 CAREERS</span>
                        <h2 class="heading-title wow fadeInUp animated">
                            Explore Exciting New Career Opportunities at capitalkaro
                        </h2>
                    </div>
                </div>
            </div>

            <!-- TABS -->
            <div class="careers-tabs">

                <!-- TAB BUTTONS -->
                <div class="careers-tab-links">
                    <button class="careers-tab-link active" data-tab="all"> All</button>
                    <button class="careers-tab-link" data-tab="officer">Loan Officer</button>
                    <button class="careers-tab-link" data-tab="analyst">Financial Analyst</button>
                    <button class="careers-tab-link" data-tab="manager">Operations Manager</button>
                    <button class="careers-tab-link" data-tab="marketing">Marketing</button>
                </div>

                <!-- TAB CONTENT -->
                <?php 
                $departments = ["all","officer","analyst","manager","marketing"];
                
                foreach ($departments as $dept): 
                ?>
                    <div class="careers-tab-content <?= $dept == 'all' ? 'active' : '' ?>" id="<?= $dept ?>">

                        <?php foreach ($careers as $job): ?>
                            <?php if ($dept == "all" || $dept == $job["department"]): ?>
                                <div class="careers-tab-item">

                                    <!-- JOB HEADER -->
                                    <div class="job-title">
                                        <h3><a href="#"><?= $job["title"] ?></a></h3>
                                        <a href="#" class="btn btn-secondary">Apply <i class="flaticon-next"></i></a>
                                    </div>

                                    <!-- JOB DETAILS -->
                                    <div class="job-details">
                                        <p><?= $job["description"] ?></p>
                                    </div>

                                    <!-- JOB TYPE -->
                                    <div class="job-type">
                                        <div class="job-type-inner">
                                            <i class="flaticon-remote-control"></i>
                                            <p><?= $job["location"] ?></p>
                                        </div>
                                        <div class="job-type-inner">
                                            <i class="flaticon-time"></i>
                                            <p><?= $job["type"] ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
    <!-- careers end -->

    <!-- careers-cta start -->
    <div class="careers-cta-section">
        <div class="container">
            <div class="careers-cta-title text-center">
                <h2><?= $site_name ?>truly values work-life balance. We work hard for you and deliver, but at the end of the day you can switch off.</h2>
            </div>
            <div class="ceo-details">
                <img src="assets/images/about/ceo-image-small.png" alt="ceo-image">
                <div class="ceo-details-inner">
                    <p>Zachary</p>
                    <span>CEO, capitalkaro</span>
                </div>
            </div>
        </div>
    </div>
    <!-- careers-cta end -->

    <?php include '_inc/footer.php'; ?>
    <?php include '_inc/footer-js.php'; ?>

</body>
</html>
