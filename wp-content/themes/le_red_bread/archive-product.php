<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="products-page">
			<div class="product-container">

		<?php if ( have_posts() ) : ?>


			<header class="page-header">
				<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<br>

    <div class="decoration">
      <div class="slash">
        <div class="dot"></div>
      </div>
    </div>
<br>

<div class= "type-container">
	<div class="type-list">
		<?php $terms = get_terms( 'product_type' );?>
		<?php if ( ! empty( $terms ) ) : ?>
		<?php foreach ($terms as $term) : ?>
			<div class="type-item">
				<div clas="type-image">
          <div class= "product-type-image">
					<img src="<?php echo  get_template_directory_uri() . "/images\/" . $term->slug; ?>.png" alt="" />
          </div>
				</div>
				<div class="type-info">
					<span class="type-title"><h3><?php echo $term->name; ?></h3></span>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
	<?php endif; ?>
<br>

		<div class="product-list">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="product-item">
          <?php if (has_post_thumbnail() ) : ?>
					<a href="<?php echo the_permalink();?>">
				      <?php the_post_thumbnail ( 'medium' ); ?>
					</a>
            <?php endif; ?>
            <div class="product-info">
          		<span class= "dot-item"> <?php the_title(); ?> </span>
							<span class="dots"></span>
            	<span class"dot-price"><?php echo CFS()->get ( 'price' ); ?> </span>
            </div>
          </div>
		<?php endwhile; ?>
  	</div>
		<?php else : ?>

	</div>
</div>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
