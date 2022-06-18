
<div id="<?= $attributes['titre-court'] ?>s">
    
    <div class="product__section-trigger js-product-section-trigger"
    onclick="product_section_trigger(this)" data-href="<?= $attributes['titre-court'] ?>">
    <?= $attributes['titre-court'] ?></div>
    <div id="<?= $attributes['titre-court'] ?>" class="product__section js-product-section">
        <h2 class="tt-2"> <?= $attributes['titre-long'] ?> </h2>
        
        <div class="product__box u-mtl">
					<div class="product__objectives">
						<ul>
              <?php foreach( $attributes['liste'] as $inner ): ?>
                  <li><?php echo $inner['detaille']; ?></li>
              <?php endforeach; ?>
						</ul>
					</div>
				</div>
					
    </div>
</div>