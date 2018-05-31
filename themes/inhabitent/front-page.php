<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="site-content">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
				<section class="home-hero">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Hero Logo"/>					
				</section>

				<section class="products container">

					<h2>Shop Stuff</h2>
					<?php

					$terms = get_terms( array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0, 
					) );

					if ( ! empty ( $terms ) && ! is_wp_error( $terms ) ) : ?>

						<div class="products-wrapper">

							<?php foreach ( $terms as $term ) :  ?>

								<div class="product-wrapper">

									<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg"
										alt="<?php echo $term->name; ?>"/>

									<p><?php echo $term->description; ?></p>

									<p>
										<a href="<?php echo get_term_link( $term ); ?>" class="stuff-button">
										<?php echo $term->name; ?> Stuff</a>
									</p>

								</div>
						
							<?php endforeach; ?>

						</div>
					<?php endif; ?>

				</section>

				<section class="last-journal">
					<div class="container">
						<h2>Inhabitant Journal</h2>
						<?php
							$args = array(
							'post_type' => 'post',
							'numberposts' => 3,
							'order' => 'DSC' );
							$post_posts = get_posts( $args ); // returns an array of posts
						?>

						<ul>
							<?php foreach ( $post_posts as $post ) : setup_postdata( $post ); ?>

								<li>

									<div class="small-photo-wrapper">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'large' ); ?>
										<?php endif; ?>
									</div>

									<div class="small-post-wrapper">

										<div class="entry-meta">
										<p class="posted-date"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
										<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
										</div>
									</div>

									<a href="<?php the_permalink(); ?>"class="journal-button">Read Entry</a>

								</li>

							
						
							<?php endforeach; wp_reset_postdata(); ?>

						</ul>

					</div>

				</section>

				<section class="adventures container">
					<h2>Latest Adventures</h2>
					<ul>

						<li>
							<div class="adventure-wrapper">							
								<img  class="adventure-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg" alt="girl in a canoe">
							</div>
							
							<div class="adventure-text">
								<h3 class="adventure-title">
									<a href="#">Getting Back to Nature in a Canoe</a>
								</h3>
								<a class="adventure-button" href="#">Read More</a>
							</div>
						</li>
							
						<li>
							<div class="adventure-wrapper">							
								<img class="adventure-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg" alt="camping around the fire">
							</div>
							
							<div class="adventure-text">
								<h3 class="adventure-title">
									<a href="#">A Night with Friends at the Beach</a>
								</h3>
								<a class="adventure-button" href="#">Read More</a>
							</div>
						</li>

						<li>
							<div class="adventure-wrapper">							
								<img class="adventure-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg" alt="hikers on the mountain">
							</div>
							
							<div class="adventure-text">
								<h3 class="adventure-title">
									<a href="#">Taking in the View at Big Mountain</a>
								</h3>
								<a class="adventure-button" href="#">Read More</a>
							</div>
						</li>

						<li>
							<div class="adventure-wrapper">							
								<img class="adventure-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg" alt="man looks to the sky">
							</div>
							
							<div class="adventure-text">
								<h3 class="adventure-title">
									<a href="#">Star-Gazing at the Night Sky</a>
								</h3>
								<a class="adventure-button" href="#">Read More</a>
							</div>
						</li>

					</ul>

					<p class="more">
						<a class = "more-button" href="#">More Adventure</a>
					</p>
				</section>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>

<?php get_footer(); ?>
