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
                  <?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
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
        <span class="front title"><h2> What others say about us </h2></span>
        <div class="decoration">
          <div class="slash">
            <div class="dot"></div>

          </div>
        </div>

          <div class="testimonials-container">
            <ul>
              <li><div class="testimonials">
                <div class="review-image"><img width="100" height="100" src=./images/dr-dosist-headshot.png/></div>
                <div class="review-info"><p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
                  <div class="review-name">Dr Dosist</div>
                  <div class="review-title">Nutritionist</div>
                  <div class="review-company">Health Time Clinic</div>
                </di>
              </div>
              </li>
              <li><div class="testimonials">
                <div class="review-image"><img width="100" height="100" src=./images/dr-dosist-headshot.png/></div>
                <div class="review-info"><p>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
                  <div class="review-name">Maxi Milli</div>
                  <div class="review-title">Chef</div>
                  <div class="review-company">Sailor Spoon</div>
                </di>
              </div>
              </li>
              <li><div class="testimonials">
                <div class="review-image"><img width="100" height="100" src=./images/dr-dosist-headshot.png/></div>
                <div class="review-info"><p>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
                  <div class="review-name">Anna Vandana</div>
                  <div class="review-title">Author</div>
                  <div class="review-company">Food is Great Magazine</div>
                </di>
              </div>
              </li>
              <li><div class="testimonials">
                <div class="review-image"><img width="100" height="100" src=./images/dr-dosist-headshot.png/></div>
                <div class="review-info"><p>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
                  <div class="review-name">Martha M. Masters</div>
                  <div class="review-title">Food Critic</div>
                  <div class="review-company">WikiTravel</div>
                </di>
              </div>
              </li>

            </ul>
          </div>


      </section>
    </main>
  </div>
<?php get_footer(); ?>
