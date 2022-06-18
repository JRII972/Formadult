
<div class="product__programs js-product-program program-expand">
    <div class="title-before"><?= $attributes['titre'] ?></div>
    <p>
        <?= $attributes['description'] ?>
    </p>
    <ul>
        <?php foreach( $attributes['liste'] as $inner ): ?>
    <li><?php echo $inner['information']; ?></li>
    <?php endforeach; ?>
    </ul>
<?= $attributes['partie'] ?>
    
</div>