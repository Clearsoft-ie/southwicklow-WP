<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<?php if (!is_front_page()) : ?>
    </div>
<?php endif; ?>

<!-- FOOTER -->
<footer id="footer" style="background:#3750a0">
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <h4 class="letter-spacing-1">PHOTO GALLERY</h4>

                <div class="footer-gallery lightbox"
                     data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/1.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/1-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/2.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/2-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/3.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/3-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/4.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/4-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/5.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/5-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/6.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-gallery/6-small.jpg"
                             width="106" height="70" alt=""/>
                    </a>
                </div>

            </div>

            <div class="col-md-3">

                <!-- Latest Blog Post -->
                <h4 class="letter-spacing-1">LATEST NEWS</h4>
                <ul class="footer-posts list-unstyled">
                    <li>
                        <a href="#">Accommodation Information</a>
                        <small>29 February 2018</small>
                    </li>
                    <li>
                        <a href="#">All Ireland Confined Drama Finals 2018</a>
                        <small>18 February 2017</small>
                    </li>
                    <li>
                        <a href="#">All Ireland Adjudicator - Mr. Tom Byrne</a>
                        <small>12 February 2017</small>
                    </li>
                </ul>
                <!-- /Latest Blog Post -->

            </div>

            <div class="col-md-2">

                <!-- Links -->
                <h4 class="letter-spacing-1">EXPLORE SWDF</h4>
                <ul class="footer-links list-unstyled">
                    <?php
                    if (has_nav_menu('primary-menu')) {
                        wp_nav_menu(array(
                            'container' => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'footer-menu',
                            'walker' => new Child_Wrap(),
                        ));
                    } else {
                        wp_list_pages(array(
                            'container' => '',
                            'title_li' => '',
                        ));
                    }
                    ?>
                </ul>
                <!-- /Links -->

            </div>

            <div class="col-md-4">

                <!-- Newsletter Form -->
                <h4 class="letter-spacing-1">SUBSCRIBE</h4>
                <p>Subscribe to Our Newsletter to get Important News</p>

                <form method="post" action="<?php echo get_home_url() ?>?na=s" onsubmit="return newsletter_check(this)">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="email" name="ne" class="form-control required"
                               placeholder="Enter your Email">
                        <span class="input-group-btn">
                                                <button class="btn btn-success" type="submit">Subscribe</button>
                                            </span>
                    </div>
                </form>
                <!-- /Newsletter Form -->

                <!-- Social Icons -->
                <div class="mt-20">
                    <a href="https://www.facebook.com/pages/South-Wicklow-Drama-Festival/338388519392"
                       class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip"
                       data-placement="top" title="Facebook" target="_blank">

                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://twitter.com/SouthWicklowDF"
                       class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip"
                       data-placement="top" title="Twitter" target="_blank">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                </div>
                <!-- /Social Icons -->

            </div>

        </div>

    </div>

    <div class="copyright">
        <div class="container">
            <ul class="float-right m-0 list-inline mobile-block">
                <li><a href="#">Privacy</a></li>
            </ul>
            Website By <a href="https://www.clearsoft.ie" target="_blank">ClearSoft</a>
        </div>
    </div>
    <div class="copyright" style="background-color:#162146">
        <div class="container text-center">
            Photography for this website by Eamonn Doran &amp; Lorna Doran <br>
            Full resolution copies of all the photos on the web site available. Contact <a
                    href="mailto:eamonndoran@eircom.net">eamonndoran@eircom.net</a>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script>var plugin_path = '<?php echo get_template_directory_uri();?>/assets/plugins/';</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>


<!-- REVOLUTION SLIDER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/view/demo.revolution_slider.js"></script>

<?php wp_footer(); ?>
</body>
</html>