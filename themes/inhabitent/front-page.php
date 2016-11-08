<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

            <div class = "banner-image">
                     <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="banner-img" alt="inhabitent circle logo" />
            </div>

            <div id="primary" class="content-area">
		    <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

            </main>
            
            <section class = "shop-stuff">
                Shop stuff
            </section>

            <section class = "journal">
               
            </section>

            <section class = "adventures">
            </section>
			        
	</div><!-- #secondary -->

    </body> 


<?php get_footer(); ?>