<?php
include_once '_data/data.php';
?>


<div class="topbar-one">
    <div class="container-fluid">
        <div class="topbar-one-inner">
            <ul class="topbar-one-info white-font">
                <li>
                    <i class="flaticon-location"></i>
                    <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($address_short); ?>" target="_blank"><b><?php echo $address_short; ?></b></a>
                </li>
                <li>
                    <i class="flaticon-mail"></i>
                    <?php if (isset($support_email) && filter_var($support_email, FILTER_VALIDATE_EMAIL)): ?>
                        <a href="mailto:<?php echo $support_email; ?>"><b><?php echo $support_email; ?></b></a>
                    <?php else: ?>
                        <span>-</span>
                    <?php endif; ?>
                </li>
                <li>
                    <i class="flaticon-phone-call"></i>
                    <?php if (isset($phone) && !empty($phone)): ?>
                        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><b><?php echo $phone; ?></b></a>
                    <?php else: ?>
                        <span>-</span>
                    <?php endif; ?>
                </li>

                <li>
                    <i class="flaticon-whatsapp"></i>
                    <?php if (isset($whatsapp) && !empty($whatsapp)): ?>
                        <a href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp); ?>"><b><?php echo $whatsapp; ?></b></a>
                    <?php else: ?>
                        <span>-</span>
                    <?php endif; ?>
                </li>
            </ul>
            <div class="topbar-one-right">
                <!-- <ul class="topbar-one-right-one white-font">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Content</a></li>
                    </ul> -->
                <ul class="topbar-one-social-media white-font">
                    <li><a href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo $instagram; ?>"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="<?php echo $youtube; ?>"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp); ?>"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="main-header">
    <div class="container-fluid">
        <nav class="main-menu">
            <div class="main-menu-logo">
                <a href="index">
                    <img src="<?php echo $logo_img; ?>" alt="header-logo">
                </a>
            </div>
            <div class="main-menu-inner">
                <ul class="main-menu-list">
                    <li><a href="index">Home</a>

                    </li>
                    <li class="menu-item-children"><a href="#">About</a><i class="fa-solid fa-chevron-down"></i>
                        <ul>
                            <li><a href="about">About CapitalKaro</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions">Terms & Conditions</a></li>
                            <!-- <li><a href="careers">Careers</a></li>
                                <li><a href="apply-loan">Apply a Loan</a></li>
                                <li><a href="team">Meet The Team</a></li>
                                <li><a href="team-details">Team Details</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-children"><a href="#">Services</a><i class="fa-solid fa-chevron-down"></i>
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
                    <li class="menu-item menu-item-custom"><a href="own-branding" >Own Branding</a></li>
                    <!-- <li class="menu-item-children"><a href="#">Blog</a><i class="fa-solid fa-chevron-down"></i>
                        <ul>
                            <li><a href="blog">Blog Standard</a></li>
                            <li><a href="blog-grid">Blog Grid</a></li>
                            <li><a href="blog-grid-2">Blog Grid 2</a></li>
                            <li><a href="blog-details">Blog Details</a></li>
                        </ul>
                    </li> -->
                                      

                    <li class="menu-item-children"><a href="faq">FAQ</a></li>
                    <li class="menu-item-children"><a href="contact-us">Contact Us</a></li>
                </ul>
                <div class="header-right-end">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                </div>
                <div class="main-menu-right">
                    <a href="#" class="search-btn"><i class="flaticon-search-interface-symbol"></i></a>
                    <a href="contact-us" class="btn btn-primary">Get Started <i class="flaticon-next"></i></a>
                </div>
            </div>
        </nav>
    </div>
</header>