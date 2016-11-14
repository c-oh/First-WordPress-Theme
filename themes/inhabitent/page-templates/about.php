<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>


   <section class="about-hero">
    <h6> about </h6>
   </section>

   <div = "about-section">
            <?php echo CFS()->get( 'our_story'); 
echo CFS()->get( 'our_team');
            ?>
           </div>

 </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


