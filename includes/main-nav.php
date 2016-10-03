<!-------------------------- TOGGLE SWITCH ------------------------->
<a href="#menu" class="menu-link"><span class="glyphicon glyphicon-menu-hamburger m-nav-img" aria-hidden="true"></span></a>

<!-------------------------- DESKTOP NAV --------------------------->
<nav class="mainNav">
    <ul class="nav nav-pills">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li class="dropdown"><a href="<?php echo WORDPRESS_URL; ?>/about-us/" class="currentAbout">About</a>
<!--
            <ul class="dropdown-menu">
                <li><a href="<?php echo WORDPRESS_URL; ?>">Careers</a></li>
            </ul>
-->
        </li>
        <li class="dropdown"><a href="<?php echo WORDPRESS_URL; ?>/packages/" class="currentProducts">Packages <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo WORDPRESS_URL; ?>/peak-link/">Peak Link</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/peak-view/">Peak View</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/peak-edge/">Peak Edge</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="<?php echo WORDPRESS_URL; ?>/solutions/" class="currentServices">Solutions <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo WORDPRESS_URL; ?>/burglar-alarms">Burglar Alarms</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/fire-protection">Fire Detection</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/alarm-response">Alarm Response</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/under-surveillance">Camera Surveillance</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/access-control">Access Control</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/intercom">Intercom</a></li>
                <li><a href="<?php echo WORDPRESS_URL; ?>/nurse-call">Nurse Calls</a></li>
            </ul>
        </li>
        <li><a href="<?php echo WORDPRESS_URL; ?>/contact-us/">Contact</a></li>
    </ul>
</nav>

<!-------------------------- MOBILE MENU -------------------------->
<nav id="menu" class="panel-nav" role="navigation">
    <ul class="desk-mainNav">
        <li class="desk-mainNav-li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="current-home-res">Home</a></li>
        <li class="desk-mainNav-li"><a href="<?php echo WORDPRESS_URL; ?>/about-us" class="current-home-res">About</a></li>
        <li class="desk-mainNav-li"><a href="<?php echo WORDPRESS_URL; ?>/packages" class="current-home-res">Packages</a></li>
        <li class="desk-mainNav-li"><a href="<?php echo WORDPRESS_URL; ?>/solutions" class="current-home-res">Solutions</a></li>
<!--        <li class="desk-mainNav-li"><a href="<?php echo WORDPRESS_URL; ?>/customer-resources" class="current-home-res">Resources</a></li>-->
        <li class="desk-mainNav-li"><a href="https://portal.peakalarm.com/" class="current-home" target="_blank">Customer Login</a></li>
        <li class="desk-mainNav-li"><a href="<?php echo WORDPRESS_URL; ?>/contact-us" class="current-home-res">Contact</a></li>
    </ul>
</nav>








