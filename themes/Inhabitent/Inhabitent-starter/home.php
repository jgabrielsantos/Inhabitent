<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div class="content-container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
    
                <?php while ( have_posts() ) : the_post(); ?>
    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large' ); ?>
                            <?php endif; ?>
                            
    
                            <img src="<?php echo CFS()->get('Image'); ?>" alt="">
                            <p><?php echo CFS()->get('Price') ?></p>
    
                            <?php the_title( sprintf( '<h2 class="entry-title"><a class="title" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    
                            <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                            </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </header><!-- .entry-header -->
    
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <p><a class="read-more" href="<?php echo get_permalink(); ?>" rel="bookmark">Read More →</a></p>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
    
                <?php endwhile; // End of the loop. ?>
    
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>
