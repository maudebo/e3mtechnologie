<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phantomintelligence
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="row col-lg-12 row-footer">
        <div class="col-sm-2 icone_logo_header">
            <a href="<?php echo get_site_url('/'); ?>" class="lien_home_footer">

                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.9 43.43">
                    <defs>
                        <style>
                        .cls-1,
                        .cls-3,
                        .cls-4 {
                            fill: none;
                            stroke: #EB942B;
                            stroke-miterlimit: 10;
                        }

                        .cls-1 {
                            stroke-width: 2px;
                        }

                        .cls-2,
                        .cls-5 {
                            fill: #EB942B;
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
                    <path class="cls-3" d="M135.7,21.86c-29.59,20-67.19,23.27-100,11.06"
                        transform="translate(0.33 0.5)" />
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
        <div class="col-lg-4 offset-lg-2 col-sm-6 infos-contact">

            <div class="row col-lg-12">
                <a href="tel:+15819959950">
                    <img src="<?php the_field('icone_telephone', 'options') ?>" alt="icône telephone">
                </a>
                <a href="tel:+15819959950">
                    <?php the_field('telephone', 'options') ?>
                </a>
            </div>

            <div class="row col-lg-12">
                <a href="mailto:<?php the_field('courriel', 'options') ?>">
                    <img src="<?php the_field('icone_courriel', 'options') ?>" alt="icône courriel">
                </a>

                <a href="mailto:<?php the_field('courriel', 'options') ?>">
                    <?php the_field('courriel', 'options') ?>
                </a>
            </div>

        </div>

        <div class="col-sm-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#contactForm">
                ?
            </button>
        </div>
        <div class="col-sm-2">

            <img class="img_cuir_logo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cuir-sans-metal-1.svg"
                alt="Logo Cuir metal free">
        </div>


    </div><!-- .site-info -->
    <div class="row row_copyright">
        <div class="col-lg-4">

            <?php if (ICL_LANGUAGE_CODE == 'fr') echo '
                                    <small>Tous droits réservés ' . date('Y') . '  e3mtechnologie-com <span>|</span> Réalisé par
                                    Simple Hub</small>>';
            else echo '<small>>All rights reserved ' . date('Y') . '  e3mtechnologie-com <span>|</span> Made by
                                    Simple Hub</small>'; ?>

        </div>
        <a id="back-to-top" href="#top" class="back-button" data-toggle="tooltip" data-placement="left"
            data-original-title="" title="" style="">
            <!--?xml version="1.0" encoding="iso-8859-1" ?-->
            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg xmlns="http://www.w3.org/2000/svg" width="17.736" height="392.517" viewBox="0 0 17.736 392.517"
                style="transform:rotate(180deg)">

                <g id="down-arrow-simple" transform="translate(0.868 0.001)">
                    <g id="Component_8_1" data-name="Component 8 – 1">
                        <line id="Line_10" data-name="Line 10" x1="0.51" y1="140" transform="translate(7.5)" fill="none"
                            stroke="#f6ad57" stroke-miterlimit="10" stroke-width="2"></line>
                        <g class="arrow-head">
                            <path id="Path_18" data-name="Path 18" d="M2.39,147l8,14,8-14"
                                transform="translate(-2.39 -10)" fill="none" stroke="#f6ad57" stroke-miterlimit="10"
                                stroke-width="2"></path>
                        </g>
                    </g>
                </g>
            </svg>

        </a>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactForm"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Questions</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact"]'); ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3iEpJi_Knl47YItDo86ibC1tIeXWZNys"></script> -->
<?php wp_footer(); ?>

</body>

</html>