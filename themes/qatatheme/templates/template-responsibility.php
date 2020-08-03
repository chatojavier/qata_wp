<?php
/* Template Name: Template - Responsibility*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

    <!-- Header Hero -->
    <?php get_template_part( 'template-parts/header-hero', get_post_type() ); ?>

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
                    <?php get_post_slider(6); ?>
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