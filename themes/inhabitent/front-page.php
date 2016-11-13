<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
    <div class="banner-image">
        <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="banner-img" alt="inhabitent circle logo"
        />
    </div>
    <section class="taxonomy-loop">
        <h6> shop stuff </h6>
        <?php 
		$taxonomies  = get_terms( array(
			'taxonomy' => 'product_type',
			'hide_empty' => true,
			) );
			foreach ( $taxonomies  as $term ):?>
        <div class="taxonomy-loop-wrapper">
            <?php $url = get_term_link($term->slug, 'product_type') ?>
            <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg">
            <p>
                <?php echo $term->description ?> </p>
            <a href="<?php echo $url ?>" class='btn'>
                <?php echo $term->name ?> Stuff </a>
        </div>
        <?php endforeach ?>
        </div>
        <!-- BLOG -->
        <section class="journal">
            <h6>inhabitent journal</h6>
            <div class="journal-container">
                <?php
   $args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish'  );
   $recent_posts = get_posts( $args ); // returns an array of posts ?>
                    <?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
                    <div class="post-list-info">
                        <?php the_post_thumbnail('category-thumb'); ?>
                        <div class="info-area">
                            <?php the_date(); ?>/
                            <?php comments_number();?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class='title'>
                                <?php the_title();?> </a>
                            <a href="<?php the_permalink(); ?>" class='read-entry-btn' /> Read More</a>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </section>
        <!--adventure section -->
        <section class="adventures">
            <h6>latest adventures</h6>
            <div class="adventure-section-1">
                <div class="canoe">
                    <div class="canoe-text">
                        <h5>
                            <a href="#">Getting Back to Nature in a Canoe </a>
                        </h5>
                        <a href="<?php the_permalink(); ?>" class='read-more-btn' /> Read More</a>
                    </div>
                </div>
            </div>
            <div class="adventure-section-2">
                <div class="beach">
                    <div class="beach-text">
                        <a href="#">A Night with Friends at the Beach</a>
                        <a href="<?php the_permalink(); ?>" class='read-more-btn' /> Read More</a>
                    </div>
                </div>
                <div class="view">
                    <div class="view-text">
                        <a href="#">Taking in the View at Big Mountain</a>
                        <a href="<?php the_permalink(); ?>" class='read-more-btn' /> Read More</a>
                    </div>
                </div>
                <div class="sky">
                    <div class="sky-text">
                        <a href="#">Star - Gazing at the Night Sky</a>
                        <a href="<?php the_permalink(); ?>" class='read-more-btn' /> Read More</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- #secondary -->
        </body>
        <?php get_footer(); ?>