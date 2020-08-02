<?php
/**
 * Template part for displaying Header slider Block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

?>
        
        <div class="header-slider">
            <?php $terms = get_terms( 'products_category' ); ?>
            <div class="header-slider__carousel">
                <div class="swiper-wrapper">
                    <?php foreach ( $terms as $term ) :
                        // The $term is an object, so we don't need to specify the taxonomy ID.
                        $term_link = get_term_link( $term );
                        $cat_image1x = wp_get_attachment_image_src(get_field('cat_image', $term), 'large')[0];
                        $cat_image2x = wp_get_attachment_image_src(get_field('cat_image', $term), 'full')[0];
                        $img_pos = get_field('img_position', $term);
                        // If there was an error, continue to the next term.
                        if ( is_wp_error( $term_link ) ) {
                            continue;
                        }
                    
                        // We successfully got a link. Print it out.?>
                        <div class="swiper-slide header-slider__carousel__item bg-cover">
                            <a href="<?php echo $term_link ?>">
                                <img src="<?php echo $cat_image1x ?>" srcset="<?php echo $cat_image2x ?>" style="object-position: <?php echo $img_pos['x'] ?>% <?php echo $img_pos['y'] ?>%;">
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="header-slider__label">
                <div class="swiper-wrapper">
                    <?php foreach ( $terms as $term ) :
                        // The $term is an object, so we don't need to specify the taxonomy ID.
                        $term_link = get_term_link( $term );
                        $term_name = $term->name;
                        $item_id = get_field('cover_product', $term);
                        if ($item_id) {
                            $item_name = get_the_title( $item_id );
                        } else {unset($item_name);}
                        // If there was an error, continue to the next term.
                        if ( is_wp_error( $term_link ) ) {
                            continue;
                        }
                    
                        // We successfully got a link. Print it out.?>
                        <div class="swiper-slide">
                            <a href="<?php echo $term_link ?>"><div class="header-slider__label__content">
                                <p class="header-slider__label__content__prod"><?php echo $item_name ?></p>
                                <h1 class="header-slider__label__content__cat"><?php echo $term_name ?></h1>
                                <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>