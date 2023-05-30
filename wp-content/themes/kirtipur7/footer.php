<a id="button"></a>
<section class="footer position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer_text text-center d-flex justify-content-center align-items-center">
                    <h3><?php the_field('address',16) ?></h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_text text-center d-flex justify-content-center align-items-center">
                    <h3> <a href="tel:<?php the_field('phone_number1',16) ?>"><?php the_field('phone_number1',16) ?></a></h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_text text-center d-flex justify-content-center align-items-center">

                    <h3><a href="mailto:<?php the_field('email1',16) ?>">
                    <?php the_field('email1',16) ?></a></h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="social_icon">
                    <ul class="footer_text d-flex align-items-center justify-content-around">
                        <li><a href="<?php the_field('facebook',16) ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php the_field('twitter',16) ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php the_field('youtube',16) ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="<?php the_field('instagram',16) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="footer_menu-list">
                    <ul class="mt-4 d-flex justify-content-between">
                        <li>
                            <a href="<?php echo get_page_link(8); ?>">गृहपृष्ठ</a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(34); ?>">हाम्रो बारेमा</a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(140); ?>">
                                समाचार
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(136); ?>">सूचना</a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(16); ?>">सम्पर्क</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="footer_button text-center mt-5">
                    <p>Copyright © २०८० कीर्तिपुर नगरपालिका वडा नं ७ <span> Website by <b>DigiSoft
                                Developers</b></span>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section><?php wp_footer() ?>

<!-- mobile menu start  -->
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
    </header>
    <div class="menu_mobile pt-3">
        <div class="item">
            <a class="sub-btn">
            हाम्रो बारेमा
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
            <a href="<?php echo get_page_link(34); ?>" class="sub-item"> परिचय </a>
                                            <a href="<?php echo get_page_link(48); ?>" class="sub-item">वडाको विवरण</a>
                                            <a href="<?php echo get_page_link(80); ?>" class="sub-item">टोली</a>
            </div>
        </div>
        <div class="item"><a href="<?php echo get_page_link(93); ?>">हाम्रो काम</a></div>
        <div class="item"><a href="<?php echo get_page_link(111); ?>">प्रकाशन</a></div>
        <div class="item">
            <a class="sub-btn">
            अपडेट
                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
            <a href="<?php echo get_page_link(136); ?>" class="sub-item">सूचना</a>
                                            <a href="<?php echo get_page_link(140); ?>" class="sub-item">समाचार</a>
                                            <a href="<?php echo get_page_link(157); ?>" class="sub-item">फोटो</a>
                                            <a href="<?php echo get_page_link(168); ?>" class="sub-item">भिडियो</a>
            </div>
        </div>
    

      
        <div class="item"> <a href="<?php echo get_page_link(16); ?>">सम्पर्क</a></div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>
