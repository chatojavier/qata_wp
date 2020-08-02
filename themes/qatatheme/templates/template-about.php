<?php
/* Template Name: Template - About Us*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

    <!-- Header Hero -->
    <?php get_template_part( 'template-parts/header-hero', get_post_type() ); ?>

    <section class="second-screen">
    
    <?php get_template_part( 'template-parts/content-block-product', get_post_type() ); ?>
        
    </section>

    <script>
        document.body.classList.add('about');
    </script>

<?php
endif;
get_footer();
?>