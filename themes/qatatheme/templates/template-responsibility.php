<?php
/* Template Name: Template - Responsibility*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

<div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_001.jpg" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_001@2x.jpg">
            </div>
            <div class="header-card landscape">
                <h1 class="header-card__ttl">
                    Responsibility
                </h1>
                <div class="header-card__descrip">
                   <p>The pillars of our company are artisans and alpacas. That is why all our work is oriented to their well-being.</p>
                </div>
            </div>
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>

    <div class="header-card portrait">
        <h1 class="header-card__ttl">
            Responsibility
        </h1>
        <div class="header-card__descrip">
            <p>The pillars of our company are artisans and alpacas. That is why all our work is oriented to their well-being.</p>
        </div>
    </div>

    <section class="second-screen">
        <div class="block-artisans">
            <div class="block-artisans__bg"></div>
            <div class="block-artisans__content">
                <h2 class="block-artisans__content__ttl">
                    Artisans
                </h2>
                <p class="block-artisans__content__txt">
                    We believe that artisans deserve to be recognized and receive a good payment for their work, which sometimes does not happen, making it impossible for artisans to continue living on their art. We work hand in hand with local artisans specialized in fur and alpaca yarn products for home decoration, accessories and toys.
                </p>
            </div>
            <figure class="block-artisans__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_002.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_002@2x.jpg" alt="Qata Alpaca - Alpacas in their natural environment.">
            </figure>
        </div>

        <div class="block-guiltfree">
            <div class="block-guiltfree__bg"></div>
            <div class="block-guiltfree__content">
                <h2 class="block-guiltfree__content__ttl">
                    GUILT-FREE FUR
                </h2>
                <p class="block-guiltfree__content__txt">
                    Alpacas in Peru are legally protected by SENASA (National Agrarian Health Service). Unfortunately around 13% of the population die due to climate conditions like frosting, parasitarian illnesses and infections, lack of food or water, etc. Baby alpacas suffer even more the consequences of extreme weather as they are much more sensible to cold climate. After death, local farmers sell the animals fur and meat to the local collectors and markets. In this way we only use alpaca fur that had a natural death.
                </p>
            </div>
            <figure class="block-guiltfree__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_003.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_003@2x.jpg" alt="Qata Alpaca - Alpacas in their natural environment.">
            </figure>
        </div>

        <div class="block-articles">
            <div class="block-articles__bg"></div>
            <div class="block-articles__content">
                <h1 class="block-articles__content__ttl">Recent Articles</h1>
                <a href=""><h2 class="block-articles__content__btn">View All</h2></a>
            </div>
            <div class="block-articles__slider">
                <div class="product-slider">
                    <div class="product-slider__carousel">
                        <div class="swiper-wrapper">
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_004.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_004@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_003.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_003@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_005.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_005@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_002.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_002@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_001.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_001@2x.jpg" alt="" style="object-position: 0 0;"></a></div>
                            <div class="product-slider__carousel__item swiper-slide"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_006.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/responsibility_img_006@2x.jpg" alt="" style="object-position: 50% 50%;"></a></div>
                        </div>
                    </div>
                    <div class="product-slider__label">
                        <div class="swiper-wrapper">
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">¿Cómo se hace la esquila de la alapaca?</p>
                                <h2 class="product-slider__label__content__material">3 de mayo del 2020</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">¿Cómo se hace la esquila de la alapaca?</p>
                                <h2 class="product-slider__label__content__material">3 de mayo del 2020</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">¿Cómo se hace la esquila de la alapaca?</p>
                                <h2 class="product-slider__label__content__material">3 de mayo del 2020</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">¿Cómo se hace la esquila de la alapaca?</p>
                                <h2 class="product-slider__label__content__material">3 de mayo del 2020</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                            <div class="product-slider__label__content swiper-slide">
                                <p class="product-slider__label__content__prod">¿Cómo se hace la esquila de la alapaca?</p>
                                <h2 class="product-slider__label__content__material">3 de mayo del 2020</h2>
                                <svg class="product-slider__label__content__arrow" xmlns="http://www.w3.org/2000/svg" width="25.207" height="20.414" viewBox="0 0 25.207 20.414"><defs></defs><path class="a" d="M15,0V6H0v6H15v6l9-9.09Z" transform="translate(0.5 1.199)"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.body.classList.add('responsibility');
    </script>

<?php
endif;
get_footer();
?>