<footer class="footer-one">
    <div class="container">
        <div class="footer-main-one">
            <div class="footer-one-inner">
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-lg-4 col-md-6 footer-about">
                        <div class="footer-one-about">
                            <a href="#">
                                <img src="<?php echo $logo_img; ?>" alt="footer-logo">
                            </a>
                        </div>
                        <div class="footer-one-about-details">
                            <p>Contact us loanlift and collaborate with us for making your big dream business with
                                our best loan services.</p>
                        </div>
                        <div class="footer-one-about-contact">
                            <h4>Contact us</h4>
                            <ul>
                                <li>
                                    <?php 
                                    $support_email = isset($support_email) ? trim($support_email) : 'default@example.com';
                                    if (filter_var($support_email, FILTER_VALIDATE_EMAIL)): ?>
                                        <a href="mailto:<?php echo htmlspecialchars($support_email); ?>">
                                            <?php echo htmlspecialchars($support_email); ?>
                                        </a>
                                    <?php else: ?>
                                        <span>Invalid email</span>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                    $phone = isset($phone) ? trim($phone) : '';
                                    if (!empty($phone)): ?>
                                        <a href="tel:<?php echo htmlspecialchars($phone); ?>">
                                            <?php echo htmlspecialchars($phone); ?>
                                        </a>
                                    <?php else: ?>
                                        <span>Phone number not available</span>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-one-link">
                            <h3>Services</h3>
                            <ul>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Personal Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Business Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Mortgage Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Emergency Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Student Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="service-details">Small Business Loans</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="footer-one-link m-0">
                            <h3>Page</h3>
                            <ul>
                                <li><i class="flaticon-right-arrow"></i><a href="about">About Us</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="faq">FAQS</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="careers">Careers</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="apply-loan">Apply a Loan</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="contact-us">Contact Us</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="team">Meet The Team</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="footer-One-subscribe">
                            <h3>Subscribe</h3>
                            <p>Stay up-to-date with the latest trends in digital marketing and receive exclusive
                                tips and insights by subscribing to our newsletter.</p>
                            <form class="footer-One-subscribe-form" action="#">
                                <input type="email" name="email" placeholder="Your Email Address" required>
                                <button type="submit" class="btn btn-primary btn-small">
                                    Subscribe <i class="flaticon-next"></i>
                                </button>
                            </form>
                            <div class="footer-one-social-media">
                                <h4>Social Icons</h4>
                                <ul>
                                   
                                        <li><a href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $instagram; ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $youtube; ?>"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp); ?>"><i class="fa-brands fa-whatsapp"></i></a></li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="footer-lower">
            <div class="container">
                <div class="row row-gap-3">
                    <div class="col-md-6">
                        <div class="footer-copy-right-one">
                            <p><?php echo $copy_right; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="footer-buttom-link text-end">
                            <ul>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Search popup -->
<div class="search-popup">
    <button class="close-search"></button>
    <form method="post" action="blog">
        <div class="form-group">
            <input type="search" name="search" placeholder="Search Here" required>
            <button type="submit"><i class="flaticon-search"></i></button>
        </div>
    </form>
</div>

<!-- Mobile navigation -->
<div class="mobile-nav-wrapper">
    <div class="mobile-nav-overlay mobile-nav-toggler"></div>
    <div class="mobile-nav-content">
        <a href="#" class="mobile-nav-close mobile-nav-toggler">
            <span></span>
            <span></span>
        </a>
        <div class="logo-box">
            <a href="index"><img width="150" src="<?php echo $logo_img; ?>" alt="logo"></a>
        </div>
        <div class="mobile-nav-container">
            <ul class="mobile-menu-list">
                <li class="menu-item-has-children dropdown"><a href="#">Home</a>
                    <ul>
                        <li><a href="index">Home-1</a></li>
                        <li><a href="index-2">Home-2</a></li>
                        <li><a href="index-3">Home-3</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown"><a href="#">Services</a>
                    <ul>
                        <li><a href="service">Services</a></li>
                        <li><a href="service-2">Services 2</a></li>
                        <li><a href="service-details">Services Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown"><a href="#">Pages</a>
                    <ul>
                        <li><a href="about">About Us</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="careers">Careers</a></li>
                        <li><a href="apply-loan">Apply a Loan</a></li>
                        <li><a href="contact-us">Contact Us</a></li>
                        <li><a href="team">Meet The Team</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown"><a href="#">Blog</a>
                    <ul>
                        <li><a href="blog">Blog Standards</a></li>
                        <li><a href="blog-grid">Blog Grid</a></li>
                        <li><a href="blog-grid-2">Blog Grid 2</a></li>
                        <li><a href="blog-details">Blog Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown"><a href="#">Portfolio</a>
                    <ul>
                        <li><a href="portfolio">Portfolio</a></li>
                        <li><a href="portfolio-grid">Portfolio Grid</a></li>
                        <li><a href="portfolio-details">Portfolio Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top-text">back top</span>
    <span class="scroll-to-top-wrapper"><span class="scroll-to-top-inner"></span></span>
</a>
