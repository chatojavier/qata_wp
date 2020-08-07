<?php
/**
 * Template part for displaying Category Menu Block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

?>

<div class="block-categories">
    <div class="block-categories__bg"></div>
    <div class="block-categories__img">
    <?php
        $post_term = get_the_terms( $post->ID, 'products_category' )[0];
        $archive_term = get_queried_object();
        $archive_personalized = get_term(190, 'products_category');
        $image1x = wp_get_attachment_image_src(get_field('cat_image', $post_term), 'large')[0];
        $image2x = wp_get_attachment_image_src(get_field('cat_image', $post_term), 'full')[0];
    ?>
        <img src="<?php echo $image1x ?>" alt="" srcset="<?php echo $image2x ?> 2x" style="object-position: center;">
        <img src="" srcset="" class="block-categories__img__change opacity-0">
    </div>

    <div class="block-categories__card">
        <h1 class="block-categories__card__ttl">
            Products
        </h1>
        <?php $terms = get_terms( 'products_category' ); ?>
        <ul class="block-categories__card__list">
        <?php foreach ( $terms as $term ) :
            // The $term is an object, so we don't need to specify the $taxonomy.
            $term_link = get_term_link( $term );
            $cat_image1x = wp_get_attachment_image_src(get_field('cat_image', $term), 'large')[0];
            $cat_image2x = wp_get_attachment_image_src(get_field('cat_image', $term), 'full')[0];
            
            // If there was an error, continue to the next term.
            if ( is_wp_error( $term_link ) || $term == $post_term ) {
                continue;
            } 
        
            // We successfully got a link. Print it out.?>
            <li>
                <a href="<?php echo esc_url( $term_link ); ?>" data-src="<?php echo $cat_image1x; ?>" data-srcset="<?php echo $cat_image2x ?>"> <?php echo $term->name ?> </a>
            </li>
        <?php endforeach;
        if ($archive_term != $archive_personalized) :?>
            <li>
                <a href="<?php echo esc_url( get_term_link( $archive_personalized ) ); ?>" data-src="<?php echo wp_get_attachment_image_src(get_field('cat_image', $archive_personalized), 'large')[0];; ?>" data-srcset="<?php echo wp_get_attachment_image_src(get_field('cat_image', $archive_personalized), 'full')[0]; ?>"> <?php echo $archive_personalized->name; ?> </a>
            </li>
        <?php endif; ?>
        </ul>
    </div>
</div>