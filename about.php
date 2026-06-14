<?php require_once 'components/info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>About Us - <?= site_esc($site_name); ?></title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <?php include 'components/header.php'; ?>



        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>About Us</h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-two -->
        <section class="about-style-two sec-pad">
            <div class="shape">
                <div class="shape-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                <div class="shape-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred mb_40">
                    <span class="sub-title">Traditional & Modern Service <br />Founed in <span>2026</span></span>
                </div>
                <div class="text-inner p_relative d_block mb_60">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text mr_30">
                                <p>Founded in May 2026, Monarch Gardens was born from a simple but meaningful dream. Julio Villegas, father to Cesar and Juliana, wanted to create something special that the family could build together—something that would bring people together and create lasting memories.As a family, we envisioned a place where life’s most cherished moments could be celebrated in a beautiful and welcoming setting. </p>
                                <p>From that vision, Monarch Gardens came to life. What began as a family project quickly became a passion: creating a venue where love, joy, and meaningful connections can flourish.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text ml_30">
                                <p>Today, Monarch Gardens is more than just a venue—it is a reflection of our family’s values, dedication, and commitment to serving others. We are honored to be part of your most important milestones and to provide a space where unforgettable memories are made for generations to come.</p>
                                <p>Welcome to Monarch Gardens, where every celebration becomes part of a beautiful story.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->



        <!-- events-section -->
        <section class="service-section alternat-2 sec-pad centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title">Event Types</span>
                    <h2>Quality & Service Is <br />Our Passion</h2>
                </div>
                <div class="row clearfix">
                    <?php foreach ($events as $index => $event): ?>
                        <?php $delay = $index * 200; ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="<?= sprintf('%02d', $delay) ?>ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box2" style="overflow: hidden; line-height: 0;">
                                        <img src="<?= site_esc($event['image'] ?? ''); ?>" alt="<?= site_esc($event['title'] ?? 'Event'); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <h3><a href="<?= site_esc($event['link'] ?? '#'); ?>"><?= site_esc($event['title'] ?? 'Event'); ?></a></h3>
                                    <?php if (!empty($event['desc'])): ?>
                                        <p><?= site_esc($event['desc']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- events-section end -->



    <?php include 'components/footer.php'; ?>

        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/text_animation.js"></script>
    <script src="assets/js/text_plugins.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
