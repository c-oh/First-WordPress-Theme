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

    <div class="taxonomyloop">
        <?php
    $taxonomies  = get_terms( array(
  'taxonomy' => 'product_type',
  'hide_empty' => false,
  ) );
    
    foreach( $taxonomies as $term ) :?>
            <php print_r: $term; ?>
            <div>
            <img src= "<?php echo get_template_directory_uri() ?>/images/product-type-icons/
            <?php echo $term->slug?>.svg">
                <p> <?php echo $term->description ?> </p>
                <a href="#"> <?php echo $term->name ?> </a>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!--Shop place
            <section class="shop">
                <h1> Shop stuff </h1>
                <div class="shop-section">
                    <!--Do seciton of shop
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/do.svg'; ?>" alt="Do Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> do stuff </a>
                    </div>
                    <!--Eat section of shop
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/eat.svg'; ?>" alt="Eat Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> eat stuff </a>
                    </div>
                    <!--Sleep section of shop
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/sleep.svg'; ?>" alt="Sleep Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> sleep stuff </a>
                    </div>
                    <!--Wear section of shop
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/wear.svg'; ?>" alt="Wear Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors
                        </p>
                        <a href="#" class="button"> wear stuff </a>
                    </div>
                </div>
            </section>
            shopping section ends -->
            <!-- BLOG -->
            <section class="journal">
                <h2>Inhabitent Journal</h2>
                <div class="journal-container">
                    <?php
   $args = array( 'post_type' => 'post', 'order' => 'DESC', 'post_per_page' => 3, );
   $product_posts = get_posts( $args ); // returns an array of posts ?>
                        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                        <?php the_post_thumbnail('category-thumb'); ?>
                        <?php the_date(); ?>
                        <?php comments_number();?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title();?>
                        </a>
                        <a href="<?php the_permalink(); ?>" ?> Read Entry</a>
                        <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </section>
            <!--adventure section -->
            <section class="adventures">
                <h1>latest adventures</h1>
                <div class="adventure-section">
                    <div class="left">
                        <a href="#">Getting Back to Nature in a Canoe </a>
                    </div>
                    <div class="right">
                        <div class="upper-right">
                            <a href="#">A Night with Friends at the Beach</a>
                        </div>
                        <div class="bottom-right-area">
                            <div class="left-area">
                                <a href="#">Taking in the View at Big Mountain</a>
                            </div>
                            <div class="right-area">
                                <a href="#">Star - Gazing at the Night Sky</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <!-- #secondary -->
    </body>
    <?php get_footer(); ?>