<div class="mobile-header-grid">
    <div class="svg">
        <a href="<?php echo get_site_url('/'); ?>">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.9 43.43">
                <defs>
                    <style>
                    .cls-1,
                    .cls-3,
                    .cls-4 {
                        fill: none;
                        stroke: #B9874C;
                        stroke-miterlimit: 10;
                    }

                    .cls-1 {
                        stroke-width: 2px;
                    }

                    .cls-2,
                    .cls-5 {
                        fill: #B9874C;
                    }

                    .cls-3 {
                        stroke-width: 3px;
                    }

                    .cls-5 {
                        font-size: 10.77px;
                        font-family: JosefinSans-SemiBold, Josefin Sans;
                        font-weight: 600;
                    }

                    .cls-6 {
                        letter-spacing: -0.02em;
                    }

                    .cls-7 {
                        letter-spacing: 0em;
                    }
                    </style>
                </defs>
                <path class="cls-1" d="M3.44,9.12,33.36,17A111.72,111.72,0,0,1,138,10.48"
                    transform="translate(0.33 0.5)" />
                <path class="cls-2" d="M142.59,29.36V13.18h7.51v1h-6.42v5.95h5.81V21h-5.81v7.4h6.67v.95Z"
                    transform="translate(0.33 0.5)" />
                <path class="cls-2"
                    d="M155.51,13.72a11.88,11.88,0,0,1,4.11-.83,4.9,4.9,0,0,1,3.06.89A2.72,2.72,0,0,1,163.86,16a3.79,3.79,0,0,1-.87,2.42,6.79,6.79,0,0,1-2.1,1.74,6,6,0,0,1,2.76,1.53,3.7,3.7,0,0,1,1.09,2.77,4.8,4.8,0,0,1-1.67,3.73,5.87,5.87,0,0,1-4,1.5,9.48,9.48,0,0,1-4.28-.95l.36-.84a8,8,0,0,0,3.71.79,4.87,4.87,0,0,0,3.46-1.19,3.94,3.94,0,0,0,1.29-3,2.84,2.84,0,0,0-.88-2.08,5.24,5.24,0,0,0-2-1.27,7.35,7.35,0,0,0-2.27-.38h-.13V20a5,5,0,0,0,3.05-1.3,3.4,3.4,0,0,0,1.4-2.55,1.94,1.94,0,0,0-.84-1.62,4.26,4.26,0,0,0-2.51-.62,11,11,0,0,0-3.59.68Z"
                    transform="translate(0.33 0.5)" />
                <path class="cls-2"
                    d="M179.22,28.52h-.61l-4.73-11.45c-.27-.63-.49-1.19-.66-1.67L173,17.12l-1.86,12.24H170L172.7,13h.64l5,12a11.3,11.3,0,0,1,.61,1.58,15.42,15.42,0,0,1,.71-1.56l5.63-12h.61l2.47,16.32h-1.13l-1.77-12.29a12.37,12.37,0,0,1-.18-1.74.78.78,0,0,0-.1.21c-.06.13-.15.34-.27.64l-.4.91Z"
                    transform="translate(0.33 0.5)" />
                <path class="cls-1" d="M2.3,13.25l33.51,9c29.53-17.89,67.16-20.82,98.4-6L120,21.43"
                    transform="translate(0.33 0.5)" />
                <path class="cls-3" d="M135.7,21.86c-29.59,20-67.19,23.27-100,11.06" transform="translate(0.33 0.5)" />
                <path class="cls-4" d="M91.19,1.1" transform="translate(0.33 0.5)" />
                <path class="cls-4" d="M90.75,2.92" transform="translate(0.33 0.5)" />
                <path class="cls-1" d="M90.36,14.39" transform="translate(0.33 0.5)" />
                <path class="cls-1" d="M96,7.85" transform="translate(0.33 0.5)" /><text class="cls-5"
                    transform="translate(141.76 40.84)">TECHNO<tspan class="cls-6" x="47.68" y="0">L</tspan>
                    <tspan class="cls-7" x="54.29" y="0">OGIE</tspan>
                </text>
                <path class="cls-4" d="M50,41.81" transform="translate(0.33 0.5)" />
                <polyline class="cls-3" points="7.02 40.02 1.55 41.19 37.06 33.57" />
                <line class="cls-3" x1="15.71" y1="28.47" x2="1" y2="41.54" />
            </svg>
        </a>
    </div>
    <div class="contact-header-mobile">
        <a href="tel:+15819959950">
            <img src="<?php the_field('icone_telephone', 'options') ?>" alt="icône telephone">


            <a href="mailto:<?php the_field('courriel', 'options') ?>">
                <img src="<?php the_field('icone_courriel', 'options') ?>" alt="icône courriel">
            </a>

    </div>
    <div id="nav_mobile">
        <span></span>
        <span></span>
        <span></span>
    </div>


</div>

<nav class="sidenav-mobile">

    <div class="menu-mobile">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'primary-mobile',
        ));
        ?>
    </div>
<div>
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#contactForm">
                ?
            </button>
</div>
    <div class="sociaux">
        <ul class="social">
            <?php if (have_rows('repeteur_sociaux', 'options')): ?>

            <?php while (have_rows('repeteur_sociaux', 'options')): the_row(); ?>
            <li>
                <a href="<?php the_sub_field('url_sociaux'); ?>" target="_blank"><img
                        src="<?php the_sub_field('icones_sociaux'); ?>" alt="logo réseaux sociaux" /></a>
            </li>
            <?php endwhile; ?>

            <?php endif; ?>

        </ul>
    </div>


</nav><!-- #site-navigation -->