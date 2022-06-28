<div id="<?= htmlentities($attributes['titre-court']) ?>s">
    
    <div class="product__section-trigger js-product-section-trigger"
    onclick="product_section_trigger(this)" data-href="<?= htmlentities($attributes['titre-court']) ?>">
    <?= $attributes['titre-court'] ?></div>
    <div id="<?= htmlentities($attributes['titre-court']) ?>" class="product__section js-product-section">
    
        <h3 class="tt-2 <?= $attributes['icon'] ?>"> 
        <i class="fa-solid <?= $attributes['icon']?>" style="padding-left: 10px;"></i> 
        <?= $attributes['titre-long'] ?> </h2>
        
        <div class="product__box u-mtl">
          <div class="product__objectives">
					<?= $attributes['detaille'] ?>}
					</div>
				</div>
					
    </div>
</div>