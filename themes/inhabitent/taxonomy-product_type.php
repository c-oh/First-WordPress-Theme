<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
			<!-- .page-header -->
				<div class="boxes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="product-post">
							<div class="product-thumbnail">
								<a href="<?php the_permalink() ; ?> ">
									<?php the_post_thumbnail( 'large' ); ?>
								</a>
							</div>
							<div class="product-info">

									<?php the_title('<p class="product-title">'); ?>........
									<?php echo CFS()->get( 'product_price' ); ?>
		
							</div>
				</div>
						<!-- product-post -->
						<?php endwhile ?>
					</div>
				</div>
				<!-- #post-## -->
			</div>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>

	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>