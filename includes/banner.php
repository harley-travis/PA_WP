        <div class="container-fluid services-carousel">
            <div id="my-slider" class="slide" data-ride="carousel">
<!--
                <ol class="carousel-indicators">
                    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                </ol>
-->
                <div class="carousel-inner" role="listbox">
                    <!-- slide 1 -->
                    <section class="item active slide-adj module parallax banner-slide" style="background-image: url('<?php the_field('banner-1'); ?>');">
                        <div class="carousel-caption">
                            <h1 class="carousel-heading buried-4"><?php the_field('banner-heading-1'); ?></h1>
                            <a href="<?php the_field('banner-btn-link'); ?>" class="peak-btn carousel-btn"><?php the_field('banner-btn-text'); ?></a>
                        </div>
                    </section>
                    
                </div><!-- carousell-inner -->
                <!-- slider controls -->
<!--
                <a href="#my-slider" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a href="#my-slider" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
-->
            </div><!-- my-slider -->
        </div><!-- services-carousel -->
