<?php


include '_inc/skin.php'; // data.php is included inside this
include '_inc/pre-loader.php';
include '_inc/header.php';

// Get ID from URL
$id = $_GET['id'] ?? 0;
$member = null;

// Find the team member
foreach ($team as $t) {
    if ($t['id'] == $id) {
        $member = $t;
        break;
    }
}

// If member not found
if (!$member) {
    echo "<h2 style='padding:50px;text-align:center;'>Team member not found.</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo
    $site_name; ?> || <?= $member['name'] ?></title>
</head>

<body class="custom-cursor">

    <!-- Hero -->
    <div class="inner-page-hero" style="background-image: url(assets/images/background/team-bg.jpg);">
        <div class="container">
            <div class="hero-heading-title">
                <h2><?= $member['name'] ?></h2>
            </div>
            <ul class="bradcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="#"><?= $member['name'] ?></a></li>
            </ul>
        </div>
    </div>

    <!-- Team Detail -->
    <div class="team-details-section">
        <div class="container">
            <div class="row gutter-y-30 gutter-x-15">

                <!-- LEFT SIDE -->
                <div class="col-lg-4">
                    <div class="left-side-sticy">

                        <!-- Profile Image -->
                        <div class="team-details-block">
                            <div class="team-images">
                                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
                            </div>
                        </div>

                        <!-- Social Section -->
                        <div class="team-social-media">
                            <h3><?= $member['designation'] ?></h3>

                            <ul>
                                <?php if (!empty($member['details']['email'])): ?>
                                    <li>
                                        <h4>Email Address</h4>
                                        <a href="mailto:<?= $member['details']['email'] ?>">
                                            <?= $member['details']['email'] ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($member['details']['phone'])): ?>
                                    <li>
                                        <h4>Phone Number</h4>
                                        <a href="tel:<?= $member['details']['phone'] ?>">
                                            <?= $member['details']['phone'] ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <li>
                                    <h4>Social Icons</h4>
                                    <ul>

                                        <?php foreach ($member['details']['social'] as $platform => $url): ?>
                                            <li><a href="<?= $url ?>" target="_blank">
                                                <?php if ($platform == 'facebook'): ?>
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                <?php elseif ($platform == 'twitter'): ?>
                                                    <i class="fa-brands fa-twitter"></i>
                                                <?php elseif ($platform == 'instagram'): ?>
                                                    <i class="fa-brands fa-instagram"></i>
                                                <?php elseif ($platform == 'linkedin'): ?>
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                <?php endif; ?>
                                            </a></li>
                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-8">

                    <!-- About -->
                    <div class="team-details-block">
                        <p><?= $member['details']['about'] ?></p>
                    </div>

                    <!-- Experience -->
                    <div class="team-details-block">
                        <h4>Experience</h4>
                        <ul class="team-details-list">
                            <?php foreach ($member['details']['experience'] as $exp): ?>
                                <li><?= $exp ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Achievements -->
                    <?php if (!empty($member['details']['achievements'])): ?>
                        <div class="team-details-block">
                            <h4>Achievements</h4>
                            <ul class="team-details-list">
                                <?php foreach ($member['details']['achievements'] as $ach): ?>
                                    <li><?= $ach ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Form (unchanged) -->
                    <div class="team-details-block">
                        <form action="#">
                            <h4>Team Contact</h4>
                            <div class="inquiry-form-group-one">
                                <div class="inquiry-form-group-one-inner">
                                    <label><i class="fa-regular fa-user"></i></label>
                                    <input type="text" class="form-control" placeholder="Full Name" required="">
                                </div>
                                <div class="inquiry-form-group-one-inner">
                                    <label><i class="fa-regular fa-envelope"></i></label>
                                    <input type="email" class="form-control" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="inquiry-form-group-one">
                                <div class="inquiry-form-group-one-inner">
                                    <label><i class="fa-solid fa-list"></i></label>
                                    <input type="text" class="form-control" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="inquiry-form-group-one">
                                <label><i class="fa-solid fa-message"></i></label>
                                <textarea rows="3" class="form-control" placeholder="About your requirement"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary">
                                Inquiry Now <i class="flaticon-next"></i>
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- OTHER TEAM (Dynamic) -->
    <section class="team-one" style="background-color: transparent;">
        <div class="container">
            <div class="row gutter-y-30">

                <?php foreach ($team as $other): if ($other['id'] != $member['id']): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-one-box">
                            <a href="team-details.php?id=<?= $other['id'] ?>" class="team-one-image">
                                <img src="<?= $other['image'] ?>" alt="<?= $other['name'] ?>">
                            </a>
                            <div class="team-one-details">
                                <div class="team-one-details-inner">
                                    <h5><?= $other['name'] ?></h5>
                                    <p><?= $other['designation'] ?></p>

                                    <div class="team-one-social-media">
                                        <ul>
                                            <?php foreach ($other['details']['social'] as $platform => $url): ?>
                                                <li><a href="<?= $url ?>" target="_blank">
                                                    <?php if ($platform == 'facebook'): ?>
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    <?php elseif ($platform == 'twitter'): ?>
                                                        <i class="fa-brands fa-twitter"></i>
                                                    <?php elseif ($platform == 'instagram'): ?>
                                                        <i class="fa-brands fa-instagram"></i>
                                                    <?php elseif ($platform == 'linkedin'): ?>
                                                        <i class="fa-brands fa-linkedin-in"></i>
                                                    <?php endif; ?>
                                                </a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; endforeach; ?>

            </div>
        </div>
    </section>

    <?php include '_inc/footer.php'; ?>
    <?php include '_inc/footer-js.php'; ?>

</body>

</html>
