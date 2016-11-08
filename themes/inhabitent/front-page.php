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
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!--Shop place -->
            <section class="shop">
                <h1> Shop stuff </h1>
                <div class="shop-section">
                    <!--Do seciton of shop-->
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/do.svg'; ?>" alt="Do Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> do stuff </a>
                    </div>
                    <!--Eat section of shop-->
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/eat.svg'; ?>" alt="Eat Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> eat stuff </a>
                    </div>
                    <!--Sleep section of shop-->
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/sleep.svg'; ?>" alt="Sleep Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors </p>
                        <a href="#" class="button"> sleep stuff </a>
                    </div>
                    <!--Wear section of shop-->
                    <div class="shop-promotion">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/wear.svg'; ?>" alt="Wear Icon" />
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors
                        </p>
                        <a href="#" class="button"> wear stuff </a>
                    </div>
                </div>
            </section>
            <!-- shopping section ends -->
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