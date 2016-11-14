<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>


   <section class="about-hero">
    <h6> about </h6>
   </section>

   <div = "about-section">
            <h6><?php
               $props = CFS()->get_field_info('our_story');
               echo $props['label'];
               ?></h6>
               <?php echo CFS()->get( 'our_story'); ?>

               <h6><?php
               $props = CFS()-> get_field_info('our_team');
               echo $props['label'];
               ?></h6>
               <?php echo CFS()->get( 'our_team'); ?>
           </div>

 </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


