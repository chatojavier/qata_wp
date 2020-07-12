<?php
/* Template Name: Template - About Us*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

<div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_img_001.jpg" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about_img_001@2x.jpg">
            </div>

            <div class="header-card landscape">
                <h1 class="header-card__ttl">
                    About Us
                </h1>
                <div class="header-card__descrip">
                    <p>
                        We are Ale and Ysa, the faces behind Qata Alpaca Goods. Born and raised in Arequipa - Peru. The love for our culture, the alpacas and the exquisite art made by local people come together to create a brand that focuses on artisans. 
                    </p>
                    <p>
                        Working hand in hand with these artists, we create high quality leather products to international standards. Our objectives are to value the work of the artisans, assure them a fair payment and use natural death alpaca fur.
                    </p>
                </div>
                
            </div>
            
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>

    <div class="header-card portrait">
        <h1 class="header-card__ttl">
            About Us
        </h1>
        <div class="header-card__descrip">
            <p>
                We are Ale and Ysa, the faces behind Qata Alpaca Goods. Born and raised in Arequipa - Peru. The love for our culture, the alpacas and the exquisite art made by local people come together to create a brand that focuses on artisans. 
            </p>
            <p>
                Working hand in hand with these artists, we create high quality leather products to international standards. Our objectives are to value the work of the artisans, assure them a fair payment and use natural death alpaca fur.
            </p>
        </div>
    </div>

    <section class="second-screen">
        <div class="block-products">
            <div class="block-products__bg"></div>
            <div class="block-products__content">
                <h1 class="block-products__content__ttl">Featured Products</h1>
                <a href="products.html"><h2 class="block-products__content__btn">View All</h2></a>
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
    </section>

    <script>
        document.body.classList.add('about');
    </script>

<?php
endif;
get_footer();
?>