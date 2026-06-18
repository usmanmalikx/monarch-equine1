<?php require_once 'components/info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Contact Us - <?= site_esc($site_name); ?></title>

<!-- Fav Icon -->
<link rel="icon" href="images/favicon.png" type="image/x-icon">

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
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                        <div class="info-inner">
                            <ul class="info-list clearfix">
                                <li>
                                    <i class="icon-39"></i>
                                    <p><?= site_esc($site_address); ?></p>
                                </li>
                                <li>
                                    <i class="icon-40"></i>
                                    <p><a href="tel:<?= site_esc($site_phone_link); ?>"><?= site_esc($site_phone); ?></a></p>
                                </li>
                                <li>
                                    <i class="icon-1"></i>
                                    <p><a href="mailto:<?= site_esc($site_email); ?>"><?= site_esc($site_email); ?></a></p>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <?php foreach ($site_social_links as $social_link) : ?>
                                    <li><a href="<?= site_esc($social_link['url']); ?>"><i class="<?= site_esc($social_link['icon']); ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner centred">
                            <h2>Get In Touch</h2>
                            <form action="https://forms.zohopublic.com/rsviprealestatemarketing1/form/Monarch/formperma/BHGCd_VHdy2KLRnPgW3NQZxG2fEdJGUbBR0yTDXfGiU/htmlRecords/submit" name="form" id="contact-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"> 
                                <input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
                                <input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
                                <input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="SingleLine" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="Email" placeholder="Your email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="PhoneNumber_countrycode" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="SingleLine4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
    <div class="map-inner p_relative d_block">
<iframe 

src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105507.79491950013!2d-118.99922992427419!3d34.271027973075476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e8344d0a8fd35b%3A0x5f708db9680c20ff!2s4651%20Donlon%20Rd%2C%20Somis%2C%20CA%2093066!5e0!3m2!1sen!2sus!4v1780602453259!5m2!1sen!2sus" 
    width="100%" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>    
</div>
</section>
        <!-- google-map-section end -->


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
    <script src="assets/js/product-filter.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
