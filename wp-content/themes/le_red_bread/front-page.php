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

      <br>

      <section class ="latest-news">
            <span class="front-title"><h2>Our Latest News</h2></span>

            <div class="decoration">
              <div class="dot"></div>
              <div class="slash"></div>
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
            <div class="dot"></div>
          </div>

          <div class="testimonials-container">
            <ul>
              <li><img width="100" height=""
              </li>
            </ul>
          </div>


      </section>
    </main>
  </div>
<?php get_footer(); ?>
