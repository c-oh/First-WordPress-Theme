<?php
/**
 * The template for displaying all single product posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sp">
		<main id="main" class="site-mainsproduct" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="sp-container">
				<div class="sp-thumbnail">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="sp-info">
					<h2 class="single-product-title">
						<?php the_title();?>
					</h2>
					<p class="sp-price">
						<?php echo CFS()->get( 'product_price' ); ?>
					</p>
					<p class="sp-description" <?php the_content();?> </>
					<div class="social-media-button">
						<p class="white-link"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a></p>
						<p class="white-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></p>
						<p class="white-link"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a></p>
					</div>
				</div>
			</section>
			<?php
			?>
				<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>>
	<!-- #primary -->
	<?php get_footer(); ?>