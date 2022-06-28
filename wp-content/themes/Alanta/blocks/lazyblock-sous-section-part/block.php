
<div id="parties">
    <!-- Partie  -->
    <div class="product__box u-bg-grey u-mtl u-py">
        <div class="product__accordion js-show-more " 
            onclick="product_section_trigger(this)" 
            data-href="<?= htmlentities($attributes['titre'])?>">
            <h3 class="bgBlueTitle u-mb0">
            <i class="fa-solid " style="padding-left: 10px;"></i> 
                <?= $attributes['titre'] ?></h3>
        </div>
    </div>
    <div class="product__box wysiwyg u-bdt-none " 
        id="<?= htmlentities($attributes['titre']) ?>" style="display: none">
        <p>
            <?= $attributes['description'] ?>
        </p>
        <div class="product__program">
            <?= $attributes['partie'] ?>
        </div>
    </div>
</div>