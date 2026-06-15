<?php
require_once 'components/info.php';

$gallery_dir = __DIR__ . '/images/gallery';
$allowed_ext = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
$gallery_images = [];

if (is_dir($gallery_dir)) {
    $gallery_images = array_values(array_filter(
        scandir($gallery_dir),
        fn($file) => in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $allowed_ext)
    ));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Gallery - <?= site_esc($site_name); ?></title>

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
                    <h2>Gallery </h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- gallery-style-three -->
        <section class="gallery-style-three">
            <div class="auto-container">
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <?php foreach ($gallery_images as $image): ?>
                            <?php
                            $src = 'images/gallery/' . $image;
                            $alt = pathinfo($image, PATHINFO_FILENAME);
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all">
                                <div class="gallery-block-two">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="<?= site_esc($src); ?>" alt="<?= site_esc($alt); ?>"></figure>
                                        <div class="content-box">
                                            <div class="view-btn"><a href="<?= site_esc($src); ?>" class="lightbox-image" data-fancybox="gallery"><i class="icon-16"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-style-three end -->


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
