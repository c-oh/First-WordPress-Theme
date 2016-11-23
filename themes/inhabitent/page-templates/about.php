<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>


   <section class="about-hero">
    <h6> about </h6>
   </section>

   <div class= "about-section">
            <p>
         
               <?php echo CFS()->get( 'our_story'); ?></p>

               <p>
               
            
               <?php echo CFS()->get( 'our_team'); ?></p>



	</div><!-- #primary -->

<?php get_footer(); ?>
