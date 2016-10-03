            <div id="header" class="wrap push">
                
                <?php get_template_part('/includes/top-bar'); ?>
                
                <div class="container page-header-section">
                    <div class="col-md-4 col-sm-4 col-xs-10 logo">
                        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' class="current-home"><img src="<?php bloginfo('template_directory'); ?>/img/logos/logo.png" alt="Peak Audio and Video" class="logo-img"></a>
                    </div><!-- logo -->
                    <div class="col-md-8 col-sm-8 col-xs-2 main-nav">
                        <?php get_template_part('/includes/main-nav'); ?>
                    </div>
                </div><!-- page-header-section -->
            </div><!-- header -->
