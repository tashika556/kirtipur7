<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">

</head>
<?php wp_head() ?>
<body>
    <div class="menu-btn d-lg-none d-block">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <header class="header position-relative">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-2 bg-white">
                    <div class="header_logo pl-2">
                        <a href="<?php echo get_page_link(8); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 d-lg-block d-none menu_block">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-lg-12 d-flex justify-content-between align-items-center bg_blue py-2">
                                    <div class="d-flex pl-3">
                                        <div class="icon_block_header d-flex mr-3">
                                            <p> <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </span><?php bloginfo('name'); ?></p>
                                        </div>
                                        <div class="icon_block_header d-flex">

                                            <p> <span><i class="fa fa-envelope" aria-hidden="true"></i></span><a
                                                    href="mailto:<?php the_field('email1',16) ?>">
                                                    <?php the_field('email1',16) ?></a></p>
                                        </div>
                                    </div>
                                    <div class="tiem_block">
                                        <p class="text-red blink-soft"><i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php the_field('opening_time',16) ?></span></p>
                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <nav class="nav navbar position-relative d-flex justify-content-between pl-0">
                                <ul class="navbar-links">
                                    <li class="navbar-dropdown">
                                        <a href="<?php echo get_page_link(8); ?>" class="active"> गृहपृष्ठ</a>
                                    </li>
                                    <li class="navbar-dropdown">
                                        <a href="#"> हाम्रो बारेमा

                                        </a>
                                        <div class="dropdown d-flex flex-column">
                                            <a href="<?php echo get_page_link(34); ?>"> परिचय </a>
                                            <a href="<?php echo get_page_link(48); ?>">वडाको विवरण</a>
                                            <a href="<?php echo get_page_link(80); ?>">टोली</a>

                                        </div>
                                    </li>

                                    <li class="navbar-dropdown">
                                        <a href="<?php echo get_page_link(93); ?>">हाम्रो काम</a>
                                    </li>

                                    <li class="navbar-dropdown">
                                        <a href="<?php echo get_page_link(111); ?>">प्रकाशन</a>
                                    </li>

                                    <li class="navbar-dropdown">
                                        <a href="#">
                                            अपडेट


                                        </a>
                                        <div class="dropdown d-flex flex-column">
                                            <a href="<?php echo get_page_link(136); ?>">सूचना</a>
                                            <a href="<?php echo get_page_link(140); ?>">समाचार</a>
                                            <a href="<?php echo get_page_link(157); ?>">फोटो</a>
                                            <a href="<?php echo get_page_link(168); ?>">भिडियो</a>
                                        </div>
                                    </li>
                                    <li class="navbar-dropdown">
                                        <a href="<?php echo get_page_link(16); ?>">सम्पर्क</a>
                                    </li>
                                </ul>
                                <div class="nav_right_block d-flex">
                                    <div class="nav-icon-block d-flex align-items-center">
                                        <div class="nav-icon">
                                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="call-item position-relative">
                                            <p>कल गर्नुहोस्
                                            </p>
                                            <h6><?php the_field('phone_number1',16) ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>