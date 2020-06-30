<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <div class="homepage-hero-wraper">
                <div class="homepage-hero">
                    <?php $hero_image = get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?>
                    <a href="/wordpress/">
                        <img src=" <?php echo $hero_image ?> " alt="Homepage Logo">
                    </a>
                </div>
            </div>

            <section class="shop container">
                <h2>SHOP STUFF</h2>
                <div class="shop-stuff container">
                    <div>
                        <?php $term = get_terms('product_taxonomy'); ?>
                        
                        <ul class="categories">
                            <?php foreach($term as $term): ?>
                                <div class="category">
                                    <div class="product-logo">
                                        <?php $logo =  get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' ?>
                                        <img src="<?php echo $logo; ?>" alt="logo">
                                    </div>

                                    <p class="description"> <?php echo $term->description; ?></p>

                                    <div class="button">
                                        <a href="<?php echo esc_url(get_term_link($term)); ?>"> <?php echo $term->name; ?> STUFF</a>
                                    </div>
                                </div>
                                
                                <?php endforeach; ?>
                            </ul>
                            
                        </div>
                    </div>
                </section>
                
                <section class="blog-posts container">
                    <h2>INHABITENT JOURNAL</h2>
                    <div class="journal">
                        <ul class="posts">
                            <?php
                                $args = array( 'post_type' => 'post', 'numberposts' => '3' );
                                $posts = get_posts( $args ); // returns an array of posts
                            ?>
            
                            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <li class="post">
                                <div class="post-picture">
                                    <?php the_post_thumbnail( 'thumbnail' ) ?>
                                </div>
                                
                                <div class="post-info">
                                    <div class="title">
                                        <p>
                                            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                                        </p>
                                        
                                        <h3>
                                            <a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a> 
                                        </h3>
                                    </div>
                                    <a class="read-more" href="<?php echo get_permalink() ?>">Read Entry</a>
                                </div>
                                
                            </li>
            
            
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
