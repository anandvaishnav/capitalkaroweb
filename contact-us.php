<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '_data/data.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name;?> || Contact-Us </title>
    <?php include '_inc/skin.php'; ?>
    <style>
        .contact-form-right .social-icon {
    display: flex;
    width: 40px;
    height: 40px;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 16px;
    background: #f5f5f5;
    transition: 0.3s;
}

.contact-form-right .social-icon:hover {
    background: #ff6f61;
    color: #fff;
}

    </style>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>

   <?php
   include '_inc/pre-loader.php';
   ?>

    <!-- header start -->
    <?php include '_inc/header.php'; ?>
    <!-- header end -->

    <!-- inner-page hero -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/contact-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Contact</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Contacts Us</a></li>
            </ul>
        </div>
    </div>

    <!-- Headquarters Section -->
    <div class="contact-section">
        <div class="container">
            <div class="heading-box text-center">
                <span class="heading-subtitle wow fadeInUp">🤝 CONTACT US</span>
                <h2 class="heading-title wow fadeInUp">Our Headquarters Location</h2>
            </div>

            <div class="row gutter-y-30 align-items-center">
                <div class="col-lg-6">
                    <div class="row gutter-y-30">

                        <!-- Dynamic Company Address -->
                        <div class="col-md-12">
                            <div class="contact-location">
                                <img src="assets/images/contact-us/englend-flag.jpg" alt="flag">
                                <h5>Office Address</h5>
                            </div>
                            <p><?php echo $address; ?></p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="map-image">
                        <img src="assets/images/Maps.png" alt="map-image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-lg-8">
                    <div class="contact-form-inner">
                        <form action="#">
                            <div class="inquiry-form-group-one">
                                <label><i class="fa-regular fa-user"></i></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="inquiry-form-group-one">
                                <label><i class="fa-solid fa-phone"></i></label>
                                <input type="number" name="mobail-nomber" class="form-control" placeholder="Your Mobile Number" required="">
                            </div>

                            <div class="inquiry-form-group-one">
                                <label><i class="fa-regular fa-envelope"></i></label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                            </div>

                            <div class="form-group">
                                <label><i class="fa-solid fa-layer-group"></i></label>
                                <select name="type" class="loan-type">
                                    <option>Loan type</option>
                                    <option value="Personal">Personal Loans</option>
                                    <option value="Emergency">Emergency Loans</option>
                                    <option value="Business">Business Loans</option>
                                    <option value="Student">Student Loans</option>
                                    <option value="Mortgage">Mortgage Loans</option>
                                    <option value="Small-Business">Small Business Loans</option>
                                </select>
                            </div>

                            <div class="inquiry-form-group-one">
                                <label><i class="fa-solid fa-message"></i></label>
                                <textarea name="massage" rows="4" class="form-control" placeholder="Your Message Here"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-secondary">
                                    Get a Quote <i class="flaticon-next"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Side Contact Info -->
    <div class="col-lg-4">
    <div class="contact-form-right">

        <h3 class="mb-3">Say Hii to <?php echo $site_name; ?> 👋</h3>

        <img src="assets/images/contact-us/contact-from-image.jpg" alt="" class="img-fluid mb-3">

        <div class="contact-details mb-4">
            <p>Have questions about your loan options? Our team is here to help!</p>
            <p>We're committed to providing personalized support. Reach out today.</p>
        </div>

        <!-- Contact Details -->
        <h4 class="mb-3">Contact Details</h4>
        <ul class="contact-details-list" style="list-style:none; padding:0; margin:0 0 20px 0;">
            <li class="d-flex align-items-center mb-2">
                <i class="fa-solid fa-phone me-2 text-primary"></i>
                <a href="tel:<?php echo $phone; ?>" class="text-white">
                    <?php echo $phone; ?>
                </a>
            </li>

            <li class="d-flex align-items-center mb-2">
                <i class="fa-regular fa-envelope me-2 text-primary"></i>
                <a href="mailto:<?php echo $support_email; ?>" class="text-white">
                    <?php echo $support_email; ?>
                </a>
            </li>
        </ul>

        <!-- Social Media -->
        <h4 class="mb-3">Social Media</h4>
        <ul class="contact-social-media d-flex gap-3" style="list-style:none; padding:0; margin:0;">
            <?php if (!empty($facebook)) { ?>
                <li>
                    <a href="<?php echo $facebook; ?>" class="social-icon">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($instagram)) { ?>
                <li>
                    <a href="<?php echo $instagram; ?>" class="social-icon">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($youtube)) { ?>
                <li>
                    <a href="<?php echo $youtube; ?>" class="social-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if (!empty($whatsapp)) { ?>
                <li>
                    <a href="https://wa.me/<?php echo $whatsapp; ?>" class="social-icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>

    </div>
</div>


            </div>
        </div>
    </div>

    <!-- footer -->
    <?php 
        include '_inc/footer.php';
        include '_inc/footer-js.php';
    ?>
</body>
</html>
