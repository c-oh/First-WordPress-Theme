<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
	<div class="shop-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<?php if ( have_posts() ) : ?>
				<header class="archive-title">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
			
			<!-- .page-header -->
					<div class="shop-stuff-list">
						<?php $terms = get_terms('product_type'); ?>
						<?php foreach ($terms as $term) : ?> 
						<div class='shop-stuff'>
							<?php $url = get_term_link ($term->slug , 'product_type'); ?>
							<a href='<?php echo $url ?>' class='button'>
								<?php  echo $term->name ?>
							</a>
						</div> <!-- shop stuff -->
						<?php endforeach; ?>
					</div> <!--  shop stuff list -->
				</header>

				<div id="primary" class="archive-area">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-item">
						<?php get_template_part( 'template-parts/product-archive' ); ?>
					</div>
					<?php endwhile; ?>
				</div> <!-- archive area -->
					<?php the_posts_navigation(); ?>
					<?php else : ?>
					<?php get_template_part( 'template-parts/product-archive', 'none' ); ?>
				
					<?php endif; ?>
			</div> <!-- container -->
		</main>
		<!-- #main -->
	</div> <!-- content-area -->

<?php get_footer(); ?>