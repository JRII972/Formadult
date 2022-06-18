
<div id="<?= $attributes['titre-court'] ?>s">
    
    <div class="product__section-trigger js-product-section-trigger"
    onclick="product_section_trigger(this)" data-href="<?= $attributes['titre-court'] ?>">
    <?= $attributes['titre-court'] ?></div>
    <div id="<?= $attributes['titre-court'] ?>" class="product__section js-product-section">
        <h2 class="tt-2"> <i class="fa-solid <?= $attributes['icon']?>" style="padding-left: 10px;"></i> 
        <?= $attributes['titre-long'] ?> </h2>
        <div class="product__box product__box--50">
            <div class="product__for product__for--whom">
                <h3>
                <i class="fa-solid <?= $attributes['icon-liste1']?>" style="padding-left: 10px;"></i> 
                    <?= $attributes['sous-titre-liste-1'] ?></h3>
                <ul>
                    <?php foreach( $attributes['liste'] as $inner ): ?>
                        <li><?php echo $inner['detaille']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="product__box product__box--50">
            <div class="product__for product__for--required">
            <h3>
            <i class="fa-solid <?= $attributes['icon-liste2']?>" style="padding-left: 10px;"></i> 
                <?= $attributes['sous-titre-liste-2'] ?></h3>
                <ul>
                    <?php foreach( $attributes['liste2'] as $inner ): ?>
                        <li><?php echo $inner['detaille2']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
					
    </div>
</div>