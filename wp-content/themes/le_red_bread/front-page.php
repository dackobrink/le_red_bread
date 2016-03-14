<?php

get_header(); ?>

  <div id="primary" class="content-area">
      <main id ="main" class="site-map" role="main">

      <section class="banner">
        <span class="banner-text">baked to perfection.</span>
      </section>
        <br>

        <div class= "type-container">
          <div class="type-list">
            <?php $terms = get_terms( 'product_type' );?>
            <?php if ( ! empty( $terms ) ) : ?>
            <?php foreach ($terms as $term) : ?>
              <div class="type-item">
                <div clas="type-image">
                  <img src="<?php echo  get_template_directory_uri() . "/images\/" . $term->slug; ?>.png" alt="" />
                </div>
                <div class="type-info">
                  <span class="type-title"><h3><?php echo $term->name; ?></h3></span>
                  <p><?php echo $term->description; ?>
                  <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
          <?php endif; ?>
          <div class= "see-more-container">
            <div class="see-more-here"><p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.
              <a href "http://localhost:3000/le_red_bread/products" class="see-more-button">See Our Products</a>
            </div>
          </div>

      <br>

      <section class ="latest-news">
            <span class="front-title"><h2>Our Latest News</h2></span>

            <div class="decoration">
              <div class="slash">
                <div class="dot"></div>
              </div>
            </div>

        <div class= "featured-container">
          <div class= "featured-list">
            <?php $args = array( 'post_type' => 'post', 'numberposts' => 4 );
              $latest_posts = get_posts( $args ); ?>
              <?php foreach( $latest_posts as $post ) : setup_postdata ( $post ); ?>
                <div class="featured-item">
                  <div class="featured-image">
                    <?php if (has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail ( 'large' ); ?>
                    <?php endif; ?>
                  </div>
                  <div class="featured-info">
                    <span class="featured-title"><h3><a href="<?php the_permalink(); ?>"><?php the_titlesmall('', '...', true, '25'); ?></a></h3></span>
                    <span class="entry-meta">
                      <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' );  ?>
                    </span><!-- .entry-meta -->
                  </div>
                </div>
          <?php endforeach;  wp_reset_postdata(); ?>
          </div>
        </div>
      </section>


      <section class = "testimonials">
        <div class= "testimonials-container">
        <span class="front-title"><h2> What others say about us </h2></span>

        <div class="decoration">
          <div class="slash">
            <div class="dot"></div>
          </div>
        </div>

        <div class="review-container">
            <ul>
              <li><div class="testimonials health">
                <div class="review-image">	<img height ="300" width="300"  src="<?php bloginfo('template_directory'); ?>/images/dr-dosist-headshot.png" class="headshot" alt="Dr Dosist"></div>
                <div class="review-info"><p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
                  <div class="review-name">Dr. Dosist</div>
                  <p>Nutritionist - <span class="review-company"> Health Time Clinic</span></p>
                </div>
              </div>
              </li>
              <li><div class="testimonials expert">
                <div class="review-image">	<img height ="300" width="300"  src="<?php bloginfo('template_directory'); ?>/images/maxi-milli-headshot.png" class="headshot" alt="Maxi Milli"></div>
                <div class="review-info"><p>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
                  <div class="review-name">Maxi Milli</div>
                  <p>Chef - <span class="review-company"> Sailor Spoon</span></p>
                </div>
              </div>
              </li>
              <li><div class="testimonials peer">
                <div class="review-image">	<img height ="500" width="500"   src="<?php bloginfo('template_directory'); ?>/images/ana-vandana-headshot.png" class="headshot" alt="Ana Vandana"></div>
                <div class="review-info"><p>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
                  <div class="review-name">Anna Vandana</div>
                  <p>Author - <span class="review-company"> Food is Great Magazine</span></p>
                </div>
              </div>
              </li>
              <li><div class="testimonials author">
                <div class="review-image">	<img  height ="200" width="200" src="<?php bloginfo('template_directory'); ?>/images/martha-m-masters-headshot.png" class="headshot" alt="Martha M Masters"></div>
                <div class="review-info"><p>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
                  <div class="review-name">Martha M. Masters</div>
                  <p>Author - <span class="review-company"> WikiTravel</span></p>
                </div>
              </div>
              </li>

            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>
<?php get_footer(); ?>
