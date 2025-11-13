<?php
include_once '_data/data.php';
?>  
  
  
  <div class="topbar-one">
        <div class="container-fluid">
            <div class="topbar-one-inner">
                <ul class="topbar-one-info white-font">
                    <li>
                        <i class="flaticon-location"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($address); ?>" target="_blank"><?php echo $address; ?></a>
                    </li>
                    <li>
                        <i class="flaticon-mail"></i>
                        <?php if (isset($support_email) && filter_var($support_email, FILTER_VALIDATE_EMAIL)): ?>
                        <a href="mailto:<?php echo $support_email; ?>"><?php echo $support_email; ?></a>
                        <?php else: ?>
                        <span>Invalid email</span>
                        <?php endif; ?>
                    </li>
                    <li>
                        <i class="flaticon-phone-call"></i>
                        <?php if (isset($phone) && !empty($phone)): ?>
                        <a href="tel:+020.098.45611"><?php echo $phone; ?></a>
                        <?php else: ?>
                        <span>Phone number not available</span>
                        <?php endif; ?>
                    </li>
                </ul>
                <div class="topbar-one-right">
                    <ul class="topbar-one-right-one white-font">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Content</a></li>
                    </ul>
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
                                <li><a href="about">About Us</a></li>
                                <li><a href="faq">FAQ</a></li>
                                <li><a href="careers">Careers</a></li>
                                <li><a href="apply-loan">Apply a Loan</a></li>
                                <li><a href="team">Meet The Team</a></li>
                                <li><a href="team-details">Team Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-children"><a href="#">Services</a><i class="fa-solid fa-chevron-down"></i>
                            <ul>
                                <li><a href="service">Services </a></li>
                                <li><a href="service-2">Services 2</a></li>
                                <li><a href="service-details">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-children"><a href="#">Partner Program</a><i class="fa-solid fa-chevron-down"></i>
                            <ul>
                                <li><a href="portfolio">Portfolio</a></li>
                                <li><a href="portfolio-grid">Portfolio Grid</a></li>
                                <li><a href="portfolio-details">Portfolio Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-children"><a href="#">Blog</a><i class="fa-solid fa-chevron-down"></i>
                            <ul>
                                <li><a href="blog">Blog Standard</a></li>
                                <li><a href="blog-grid">Blog Grid</a></li>
                                <li><a href="blog-grid-2">Blog Grid 2</a></li>
                                <li><a href="blog-details">Blog Details</a></li>
                            </ul>
                        </li>
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