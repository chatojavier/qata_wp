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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_001.jpg" alt="" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_001.jpg" style="object-position: center;">
        <img src="" class="block-categories__img__change opacity-0">
    </div>

    <div class="block-categories__card">
        <h1 class="block-categories__card__ttl">
            Products
        </h1>
        <?php $terms = get_terms( 'products_category' ); ?>
        <ul class="block-categories__card__list">
        <?php foreach ( $terms as $term ) {
            // The $term is an object, so we don't need to specify the $taxonomy.
            $term_link = get_term_link( $term );
            
            // If there was an error, continue to the next term.
            if ( is_wp_error( $term_link ) || $term == get_queried_object() ) {
                continue;
            } 
        
            // We successfully got a link. Print it out.?>
            <li>
                <a href="<?php echo esc_url( $term_link ); ?>" hover-img="<?php the_field('cat_image1x', $term) ?>"> <?php echo $term->name ?> </a>
            </li>
        <?php } ?>
        </ul>

        <!-- <ul class="block-categories__card__list">
            <li>
                <a href="<?php get_term_link('term-21'); ?>" hover-img="<?php the_field('cat_image1x', 'term_21'); ?>">Accessories</a>
            </li>
            <li>
                <a href="<?php get_term_link('alpaca_fur_toys'); ?>" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_003.jpg">Alpaca Fur Toys</a>
            </li>
            <li>
                <a href="<?php get_term_link('babies'); ?>" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_004.jpg">Babies</a>
            </li>
            <li>
                <a href="<?php get_term_link('home'); ?>" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_002.jpg">Home</a>
            </li>
            <li>
                <a href="<?php get_term_link('needle_felting'); ?>" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_003.jpg">Needle Felting</a>
            </li>
            <li>
                <a href="<?php get_term_link('slippers'); ?>" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_004.jpg">Slippers</a>
            </li>
        </ul> -->
    </div>
</div>