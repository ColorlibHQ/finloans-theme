<?php
    $finloans_top_phone_number = finloans_opt( 'finloans_top_phone_number' ) ? finloans_opt( 'finloans_top_phone_number' ) : '';
    $finloans_header_btn_text = finloans_opt( 'finloans_header_btn_text' ) ? finloans_opt( 'finloans_header_btn_text' ) : '';
    $finloans_header_btn_url = finloans_opt( 'finloans_header_btn_url' ) ? finloans_opt( 'finloans_header_btn_url' ) : '';
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <?php echo finloans_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new finloans_bootstrap_navwalker()
                                            ));
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <?php
                                    if ( $finloans_top_phone_number ) {
                                        echo '
                                        <div class="phone_num d-none d-xl-block">
                                            <a href="tel:'.esc_attr($finloans_top_phone_number).'"> <i class="fa fa-phone"></i> '.esc_html($finloans_top_phone_number).'</a>
                                        </div>
                                        ';
                                    }
                                    if ( $finloans_header_btn_text ) {
                                        echo '
                                        <div class="d-none d-lg-block">
                                            <a class="boxed-btn4" href="'.esc_url($finloans_header_btn_url).'">'.esc_html($finloans_header_btn_text).'</a>
                                        </div>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->