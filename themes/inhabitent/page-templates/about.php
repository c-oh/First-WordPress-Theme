<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>


<div id="primary" class="content-area">
 <main id="main" class="site-main" role="main">
   <section class="about-hero">
   
   </section>

   <div = "about-section">
            <?php echo CFS()->get( 'our_story'); ?>


            <?php echo CFS()->get( 'our_team');
            ?>
            </div>

 </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>