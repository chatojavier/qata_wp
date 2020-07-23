<?php
/**
 * Template part for Header Hero .
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

?>
        
        <div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php the_field('header_image1x') ?>" alt="" srcset="<?php the_field('header_image2x') ?>">
            </div>

            <div class="header-card landscape">
                <h1 class="header-card__ttl">
                    <?php the_title(); ?>
                </h1>
                <div class="header-card__descrip">
                    <?php the_content(); ?>
                </div>
                
            </div>
            
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>

    <div class="header-card portrait">
        <h1 class="header-card__ttl">
        <?php the_title(); ?>
        </h1>
        <div class="header-card__descrip">
        <?php the_content(); ?>
        </div>
    </div>