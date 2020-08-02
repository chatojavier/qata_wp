<?php
/* Template Name: Template - Home*/
get_header();
get_template_part( 'template-parts/content-header_slider', get_post_type() );

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

        <!-- <div class="header-slider">
            <div class="header-slider__carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide header-slider__carousel__item bg-cover"><a href="category.html"><img src="img/W-77.jpg" srcset="img/W-77@2x.jpg" style="object-position: 0 0;"></img></div></a>
                    <div class="swiper-slide header-slider__carousel__item bg-cover"><a href="category.html"><img src="img/W-89.jpg" srcset="img/W-89@2x.jpg" ></img></div></a>
                    <div class="swiper-slide header-slider__carousel__item bg-cover"><a href="category.html"><img src="img/products_img_004.jpg" srcset="img/products_img_004@2x.jpg"></img></div></a>
                    <div class="swiper-slide header-slider__carousel__item bg-cover"><a href="category.html"><img src="img/products_img_001.jpg" srcset="img/products_img_001@2x.jpg"></img></div></a>
                    <div class="swiper-slide header-slider__carousel__item bg-cover"><a href="category.html"><img src="img/products_img_003.jpg" srcset="img/products_img_003@2x.jpg"></img></div></a>
                </div>
            </div>
            <div class="header-slider__label">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="category.html"><div class="header-slider__label__content">
                            <p class="header-slider__label__content__prod">Producto</p>
                            <h1 class="header-slider__label__content__cat">ACCESSORIES</h1>
                            <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                        </div></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="category.html"><div class="header-slider__label__content">
                            <p class="header-slider__label__content__prod">Producto</p>
                            <h1 class="header-slider__label__content__cat">ALPACA FUR TOYS</h1>
                            <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                        </div></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="category.html"><div class="header-slider__label__content">
                            <p class="header-slider__label__content__prod">Producto</p>
                            <h1 class="header-slider__label__content__cat">BABIES</h1>
                            <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                        </div></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="category.html"><div class="header-slider__label__content">
                            <p class="header-slider__label__content__prod">Producto</p>
                            <h1 class="header-slider__label__content__cat">HOME</h1>
                            <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                        </div></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="category.html"><div class="header-slider__label__content">
                            <p class="header-slider__label__content__prod">Producto</p>
                            <h1 class="header-slider__label__content__cat">NEEDLE FELTING</h1>
                            <svg class="header-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section> -->

    <section class="second-screen">
        <div id="block-about" class="block-about">
            <div class="block-about__bg"></div>
            <div class="block-about__content">
                <p class="block-about__content__txt"> We make Alpaca fur pieces of highest quality and international standards. </p>
                <a href="about/"><h2 class="block-about__content__btn"> About Us</h2></a>
            </div>
            <figure class="block-about__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_001.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_001@2x.jpg" alt="Qata Alpaca - Alpacas in their natural environment.">
            </figure>
        </div>

        <div class="block-respons">
            <div class="block-respons__bg"></div>
            <figure class="block-respons__img1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_002.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_002@2x.jpg" alt="Qata Alpaca - Light Coffee Alpaca Huacaya.">
            </figure>
            <div class="block-respons__content">
                <p class="block-respons__content__txt mb-8">Our priority is to work responsibly with nature and local communities.</p>
                <a href="responsibility/"><h2 class="block-respons__content__btn">Responsability</h2></a>
            </div>
            <figure class="block-respons__img2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_003.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home_img_003@2x.jpg" alt="Qata Alpaca - Artisans working Alpaca's fur.">
            </figure>
        </div>

        <div class="block-products">
            <div class="block-products__bg"></div>
            <div class="block-products__content">
                <h1 class="block-products__content__ttl">Featured Products</h1>
                <a href="products.html"><h2 class="block-products__content__btn">View All</h2></a>
            </div>
            <div class="block-products__slider">
                <div class="product-slider">
                    <?php get_product_slider( '', 6 ); ?>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
get_footer();
?>