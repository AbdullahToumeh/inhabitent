<?php
/**
 * The template for displaying all single posts.
 * 
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="thumbnail-wrapper">
	
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>

				</div>

				
				<div class="content-wrapper">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
					
					<p class="product-text"><?php the_content(); ?></p>

					<div class="social-buttons">
						<button class="sharing-button"><i class="fab fa-facebook-f"></i>Like</button>
						<button class="sharing-button"><i class="fab fa-twitter"></i>Tweet</button>
						<button class="sharing-button"><i class="fab fa-pinterest-square"></i>Pin</button>
					</div>
				
				</div>

			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
