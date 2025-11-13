<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  404 </title>
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
    <!-- 404-section start  -->
    <div class="section-404">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 m-auto text-center">
                    <img src="assets/images/404-image.png" alt="404-image">
                    <div class=" text-center">
                        <h2>Oh no. We lost this page</h2>
                    </div>
                    <div class="section-details text-center">
                        <p>We searched everywhere but couldn’t find what you’re looking for.
                            Let’s find a better place for you to go.</p>
                    </div>
                    <a href="index.html" class="btn btn-outline-secondary">Go to home page <i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404-section end  -->
    <!-- footer two start -->
 <?php
 include '_inc/footer.php';
    include '_inc/footer-js.php';
    ?>
</body>

</html>