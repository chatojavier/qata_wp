<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Qata_Alpaca_Theme
 */

get_header();
?>
</section>
<section class="second-screen">
        <!-- Item Block -->
        <div class="block-item">
            <!-- Item Slider -->
            <div class="item-slider">
                <?php if( have_rows('item_slider') ): ?>
                <!-- Main Slider -->
                <div class="item-slider__carousel">
                    <div class="swiper-wrapper">
                    <?php while( have_rows('item_slider') ): the_row();
                    $image1x = get_sub_field('img_1x');
                    $image2x = get_sub_field('img_2x');
                    $posX = get_sub_field('position_x');
                    $posY = get_sub_field('position_y');
                    ?>
                        <!-- Slide -->
                        <div class="swiper-slide item-slider__carousel__item bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/dual-ring-1s-61px.gif'); background-position: center; background-repeat: no-repeat;">
                            <img data-src="<?php echo $image1x; ?>" data-srcset="<?php echo $image2x; ?>" style="object-position: <?php echo $posX; ?>% <?php echo $posY; ?>%;" class="swiper-lazy">
                            
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
                <!-- Thumbnail Slider -->
                <div class="thumb-slider__carousel">
                    <div class="swiper-wrapper">
                    <?php while( have_rows('item_slider') ): the_row();
                    $imgageThumb = get_sub_field('img_thumb');
                    $posX = get_sub_field('position_x');
                    $posY = get_sub_field('position_y');
                    ?>
                        <!-- Slide -->
                        <div class="swiper-slide thumb-slider__carousel__item bg-cover"><?php echo wp_get_attachment_image( $imgageThumb, 'thumbnail' ); ?></div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                </div>
                <!-- Add Arrows -->
                <div class="thumb-slider__navigation">
                    <div class="thumb-slider-prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="thumb-slider-next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
            
                
            
            
            <!-- Item Card -->
            <div class="card-item">
                <div class="card-item__bg"></div>
                <div class="card-item__content">
                    <!-- Item Title -->
                    <div class="card-item__title">
                        <h1 class="card-item__content__ttl">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <!-- Item Composition -->
                    <div class="card-item__composition">
                        <?php if( have_rows('compositions') ): ?>
                            <?php while( have_rows('compositions') ): the_row(); ?>
                                <!-- Composition with differents parts -->
                                <?php if(get_sub_field('comp_part')): ?>
                                    <p>
                                    <span class="card-item__composition__part "><?php the_sub_field('comp_part') ?>:</span>
                                    
                                    <?php if( have_rows('composition') ): ?>
                                        <?php while( have_rows('composition') ): the_row(); ?>

                                            <span class="card-item__content__material" id="material">
                                                <?php $taxonomyTerm = get_sub_field('material'); ?>
                                                <?php the_sub_field('percentage')?> % <a href="<?php echo home_url(); ?>/materials/<?php echo esc_html($taxonomyTerm->slug); ?>"><?php echo esc_html($taxonomyTerm->name); ?></a> /
                                            </span>
                                
                                        <?php endwhile; ?>
                                    </p>
                                    <?php endif; ?>
                                <!-- Single Part Composition -->
                                <?php else: ?>
                                    <?php if( have_rows('composition') ): ?>
                                        <?php while( have_rows('composition') ): the_row(); ?>
                                            <p class="card-item__content__material" id="material">
                                                <?php $taxonomyTerm = get_sub_field('material'); ?>
                                                <?php the_sub_field('percentage')?> % <a href="<?php echo home_url(); ?>/materials/<?php echo esc_html($taxonomyTerm->slug); ?>"><?php echo esc_html($taxonomyTerm->name); ?></a>
                                            </p>     
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Item Colors -->
                    <div class="card-item__colors">
                        <h3 class="card-item__content__subtitle">
                            COLORS
                        </h3>
                        <div class="card-item__content__palete">
                        <?php if( have_rows('color_palette') ): ?>
                            <?php while( have_rows('color_palette') ): the_row(); ?>
                            <!-- Color Square -->
                            <?php if (get_sub_field('color_name') !== "Rainbow"): ?>
                                <div class="card-item__content__palete__color tooltip" style="background-color:<?php the_sub_field('color'); ?>">
                                    <span class="tooltiptext"><?php the_sub_field('color_name'); ?></span>
                                </div>
                            <!-- Rainbow Square -->
                            <?php else: ?>
                                <div class="card-item__content__palete__color tooltip" style="background: linear-gradient(to right, #ff8080 , #fffa80, #81ff80, #7ea0ff, #ff7afd, #ff8080);">
                                    <span class="tooltiptext"><?php the_sub_field('color_name'); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                        </div>
                    </div>
                    <!-- Item Sizes -->
                    <?php if( have_rows('sizes_container') ): ?>
                    <div class="card-item__sizes">
                        <h3 class="card-item__content__subtitle">
                            SIZE
                        </h3>

                        <?php while ( have_rows('sizes_container') ) : the_row(); ?>
                            
                            <?php if( get_row_layout() == 'simple_size' ): ?>
                                <?php if( have_rows('sizes_list') ): ?>
                                <div class="card-item__sizes__list">
                                    <?php while( have_rows('sizes_list') ) : the_row(); ?>
                                    <p class="card-item__content__txt" id="item-size">
                                        <?php the_sub_field('size') ?>
                                    </p>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                                <p class="card-item__sizes__disclaimer">
                                    * <?php the_sub_field('disclaimer') ?>
                                </p>
                            <?php elseif( get_row_layout() == 'table_size' ): ?>
                                <?php if( have_rows('table') ): ?>
                                <table class="card-item__sizes__table">
                                    <?php while( have_rows('table') ) : the_row(); ?>
                                    <tr>
                                        <?php if( get_sub_field('col_1') ): ?>
                                        <td class="card-item__content__txt"><?php the_sub_field('col_1') ?></td>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('col_2') ): ?>
                                        <td class="card-item__content__txt"><?php the_sub_field('col_2') ?></td>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('col_3') ): ?>
                                        <td class="card-item__content__txt"><?php the_sub_field('col_3') ?></td>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('col_4') ): ?>
                                        <td class="card-item__content__txt"><?php the_sub_field('col_4') ?></td>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('col_5') ): ?>
                                        <td class="card-item__content__txt"><?php the_sub_field('col_5') ?></td>
                                        <?php endif; ?>
                                    </tr>
                                        <?php endwhile; ?>
                                </table>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endwhile;
                            endif; ?>
                    </div>
                    
                    <!-- Item Accesories -->
                    <?php if( get_field('accessories') ): ?>
                    <div class="card-item__accessories">
                        <h3 class="card-item__content__subtitle">
                            ACCESSORIES
                        </h3>
                        <p class="card-item__content__txt" id="item-size">
                            <?php the_field('accessories'); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <div class="card-item__description">
                        <h3 class="card-item__content__subtitle ">
                            Description
                        </h3>
                    
                        <p class="card-item__content__txt" id="item-description">
                            <?php the_field('item_description'); ?>
                        </p>
                    </div> 
                    <div class="card-item__care">  
                        <h3 class="card-item__content__subtitle">
                            Care Instructions
                        </h3>
                        <p class="card-item__content__txt" id="item-care">
                            <?php the_field('care_instructions'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-products">
            <div class="block-products__bg"></div>
            <div class="block-products__content">
                <h1 class="block-products__content__ttl">Other Accessories</h1>
                <a href="category.html"><h2 class="block-products__content__btn">View All</h2></a>
            </div>
            <div class="block-products__slider">
                <div class="product-slider">
                    <div class="product-slider__carousel">
                        <div class="swiper-wrapper">
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-77.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-77@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-89.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-89@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-77.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-77@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-89.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-89@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-77.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-77@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/W-89.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/W-89@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                        </div>
                    </div>
                    <div class="product-slider__label">
                        <div class="swiper-wrapper">
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">FUR HAT</p>
                                <h2 class="product-slider__label__content__material">Border: 100% alpaca huacaya fur</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">FUR HAT</p>
                                <h2 class="product-slider__label__content__material">Border: 100% alpaca huacaya fur</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">FUR HAT</p>
                                <h2 class="product-slider__label__content__material">Border: 100% alpaca huacaya fur</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">FUR HAT</p>
                                <h2 class="product-slider__label__content__material">Border: 100% alpaca huacaya fur</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">FUR HAT</p>
                                <h2 class="product-slider__label__content__material">Border: 100% alpaca huacaya fur</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

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
                <ul class="block-categories__card__list">
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_002.jpg">Accessories</a>
                    </li>
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_003.jpg">Alpaca Fur Toys</a>
                    </li>
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_004.jpg">Babies</a>
                    </li>
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_002.jpg">Home</a>
                    </li>
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_003.jpg">Needle Felting</a>
                    </li>
                    <li>
                        <a href="category.html" hover-img="<?php echo get_template_directory_uri(); ?>/assets/img/products_img_004.jpg">Sleepers</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <script>
        document.body.classList.add('item');
    </script>


	<!-- <main id="primary" class="site-main">

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation(
		// 		array(
		// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'qatatheme' ) . '</span> <span class="nav-title">%title</span>',
		// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'qatatheme' ) . '</span> <span class="nav-title">%title</span>',
		// 		)
		// 	);

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

	</main> -->

<?php
get_footer();