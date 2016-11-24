<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
    </div>
    <!-- #content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <!-- .site-info -->
        <div class="footer-box">
            <div class="footer-item">
                <div class="contact">
                    <h2> Contact Information </h2>
                    <p> <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto: papiniu@outlook.com"> info@inhabitent.com</a> </p>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel: 7788625122"> 778-456-7891 </a> </p>
                    <p> <span> <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus-square" aria-hidden="true"></i> </span> </p>
                </div>
            </div>
            <div class="footer-item">
                <div class="business-time">
                    <h2> Business Hours</h2>
                    <p> <span class="week"> Monday-Friday:</span> 9am to 5pm</p>
                    <p> <span class="week"> Satuday:</span> 10 am to 2pm</p>
                    <p> <span class="week"> Sunday:</span> Closed</p>
                </div>
            </div>
            <div class="footer-item">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg">
                </div>
            </div>
        </div>
        <div class="copyright">
            <p> Copyright &copy 2016 Inhabitent</p>
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->
    <?php wp_footer(); ?>
    </body>

    </html>