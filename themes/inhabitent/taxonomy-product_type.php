<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <h1><?php single_term_title(); ?></h1>
                <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<div class="products-grid">

				<?php while ( have_posts() ) : the_post(); ?>
                    
                    <div class="product-item">

                        <div class="thumbnail-wrapper">

                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>

                        </div>

                        <div class="item-info">
		                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <p class="price dots">...................</p>
                        <p class="price"><?php echo CFS()->get( 'price' ); ?></p>

                        </div>

                    </div>

				<?php endwhile; ?>
				
			</div>	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
