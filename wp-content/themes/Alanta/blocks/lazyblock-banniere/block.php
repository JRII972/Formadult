
 <div class="product__header_contener " style="background-image: url('<?php echo esc_url( $attributes['image-de-fond']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image-de-fond']['alt'] ); ?>">
	<div class="product__header " data-productid="369860">
		<div class="wrap">
			<div class="product__header-infos">
				<h1 class="product__title"> <?php the_title() ?> </h1>
				<h2 class="product__subtitle" style="color: white"><?= $attributes['sous-titre'] ?>
				</h2>
				<a href="#avis" class="product__rating rating js-product-scrollto">
					<div class="rating__image">
						<i class="fa-solid fa-heart fa-beat heart-rating" style="--fa-animation-duration: 2s; --fa-animation-iteration-count: 2; --fa-beat-scale: 1.15; --fa-animation-delay: 0s; "></i>
						<i class="fa-solid fa-heart fa-beat heart-rating" style="--fa-animation-duration: 2s; --fa-animation-iteration-count: 2; --fa-beat-scale: 1.15; --fa-animation-delay: 0.2s;"></i>
						<i class="fa-solid fa-heart fa-beat heart-rating" style="--fa-animation-duration: 2s; --fa-animation-iteration-count: 2; --fa-beat-scale: 1.15; --fa-animation-delay: 0.4s;"></i>
						<i class="fa-solid fa-heart fa-beat heart-rating" style="--fa-animation-duration: 2s; --fa-animation-iteration-count: 2; --fa-beat-scale: 1.15; --fa-animation-delay: 0.6s;"></i>
					</div>
					<div class="rating__note"><strong>3,5</strong>/5 </div>
					<div class="rating__count u-txt-blue-grey "> (24 avis) </div>
				</a>
				
			</div>
			<div class="product__header-sidebar">
                <?php if ( isset($attributes['fichier-pdf']['url']) ) : ?>
				<div class="product__ctas u-mtl">
					<a target="_blank" href="<?=  esc_url( $attributes['fichier-pdf']['url'] );?>" class="cta-default cta-default--blue-grey ">Télécharger le PDF</a>
				</div>
                <?php endif; ?>
                
				<div data-video-open="" data-embed-url="<?=  esc_url( $attributes['video'] );?>" class="product__video u-mtl">
					<div class="product__video-thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hqdefault.jpg" alt="" loading="lazy"></div>
					<div class="product__video-play"></div>
				</div>
			</div>
		</div>
	</div>
</div>