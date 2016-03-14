<?php
/**
* Template Name: About Page
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="about-page">
        <div class="about-container">
          <div class="about-head">
            <h2><?php echo the_title(); ?></h2>
              <?php echo CFS()->get('tagline'); ?>
          </div>


          <div class="decoration">
            <div class="slash">
            </div>
          </div>

          <div class="team-company">
            <div class="about-team">
              <img src="<?php bloginfo('template_directory'); ?>/images/team.jpg" class="team" alt="Le Red Bread Team" >
              <h2>Le Red Bread Team</h2>
              <?php echo CFS()->get('team_copy'); ?>
            </div>

            <div class="about-company">
      	      <img src="<?php bloginfo('template_directory'); ?>/images/bakery.jpg"  class="bakery" alt="Le Red Bread Bakery" >
              <h2> Le Red Bread Bakery</h2>
              <?php echo CFS()->get('bakery_copy'); ?>
            </div>
        </div>
        <div class="our-story">
          <h2>Our Story</h2>
          <?php echo CFS()->get('our_story_copy'); ?>
        </div>
        <br>
        <section class="-click-see-more">
        <div class= "see-more-2">
          <div class="see-more-here"><p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!
            <a href "http://localhost:3000/le_red_bread/products" class="see-more-button">Contact Us</a>
          </div>
        </div>
      </section>

      </div>
    </div>
    </main>
  </div>

<?php get_footer(); ?>
