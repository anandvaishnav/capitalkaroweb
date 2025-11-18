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
                            <p><?php echo $short; ?></p>
                        </div>
                        <div class="footer-one-about-contact">
                            <h4>Reach us</h4>
                            <ul>
                                <li>
                                    <?php 
                                    $support_email = isset($support_email) ? trim($support_email) : '-';
                                    if (filter_var($support_email, FILTER_VALIDATE_EMAIL)): ?>
                                        <a href="mailto:<?php echo htmlspecialchars($support_email); ?>"> <i class="flaticon-mail"></i>
                                            <?php echo htmlspecialchars($support_email); ?>
                                        </a>
                                    <?php else: ?>
                                        <span>-</span>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                    $phone = isset($phone) ? trim($phone) : '';
                                    if (!empty($phone)): ?>
                                        <a href="tel:<?php echo htmlspecialchars($phone); ?>"> <i class="flaticon-phone-call"></i>
                                            <?php echo htmlspecialchars($phone); ?>
                                        </a>
                                    <?php else: ?>
                                        <span>-</span>
                                    <?php endif; ?>
                                </li>

                                 <li>
                                    <?php 
                                    $phone = isset($whatsapp) ? trim($whatsapp) : '';
                                    if (!empty($phone)): ?>
                                        <a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>"> <i class="flaticon-whatsapp"></i>
                                            <?php echo htmlspecialchars($whatsapp); ?>
                                        </a>
                                    <?php else: ?>
                                        <span>-</span>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-one-link">
                            <h3>Services @ <br> CapitalKaro   </h3>
                            <ul>
                                <li><i class="flaticon-right-arrow"></i><a href="personal-loan">Personal Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="business-loan">Business Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="instant-loan">Instant Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="home-loan">Home Loans</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="credit-card">Credit Cards</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="saving-account">Saving Accounts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="footer-one-link m-0">
                            <h3>More @ CapitalKaro</h3>
                            <ul>
                                <li><i class="flaticon-right-arrow"></i><a href="about">About Us</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="faq">FAQS</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="#careers">Careers</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="#apply-loan">Apply a Loan</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="contact-us">Contact Us</a></li>
                                <li><i class="flaticon-right-arrow"></i><a href="#team">Meet The Team</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="footer-One-subscribe">
                            <h3>Don't Miss an Update!</h3>
                            <p>Subscribe to our newsletter and get the latest business insights, loan industry updates, and exclusive tips delivered directly to you.</p>
                            <form class="footer-One-subscribe-form" action="#">
                                <input type="email" name="email" placeholder="Your Email Address" required>
                                <button type="submit" class="btn btn-primary btn-small">
                                    Subscribe <i class="flaticon-next"></i>
                                </button>
                            </form>
                            <div class="footer-one-social-media">
                                <h4>Stay Tunned With - CapitalKaro </h4>
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
                    <div class="col-md-8">
                        <div class="footer-copy-right-one">
                            <p><?php echo $copy_right; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="footer-buttom-link text-end">
                            <ul>
                                <li><a href="terms-and-conditions">Terms & Condition</a></li>
                                <li><a href="privacy-policy">Privacy policy</a></li>
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

        <li><a href="index">Home</a></li>

        <li class="menu-item-has-children dropdown"><a href="#">About</a>
            <ul>
                <li><a href="about">About CapitalKaro</a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="privacy-policy">Privacy Policy</a></li>
                <li><a href="terms-and-conditions">Terms & Conditions</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children dropdown"><a href="#">Services</a>
            <ul>
                <li><a href="all-loans">All Loans</a></li>
                <li><a href="kyc-loan">KYC Loan</a></li>
                <li><a href="instant-loan">Instant Loan</a></li>
                <li><a href="personal-loan">Personal Loan</a></li>
                <li><a href="business-loan">Business Loan</a></li>
                <li><a href="home-loan">Home Loan</a></li>
                <li><a href="credit-card">Credit Card</a></li>
                <li><a href="saving-account">Saving Account</a></li>
                <li><a href="demat-account">Demat Account</a></li>
                <li><a href="loan-against-shares">Loan Against Shares</a></li>
            </ul>
        </li>

        <li><a href="own-branding">Own Branding</a></li>

        <li><a href="faq">FAQ</a></li>
        <li><a href="contact-us">Contact Us</a></li>

    </ul>
</div>

    </div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top-text">back top</span>
    <span class="scroll-to-top-wrapper"><span class="scroll-to-top-inner"></span></span>
</a>
