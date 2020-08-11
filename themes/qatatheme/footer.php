<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Qata_Alpaca_Theme
 */

?>

<footer>

<div class="block-contact" id="contact">
	<div class="block-contact__bg"></div>
	<div class="block-contact__content">
		<p class="block-contact__content__txt">
			If you are interested in importing our products or have any questions, let’s talk about it.
		</p>
		<div class="block-contact__content__contacts">
			<p class="email">
				Sales: hello@qatalpaca.com <br>
				Phone: +51 953 768 989 <br>
				Phone: +51 959 371 770
			</p>
			<div class="msn-icons">
				<a href="https://api.whatsapp.com/send?phone=51973119303&text=This%20is%20a%20test." target="_blank"><i class="fab fa-whatsapp"></i></a>
				<a href="https://www.messenger.com/t/qatalpaca" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
			</div>
		</div>
	</div>
	<div class="insta-container">
		
	</div>
</div>

<div class="block-footer">
	<div class="block-footer__bg"></div>
	<div class="block-footer__content">
		<figure class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/qata_logo_salmon_dark.svg" alt="Qata Logo">
		</figure>
		<p class="copyright">
			© 2020 Qata Alpaca Goods. All rights reserved. <br>
			Creative Web Design by Javier Benavides.
		</p>
	</div>
</div>

</footer>

<script src="https://kit.fontawesome.com/08c8d440a1.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
