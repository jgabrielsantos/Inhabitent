<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

// http://localhost:8888/wordpress/create_product_type/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<header class="shop-header">
					<h1>SHOP STUFF</h1>
			
					<?php if ( have_posts() ) : ?>
			
						<?php $term = get_terms('product_taxonomy'); ?>
						<ul class="product-type-list">
							<?php foreach($term as $term): ?>
								<li> <p> <a href="<?php echo esc_url(get_term_link($term)); ?>"> <?php echo $term->name; ?> </a> </p> </li>
							<?php endforeach; ?>
						</ul>
				</header>
				<div class="shop-items">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php
							get_template_part( 'template-parts/content' );
						?>
		
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
		
					<?php else : ?>
			
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
					<?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
