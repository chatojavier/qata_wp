<?php
/**
 * Template part for displaying product slider Block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

?>

<div class="block-products">
    <div class="block-products__bg"></div>
    <div class="block-products__content">
        <?php
        $postType = get_post_type();
        $term_obj_list = get_the_terms( $post->ID, 'products_category' );
        $terms_name = wp_list_pluck($term_obj_list, 'name')[0];
        $terms_slug = wp_list_pluck($term_obj_list, 'slug')[0];
        if ( $postType == 'qata_product') : ?>
            <h1 class="block-products__content__ttl">Other <?php echo $terms_name ?></h1>
            <a href="<?php echo get_home_url() . '/products/' . $terms_slug ;?>"><h2 class="block-products__content__btn">View All</h2></a>
        <?php else: ?>
            <h1 class="block-products__content__ttl">FEATURED PRODUCTS</h1>
            <a href="<?php echo get_home_url() . '/products';?>"><h2 class="block-products__content__btn">View All</h2></a>
        <?php endif; ?>
    </div>
    <div class="block-products__slider">
        <div class="product-slider">
            <!-- Start Get Slider -->
            <?php get_product_slider( $terms_slug, 6); ?>
            
            <!-- End Get Slider -->

        </div>
    </div>
</div>

