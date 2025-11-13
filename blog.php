<!DOCTYPE html>
<html lang="en">
<?php include '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Blog</title>
    <?php
   include '_inc/skin.php';
   ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>
   <?php
    include '_inc/pre-loader.php';
    ?>
    <!-- header start -->
 <?php
    include '_inc/header.php';
    ?>
    <!-- header end -->
    <!-- inner-page hero start -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/blog-hero-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Blog Standard</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="blog">Blog </a></li>
                <li><a href="#">Blog Standard </a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->
    <!-- team detail start  -->
    <div class="blog-list-section">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-8">
                    <div class="blog-block">
                        <div class="blog-list-item">
                            <div class="blog-image">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-standard-image-1.jpg" alt="blog-image"></a>
                            </div>
                            <div class="blog-item-tagline">
                                <a href="#">FIRST LOAN</a>
                            </div>
                            <div class="blog-item-meta">
                                <p><a href="#">By Deni </a></p>
                                <p><a href="#">On 29 Sup 2024</a></p>
                            </div>
                            <div class="blog-item-details">
                                <h3><a href="#">A Beginner’s Guide to Securing Your First Loan</a></h3>
                                <p>Learn the essentials of obtaining your first loan, from understanding credit scores
                                    to choosing the right lender. This guide helps first-time borrowers make informed
                                    financial decisions.</p>
                                <a href="blog-details" class="btn-link"><span>continue reading </span><i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-block">
                        <div class="blog-list-item">
                            <div class="blog-image">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-standard-image-2.jpg" alt="blog-image"></a>
                            </div>
                            <div class="blog-item-tagline">
                                <a href="#">CREDIT SCORE</a>
                            </div>
                            <div class="blog-item-meta">
                                <p><a href="#">By Jhon</a></p>
                                <p><a href="#">On 29 Sup 2024</a></p>
                            </div>
                            <div class="blog-item-details">
                                <h3><a href="#">How to Improve Your Credit Score Before Applying for a Loan</a></h3>
                                <p>A good credit score is crucial for loan approval. Discover actionable steps to boost
                                    your credit, ensuring better loan terms and higher chances of approval.</p>
                                <a href="blog-details" class="btn-link"><span>continue reading </span><i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-block">
                        <div class="blog-list-item">
                            <div class="blog-image">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-standard-image-3.jpg" alt="blog-image"></a>
                            </div>
                            <div class="blog-item-tagline">
                                <a href="#">LOAN</a>
                            </div>
                            <div class="blog-item-meta">
                                <p><a href="#">By Elei</a></p>
                                <p><a href="#">On 29 Sup 2024</a></p>
                            </div>
                            <div class="blog-item-details">
                                <h3><a href="#">5 Common Loan Application Mistakes to Avoid</a></h3>
                                <p>Applying for a loan? Avoid these common mistakes that can lead to delays or
                                    rejections. Learn how to submit a flawless application for a smooth approval
                                    process.</p>
                                <a href="blog-details" class="btn-link"><span>continue reading </span> <i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-block">
                        <div class="blog-list-item">
                            <div class="blog-image">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-standard-image-4.jpg" alt="blog-image"></a>
                            </div>
                            <div class="blog-item-tagline">
                                <a href="#"> INTEREST RATE</a>
                            </div>
                            <div class="blog-item-meta">
                                <p><a href="#">By Martin</a></p>
                                <p><a href="#">On 29 Sup 2024</a></p>
                            </div>
                            <div class="blog-item-details">
                                <h3><a href="#">The Benefits of Fixed vs. Variable Loan Interest Rates</a></h3>
                                <p>Fixed and variable interest rates offer different advantages. Explore the pros and
                                    cons of each to determine which type best suits your financial situation and
                                    long-term goals.</p>
                                <a href="blog-details" class="btn-link"><span>continue reading </span> <i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-block mb-0">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar stcky">
                        <div class="blog-block">
                            <div class="blog-serch-widget">
                                <form action="#">
                                    <input type="search" placeholder="Search ">
                                    <button type="submit"><i class="flaticon-search-interface-symbol"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-block">
                            <div class="category-widget">
                                <h4>Category</h4>
                                <ul>
                                    <li class="active"><a href="#">Home Loan</a> <span>(05)</span></li>
                                    <li><a href="#">Wedding Loan</a> <span>(09)</span></li>
                                    <li><a href="#">Mortgage Loan</a> <span>(04)</span></li>
                                    <li><a href="#">Business Loan</a> <span>(06)</span></li>
                                    <li><a href="#">Education loan</a> <span>(08)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-block">
                            <div class="recent-blog-widget">
                                <h4>Recent News</h4>
                                <div class="recent-blog-widget-item">
                                    <img src="assets/images/blog/blog-standard-image-5.jpg" alt="blog-image">
                                    <div class="recent-blog-widget-item-title">
                                        <span>September 20, 2023</span>
                                        <a href="blog-details">Securing Your Dream Home: A Complete Guide to Home
                                        </a>
                                    </div>
                                </div>
                                <div class="recent-blog-widget-item">
                                    <img src="assets/images/blog/blog-standard-image-6.jpg" alt="blog-image">
                                    <div class="recent-blog-widget-item-title">
                                        <span>September 20, 2023</span>
                                        <a href="blog-details">Fueling Business Growth: How to Choose the Right
                                            Business </a>
                                    </div>
                                </div>
                                <div class="recent-blog-widget-item">
                                    <img src="assets/images/blog/blog-standard-image-7.jpg" alt="blog-image">
                                    <div class="recent-blog-widget-item-title">
                                        <span>September 20, 2023</span>
                                        <a href="blog-details">Your Dream Wedding, Within reach Exploring Wedding
                                            Loan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-block">
                            <div class="tag-widget">
                                <h4>Popular Tags</h4>
                                <ul>
                                    <li class="active"><a href="#">Finance</a></li>
                                    <li><a href="#">loanlift</a></li>
                                    <li><a href="#">Investors</a></li>
                                    <li><a href="#">Investors</a></li>
                                    <li><a href="#">Credit Score</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-block mb-0">
                            <div class="bolg-cta-widget">
                                <div class="bolg-cta-widget-inner">
                                    <img src="assets/images/favicon-2.png" alt="logo">
                                    <h3>Advisory Specialists Premier Loan </h3>
                                    <p class="lead"><a href="tel:+020-098-45611"><i class="flaticon-phone"></i>
                                            +020-098-456 11</a></p>
                                    <a href="contact-us" class="btn btn-primary">Get Started <i
                                            class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team detail end  -->
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
                    <a href="contact-us" class="btn btn-secondary">Contact us <i class="flaticon-next"></i></a>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <img src="assets/images/cta-Logo.png" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <!-- cta one end -->
    <!-- footer two start -->
   <?php
   include '_inc/footer.php';
   include '_inc/footer-js.php';
   ?>
</body>

</html>