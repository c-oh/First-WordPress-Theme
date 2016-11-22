<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<?php if ( have_posts() ) : ?>

					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>

						<div class="product_taxonomy_loop">
							<?php 
			$taxonomies  = get_terms( array(
				'taxonomy' => 'product_type',
				'hide_empty' => true,
				) );
				foreach ( $taxonomies  as $term ):?>
							<div class="types">
								<a href="/inhabitent/product_type/<?php echo $term->slug;?>">
									<?php echo $term->name ?> </a>
							</div>
							<?php endforeach; ?>
						</div>
				<div id="primary" class="archive-area">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-item">
						<?php get_template_part( 'template-parts/product-archive' ); ?>
					</div>
					<?php endwhile; ?>
				</div>
				<!-- archive area -->
				<?php the_posts_navigation(); ?>
				<?php else : ?>
				<?php get_template_part( 'template-parts/product-archive', 'none' ); ?>
				<?php endif; ?>
			</div>
			<!-- container -->
		</main>
		<!-- #main -->
	</div>
	<!-- content-area -->
	<?php get_footer(); ?>