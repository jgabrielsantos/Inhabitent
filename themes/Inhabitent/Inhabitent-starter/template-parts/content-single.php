<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-product-image-wrapper">
		<img src="<?php echo CFS()->get( 'Image' ); ?>" class="single-product-image"> 
	</div>

    <div class="single-product-content-wrapper">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1> </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <p class="price"><?php echo CFS()->get('Price') ?></p>

            <p><?php the_content();?></p>
        </div>
        <!-- .entry-content -->
    </div>
</article>
