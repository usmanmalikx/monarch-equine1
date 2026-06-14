
        <!-- main-footer -->
        <footer class="main-footer bg-color-1">
            <div class="footer-top pt_85 pb_500">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-12 footer-column">
                            <div class="footer-widget logo-widget text-center">
                                <div class="shape">
                                    <div class="shape-1" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                                </div>
                                <div class="widget-content ">
                                    <figure class="footer-logo"><a href="index.html"><img src="images/logo-full.png" alt=""></a></figure>
                                    <div class="widget-content">
                                    <ul class="info-list clearfix pb_30">
                                        <li><?= site_esc($site_address); ?></li>
                                        <li><a href="mailto:<?= site_esc($site_email); ?>"><?= site_esc($site_email); ?></a></li>
                                        <li><a href="tel:<?= site_esc($site_phone_link); ?>"><?= site_esc($site_phone); ?></a></li>
                                    </ul>
                                </div>
                                    <ul class="social-links clearfix">
                                        <?php foreach ($site_social_links as $social_link) : ?>
                                            <li><a href="<?= site_esc($social_link['url']); ?>"><i class="<?= site_esc($social_link['icon']); ?>"></i></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred dark">
                <div class="auto-container">
                    <div class="copyright dark">
                        <p>Copyright <?= date('Y') ?> <?= site_esc($site_name); ?> All Right Reserved.</p>
                        <small class="copyright__content">Website developed by <a href="http://tenstepsahead.co" style="text-decoration:underline;" title="Ten Steps Ahead">Ten Steps Ahead</a></small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

