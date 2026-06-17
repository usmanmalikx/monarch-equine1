
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <img src="images/logo-horse.png" alt=""></a>
                        <div class="txt-loading">
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="H" class="letters-loading">
                                H
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        
                         <div class="btn-box d-flex justify-content-center w-100">
                                <a href="application.php">Schedule a Tour</a>
                            </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="events.php">Event Types</a></li>
                                        <!--<li><a href="services.php">Services</a></li>-->
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact</a></li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><?= site_esc($site_address); ?></li>
                        <li><a href="tel:<?= site_esc($site_phone_link); ?>"><?= site_esc($site_phone); ?></a></li>
                        <li><a href="mailto:<?= site_esc($site_email); ?>"><?= site_esc($site_email); ?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <?php foreach ($site_social_links as $social_link) : ?>
                            <li><a href="<?= site_esc($social_link['url']); ?>"><span class="<?= site_esc($social_link['icon']); ?>"></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
