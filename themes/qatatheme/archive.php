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
	
	<!-- Header Title and Image -->
	    <div class="header-hero">
            <div class="header-hero__img">
                <img src="<?php echo $cat_image1x; ?>" alt="" srcset="<?php echo $cat_image2x; ?>">
            </div>
            <div class="header-card landscape">
                <h1 class="header-card__ttl">
					<?php the_archive_title() ?>
                </h1>
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
		<?php if(get_the_archive_description()) : ?>
			<div class="header-card__descrip">
				<p><?php the_archive_description() ?></p>
			</div>
		<?php endif; ?>
	</div>
	
	<!-- Second Screen -->
	<section class="second-screen">
		<?php if ( have_posts() ) : ?>
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
		<?php elseif (is_tax( 'products_category', 'personalized' )) : 
			//Personalized ?>
			<div class="block-artisans">
				<div class="block-artisans__bg"></div>
				<div class="block-artisans__content">
					<a href="#contact">
						<h2 class="block-artisans__content__ttl">
							Contact Us 
						</h2>
					</a>
					<div class="block-artisans__content__txt">
						<p>
							We at Qata Alpaca Goods are pleased to embrace our client’s needs and requirements, therefore we are able to personalized different sizes, colours and products that meet our client’s tastes.
						</p>
						<p>
							We can also create a special collection for particular clients under their own label. Just let us know what suits you the best. In addition, we can place your own label tags for no extra cost. If you need us to manufacture your label tags, we will be happy to do it for an extra cost. We provide wholesales services, as well as, specific retail requirements. 
						</p>
					</div>
				</div>
				<figure class="block-artisans__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/varias-taller00012.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/varias-taller00012@2x.jpg" alt="Qata Alpaca - Alpacas in their natural environment.">
				</figure>
        	</div>

		<?php get_template_part( 'template-parts/content-block-product' );
		
		else :
			//None
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

        <!-- Category Menu Block -->
        <?php get_template_part( 'template-parts/content-block-category', get_post_type() ); ?>
	</section>


	<script>
        document.body.classList.add('category');
	</script>
	<script>
	  if ('loading' in HTMLImageElement.prototype) {
	  // Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
	  // `lazyload`, obtenemos el valor de su atributo `data-src` y lo inyectamos en el `src`.
	  var images = document.querySelectorAll("img.lazyload");
	    images.forEach(img => {
			img.src = img.dataset.src;
			if (img.dataset.srcset) {
				img.srcset = img.dataset.srcset;
			};
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
