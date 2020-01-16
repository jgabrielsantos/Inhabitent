<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    </div><!-- #primary -->
    <div class="shop">
        <h2>SHOP STUFF</h2>
        <?php
            $args = array( 'post_type' => 'post', 'numberposts' => '3' );
            $posts = get_posts( $args ); // returns an array of posts
        ?>
    
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); 
        ?>
            
            <h3> <?php the_title(); ?> </h3>
            <?php the_post_thumbnail( 'thumbnail' ) ?>
    
        <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <div class="journal">

    </div>

<?php get_footer(); ?>
