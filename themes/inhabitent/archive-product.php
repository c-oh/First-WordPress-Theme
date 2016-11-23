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
			</header><!-- .page-header -->


  <!--Calling Product Types-->
  <div class = "shop-page-product-types">
	<?php
	  $terms = get_terms('product_type');
	   foreach ($terms as $term) :
	?>
    <?php $url = get_term_link($term->slug, 'product_type'); ?>
	  <p><a href="<?php echo $url ?>"><?php echo $term->name ?></a></p>
	<?php endforeach;?>
   </div>


<!---Showing Grid -->
		<div class = "boxes-archive">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class = "product-post">
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
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>
</main><!-- #main -->

</div><!-- #primary -->
<?php get_footer(); ?>