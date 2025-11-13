<!DOCTYPE html>
<html lang="en">
<?php include_once '_data/data.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> || Apply Loan</title>
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
    <div class="inner-page-hero" style="background-image: url(assets/images/background/apply-now-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2>Apply Now</h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="#">Page </a></li>
                <li><a href="#">Apply Now </a></li>
            </ul>
        </div>
    </div>
    <!-- inner-page hero end -->
    <!-- apply-loan start  -->
    <div class="apply-loan-section" style="background-color:white;">
        <div class="container">
            <div class="heading-box">
                <span class="heading-subtitle wow fadeInUp animated animated">🤝 CALCULATE YOU LOAN AMOUNT</span>
                <h3>Loan Details</h3>
            </div>
            <form action="#">
                <div class="apply-loan-widget">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Loan Amount*</label>
                                <input type="number" name="amount" placeholder="Loan Amount" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Monthly Income*</label>
                                <input type="number" name="income" placeholder="Monthly Income" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Purpose of Loan*</label>
                                <select name="purpose" class="from-dropdown" required="">
                                    <option>Purpose of Loan</option>
                                    <option value="">Secure a loan to buy your dream home or investment property.
                                    </option>
                                    <option value="">Lower your interest rate, reduce monthly payments, or access
                                        equity.
                                    </option>
                                    <option value="">Cover tuition fees and education-related expenses for yourself or
                                        family.</option>
                                    <option value="">Pay for unexpected medical bills or treatments.</option>
                                    <option value="">Address urgent financial needs with immediate access to funds.
                                    </option>
                                    <option value="">Fund renovations or upgrades to enhance the value of your property.
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Loan Years*</label>
                                <select name="Years" class="from-dropdown" required="">
                                    <option>Loan Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="8">8 Years</option>
                                    <option value="10">10 Years</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apply-loan-widget">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h3>Personal Details</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input type="text" name="name" placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="email" name="email" placeholder="E-Mail Id" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Mobile Number*</label>
                                <input type="number" name="number" placeholder="Mobile Number" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Marital Status*</label>
                                <select name="Marital" class="from-dropdown" required="">
                                    <option>Select Marital Status</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Birth Date*</label>
                                <input type="date" name="Birth-Date" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Taxpayer ID*</label>
                                <input type="text" name="Taxpayer" placeholder="Taxpayer ID" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apply-loan-widget">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h3>Other Details</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Property Location*</label>
                                <input type="text" name="Address" placeholder="Write A Full Address" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Employer Status*</label>
                                <select name="Employ" class="from-dropdown" required="">
                                    <option>Select Employ status</option>
                                    <option value="Part-Time">Part Time</option>
                                    <option value="Full-Time">Full Time</option>
                                    <option value="Self-Employ">Self Employ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-10">
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary">Apply Loan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- apply-loan end  -->
    <!-- footer two start -->
    <?php
    include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>
</body>

</html>