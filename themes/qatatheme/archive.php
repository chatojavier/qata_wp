<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Qata_Alpaca_Theme
 */

get_header();
?>
	<?php
	$term = get_queried_object();
	$cat_image1x = wp_get_attachment_image_src(get_field('cat_image', $term), 'large')[0];
    $cat_image2x = wp_get_attachment_image_src(get_field('cat_image', $term), 'full')[0];
	?>
	<?php if ( have_posts() ) : ?>
	<!-- Header Title and Image -->
	    <div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php echo $cat_image1x; ?>" alt="" srcset="<?php echo $cat_image2x; ?>">
            </div>
            <div class="header-card landscape">
                <h1 class="header-card__ttl">
					<?php the_archive_title() ?>
                </h1>
                <div class="header-card__descrip">
                    <p><?php the_archive_description() ?></p>
                </div>
            </div>
        </div>
       
        <div id="down-sign" class="first-screen__down-arrow">
            <a href="#down-sign"><i class="fas fa-long-arrow-alt-down"></i></a>
        </div>
    </section>

    <div class="header-card portrait">
        <h1 class="header-card__ttl">
			<?php the_archive_title() ?>
        </h1>
        <div class="header-card__descrip">
            <p><?php the_archive_description() ?></p>
        </div>
	</div>
	
	<!-- Second Screen -->
	<section class="second-screen">
        <div class="block-catalog">
            <div class="block-catalog__bg"></div>

            <div class="catalog-grid">
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/* Posts resume sqares */
						get_template_part( 'template-parts/content-archive', get_post_type() );

					endwhile;
				?>
            </div>
        </div>

        <!-- Category Menu Block -->
        <?php get_template_part( 'template-parts/content-block-category', get_post_type() ); ?>
	</section>
	
	<?php else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>


	<script>
        document.body.classList.add('about');
	</script>
	<script>
	  if ('loading' in HTMLImageElement.prototype) {
	  // Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
	  // `lazyload`, obtenemos el valor de su atributo `data-src` y lo inyectamos en el `src`.
	  var images = document.querySelectorAll("img.lazyload");
	    images.forEach(img => {
	        img.src = img.dataset.src;
	    });
	  } else {
	    // Importamos dinámicamente la libreria `lazysizes`
	    var script = document.createElement("script");
	    script.async = true;
	    script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js";
	    document.body.appendChild(script);
	  }
	</script>
<?php
get_footer();
