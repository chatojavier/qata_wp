<?php
/**
 * Template part for Header Hero of Products.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

?>
        
        <div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php the_field('header_image1x') ?>" alt="" srcset="<?php the_field('header_image2x') ?>" hover-img="<?php the_field('header_image1x') ?>" style="object-position: center;">
                <img src="" class="header-hero__img__change opacity-0">
            </div>
            <div class="header-card landscape">
                <h1 class="header-card__ttl">
                    Products
                </h1>

                <?php $terms = get_terms( 'products_category' ); ?>
                <ul class="header-card__list">
                <?php foreach ( $terms as $term ) {
                    // The $term is an object, so we don't need to specify the $taxonomy.
                    $term_link = get_term_link( $term );
                    
                    // If there was an error, continue to the next term.
                    if ( is_wp_error( $term_link )) {
                        continue;
                    } 
                
                    // We successfully got a link. Print it out.?>
                    <li>
                        <a href="<?php echo esc_url( $term_link ); ?>" hover-img="<?php the_field('cat_image2x', $term) ?>"> <?php echo $term->name ?> </a>
                    </li>
                <?php } ?>
                </ul>

                
            </div>
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>

    <div class="header-card portrait">
        <h1 class="header-card__ttl">
            Products
        </h1>
        
        <ul class="header-card__list">
        <?php foreach ( $terms as $term ) {
            // The $term is an object, so we don't need to specify the $taxonomy.
            $term_link = get_term_link( $term );
            
            // If there was an error, continue to the next term.
            if ( is_wp_error( $term_link )) {
                continue;
            } 
        
            // We successfully got a link. Print it out.?>
            <li>
                <a href="<?php echo esc_url( $term_link ); ?>"> <?php echo $term->name ?> </a>
            </li>
        <?php } ?>
        </ul>
    </div>