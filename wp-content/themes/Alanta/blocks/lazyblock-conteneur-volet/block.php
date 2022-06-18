<div class="wrap">
	<div class="product__layout">
        <div class="product__tabs ">
            <div class="product__tabs-items">
                
                <?php if(get_post_meta(get_the_ID(), 'prix_inter', true) !== '0' && get_post_meta(get_the_ID(), 'prix_inter', true) != '')  { ?>
                <a data-href="inter" onclick="tab_nav(this)"
                    class="product__tabs-item js-tab-item is-active ">Chez Nous</a>
                <?php  } ?>
                <?php if(get_post_meta(get_the_ID(), 'prix_intra', true) !== '0' && get_post_meta(get_the_ID(), 'prix_intra', true) != '')  { ?>
                <a data-href="intra" onclick="tab_nav(this)"
                    class="product__tabs-item js-tab-item
                    <?= (!(get_post_meta(get_the_ID(), 'prix_inter', true) !== '0' && get_post_meta(get_the_ID(), 'prix_inter', true) != '')) ? 'is-active' : '' ?>
                    ">Chez Vous</a>
                    <?php  } ?>
                <?php if(get_post_meta(get_the_ID(), 'devis', true) === '1' || get_post_meta(get_the_ID(), 'devis', true) != '')  { ?>
                <a data-href="sur-mesure"  onclick="tab_nav(this)"
                    class="product__tabs-item js-tab-item ">Sur Mesure</a>
                <?php  } ?>
            </div>
            <div class="product__tabs-content">
                <?php if(get_post_meta(get_the_ID(), 'prix_inter', true) !== '0' && get_post_meta(get_the_ID(), 'prix_inter', true) != '')  { ?>
                <div id="inter" class="product__tabs-panel is-active js-tab-content">
                    <div class="product__tabs-header "><span
                            class="u-mb0 u-txt-light u-txt-semibold">EN PRESENTIEL CHEZ NOUS</span></div>
                    <div class="product__tabs-sections page_speed_574825364">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation between-xs">
                                <div>
                                    <div class="u-txt-icon"><i class="icon-tag u-txt-grey-600"></i><span
                                            class="u-txt-semibold">Référence</span></div>
                                </div>
                                <div class="u-txt-right"><span class="tt-3 u-txt-semibold"><?= get_post_meta(get_the_ID(), 'reference', true)?></span>
                                </div>
                            </div>
                        </div>
                        <hr class="u-hr">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation between-xs middle-xs">
                                <div>
                                    <div class="u-txt-icon"><i
                                            class="icon-duration u-txt-grey-600"></i><span
                                            class="u-txt-semibold">Durée</span></div>
                                </div>
                                <div class="u-txt-right">
                                    <div class="tt-3 u-mbs"><?= get_post_meta(get_the_ID(), 'temps_jour', true).' Jour(s) ('. get_post_meta(get_the_ID(), 'temps_heure', true).'H)'?></div>
                                </div>
                            </div>
                            <div class="training__info"><span class="u-txt-icon remote"><i
                                        class="icon-plus-circle u-txt-red"></i>
                                        <span>activité à distance</span></span></div>
                        </div>
                        <hr class="u-hr">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation middle-xs between-xs">
                                <div class="u-txt-right">
                                    <div class="u-txt-icon"><i
                                            class="icon-euro u-txt-grey-600"></i><span
                                            class="u-txt-semibold">Prix</span></div>
                                </div>
                                <div class="width-100-text-right"><span
                                        class="product__price product__price__inter"
                                        id="price-with-margin"><strong><?= get_post_meta(get_the_ID(), 'prix_inter', true) ?></strong> &nbsp;HT
                                    </span></div>
                            </div>
                        </div>
                        <div class="product__tabs-section">
                            <hr class="u-hr">
                            
                            <div class="u-mb" id="btnAddToCart"
                                onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Ecommerce', 'eventAction': 'Add to Cart', 'eventLabel': 'Subscribe Inter', 'ecommerce': { 'currencyCode': 'EUR', 'add': { 'products': [{ 'id': '8100', 'name': 'Conduite du changement', 'brand': 'Form Adult', 'category': 'Conduite du changement/Accompagnement au changement/Conduire le changement', 'variant': '2022', 'price': '4570.00' }]}}});Form AdultAddToCart(369860, $('#sessionId').val(), this.id);"
                                data-href="https://www.Form Adult.fr/espace-client/ma-selection"><span
                                    class="cta-default cta-default--main cta-default--block u-txt-size-18"><span
                                        class="u-txt-bold"> Demander un devis </span></span></div>
                            <div class="u-txt-center u-mbs cursor-pointer" id="btnAddToCart"
                                onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Ecommerce', 'eventAction': 'Add to Cart', 'eventLabel': 'Ask for a quote', 'ecommerce': { 'currencyCode': 'EUR', 'add': { 'products': [{ 'id': '8100', 'name': 'Conduite du changement', 'brand': 'Form Adult', 'category': 'Conduite du changement/Accompagnement au changement/Conduire le changement', 'variant': '2022', 'price': '4570.00' }]}}});Form AdultAddToCart(369860, $('#sessionId').val(), this.id);"
                                data-href="https://www.Form Adult.fr/espace-client/ma-selection"><span
                                    class="u-txt-underline-on-hover">Grille tarifaire</span></div>
                        </div>
                    </div>
                    <div class="product__tabs-sections page_speed_150797605">
                        <div class="product__tabs-section page_speed_150797605">
                            <div class="u-txt-center"></div>
                        </div>
                    </div>
                    <div class="product__tabs-sections page_speed_1530629063">
                        <div class="product__tabs-section">
                            <hr class="u-hr">
                            <div onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Contact', 'eventLabel': 'Training manager'});"
                                class="u-mt u-mb u-txt-center"><a href="<?= get_site_url() ?>/contact"
                                    class="u-txt-grey u-txt-underline-on-hover">Nous contacter</a></div>
                            
                        </div>
                    </div>
                </div>
                <?php  } ?>
                <?php if(get_post_meta(get_the_ID(), 'prix_intra', true) !== '0' && get_post_meta(get_the_ID(), 'prix_intra', true) != '')  { ?>
                <div id="intra" class="product__tabs-panel 
                <?= (!(get_post_meta(get_the_ID(), 'prix_inter', true) !== '0' && get_post_meta(get_the_ID(), 'prix_inter', true) != '')) ? 'is-active' : '' ?>
                js-tab-content">
                    <div class="product__tabs-header "><span
                            class="u-mb0 u-txt-light u-txt-semibold">
                            EN PRESENTIEL CHEZ NOUS</span></div>
                    <div class="product__tabs-sections page_speed_574825364">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation between-xs">
                                <div>
                                    <div class="u-txt-icon"><i class="icon-tag u-txt-grey-600"></i><span
                                            class="u-txt-semibold">Référence</span></div>
                                </div>
                                <div class="u-txt-right"><span class="tt-3 u-txt-semibold">8100</span>
                                </div>
                            </div>
                        </div>
                        <hr class="u-hr">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation between-xs middle-xs">
                                <div>
                                    <div class="u-txt-icon"><i
                                            class="icon-duration u-txt-grey-600"></i><span
                                            class="u-txt-semibold">Durée</span></div>
                                </div>
                                <div class="u-txt-right">
                                    <div class="tt-3 u-mbs"><?= get_post_meta(get_the_ID(), 'temps_jour', true).' Jour(s) ('. get_post_meta(get_the_ID(), 'temp_heure', true).'H)'?></div>
                                </div>
                            </div>
                            <div class="training__info"><span class="u-txt-icon remote"><i
                                        class="icon-plus-circle u-txt-red"></i>
                                        <span>activité à distance</span></span></div>
                        </div>
                        <hr class="u-hr">
                        <div class="product__tabs-section">
                            <div class="flex-container no-compensation middle-xs between-xs">
                                
                                <div class="u-txt-right">
                                    <div class="u-txt-icon"><i
                                            class="icon-euro u-txt-grey-600"></i><span
                                            class="u-txt-semibold"> Adaptation à vos locaux - <a
                                                href="#intraPackage" data-modal-open=""
                                                class="u-txt-grey">En savoir plus</a></span></div>
                                </div>
                                <div class="width-100-text-right"><span
                                        class="product__price product__price__inter"
                                        id="price-with-margin"><strong><?= get_post_meta(get_the_ID(), 'prix_intra', true) ?></strong> € &nbsp;HT
                                    </span></div>

                            </div>
                        </div>
                        <div class="product__tabs-section">
                            <hr class="u-hr">
                            
                            <div class="u-mb" id="btnAddToCart"
                                onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Ecommerce', 'eventAction': 'Add to Cart', 'eventLabel': 'Subscribe Inter', 'ecommerce': { 'currencyCode': 'EUR', 'add': { 'products': [{ 'id': '8100', 'name': 'Conduite du changement', 'brand': 'Form Adult', 'category': 'Conduite du changement/Accompagnement au changement/Conduire le changement', 'variant': '2022', 'price': '4570.00' }]}}});Form AdultAddToCart(369860, $('#sessionId').val(), this.id);"
                                data-href="https://www.Form Adult.fr/espace-client/ma-selection"><span
                                    class="cta-default cta-default--main cta-default--block u-txt-size-18"><span
                                        class="u-txt-bold"> Demander un devis </span></span></div>
                            <div class="u-txt-center u-mbs cursor-pointer" id="btnAddToCart"
                                onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Ecommerce', 'eventAction': 'Add to Cart', 'eventLabel': 'Ask for a quote', 'ecommerce': { 'currencyCode': 'EUR', 'add': { 'products': [{ 'id': '8100', 'name': 'Conduite du changement', 'brand': 'Form Adult', 'category': 'Conduite du changement/Accompagnement au changement/Conduire le changement', 'variant': '2022', 'price': '4570.00' }]}}});Form AdultAddToCart(369860, $('#sessionId').val(), this.id);"
                                data-href="https://www.Form Adult.fr/espace-client/ma-selection"><span
                                    class="u-txt-underline-on-hover">Grille tarifaire</span></div>
                        </div>
                    </div>
                    <div class="product__tabs-sections page_speed_150797605">
                        <div class="product__tabs-section page_speed_150797605">
                            <div class="u-txt-center"></div>
                        </div>
                    </div>
                    <div class="product__tabs-sections page_speed_1530629063">
                        <div class="product__tabs-section">
                            <hr class="u-hr">
                            <div onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Contact', 'eventLabel': 'Training manager'});"
                                class="u-mt u-mb u-txt-center"><a href="<?= get_site_url() ?>/contact"
                                    class="u-txt-grey u-txt-underline-on-hover">Nous contacter</a></div>
                            
                        </div>
                    </div>
                </div>
                <?php  } ?>
                <?php if(get_post_meta(get_the_ID(), 'devis', true) === '1' || get_post_meta(get_the_ID(), 'devis', true) != '') { ?>
                <div id="sur-mesure" class="product__tabs-panel js-tab-content">
                    <div class="product__tabs-header "><span
                            class="u-mb0 u-txt-light u-txt-semibold">Formation à la demande</span></div>
                    <div class="product__tabs-sections">
                        <div class="u-mts u-mbm u-txt-center"><span class="u-txt-grey">Cette thématique
                                vous intéresse ? <br> Nous nous ferons un plaisir d'adapter notre formation a vos besoin !</span></div>
                        <div class="u-mtm u-mbm"
                            onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Contact', 'eventLabel': 'Customized'})">
                            <a href="http://127.0.0.1:5500/contact?mode=sur-mesure"
                                class="cta-default cta-default--main cta-default--block u-txt-size-18"><span
                                    class="u-txt-bold">Nous contacter</span></a></div>
                    </div>
                </div>
                <?php  } ?>
                <hr class="u-hr">
                <div class="u-mt u-txt-center">
                    <p class="u-txt-grey u-txt-size-16 u-mbs">Partager cette formation</p>
                </div>
                <div class="flex-container center-xs"><a
                        data-href="https://www.linkedin.com/shareArticle?mini=true&amp;url="
                        onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Share', 'eventLabel': 'LinkedIn'});"
                        class="product__share js-product-share-link"><i class="icon-linkedin"></i></a><a
                        data-href="http://twitter.com/share?url="
                        onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Share', 'eventLabel': 'Twitter'});"
                        class="product__share js-product-share-link"><i class="icon-twitter"></i></a><a
                        data-href="https://www.facebook.com/sharer/sharer.php?u="
                        onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Share', 'eventLabel': 'Facebook'});"
                        class="product__share js-product-share-link"><i class="icon-facebook"></i></a><a
                        href="#modalFriend" class="product__share"
                        onclick="bindModalFriend();dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Share', 'eventLabel': 'Mail'});"
                        id="openModalFriend"><i class="icon-mail"></i></a><a
                        class="product__share js-product-copy-link"
                        onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Share', 'eventLabel': 'Copy'});">
                        <div class="product__share-copy">Lien copié!</div><i class="icon-link"></i>
                    </a>
                </div>
            </div>
        </div>
	  <div class="product__main">
	    <?=  $attributes['contenu'] ?>
	  </div>
	 </div>
</div>