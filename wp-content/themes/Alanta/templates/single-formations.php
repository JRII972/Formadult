<?php

use tool_monitor\output\managesubs\subs;

/**
 * Template Name: Formation
 * Template Post Type: formations
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

 function get_taxonomy_value($tag){
	return get_post_meta(get_the_ID(), $tag, true);
 }
 
 $bannerImg['url'] = rwmb_meta( 'formation_image_banniere', ['size' => 'large'] );

 foreach($bannerImg as $img){
	foreach($img as $img2){
		$bannerImg = $img2;
		break;
	}
	break;
 }

 $formationSlogan = "Porter un autre regard sur le monde du travail";



 $modalite = '';
 $listeModalite = get_the_terms(get_the_ID(), 'modalite');
 if($listeModalite != false){
	foreach($listeModalite as $modaliteItem){
		$modalite = $modalite.'<span class="modalite"> '.$modaliteItem->name.'</span>';
	}
 }else{
	 $modalite ='';
 }


$tags = "";
$list_tag = wp_get_post_tags(get_the_ID());
 foreach($list_tag as $tag){
	$tags = $tags.'<li class="attributes__item"><i class="icon-attributs">done</i><span>'.$tag->name.'</span></li>';
 }

$MAJ = get_post_datetime(get_the_ID(), 'modified', 'gmt')->setTimeZone(new DateTimeZone('America/Cayenne'));
$MAJ = ($MAJ != false) ? $MAJ->format('d/m/y à H:i') : '';

$sous_titre = get_taxonomy_value('formation_sous_titre');
$Description_video = get_taxonomy_value('formation_youtube_description');

$prix_intra = get_taxonomy_value('formation_prix_intra');
$prix_inter = get_taxonomy_value('formation_prix_inter');
$devis = get_taxonomy_value('formation_devis');
$reference = get_taxonomy_value('formation_reference');
$Date = get_taxonomy_value('formation_duree');
$taux_formateur = get_taxonomy_value('formation_taux_formateur');
$taux_qualite = get_taxonomy_value('formation_taux_qualite');
$taux_satisfaction = get_taxonomy_value('formation_taux_satisfaction');
$nbr_participant = get_taxonomy_value('formation_nbr_participant');

$formationNbrAvis = get_comment_count(get_the_ID())['all'];
 get_header() ?>


<div <?php tie_content_column_attr(); ?>>

	<?php
		/**
		 * TieLabs/before_the_article hook.
		 *
		 * @hooked tie_above_post_ad - 5
		 */
		do_action( 'TieLabs/before_the_article' );
	?>

	<article id="the-post" <?php tie_post_class( 'container-wrapper post-content', false, false, true ); ?>>


		<div class="entry-content entry clearfix" style="padding: 0px;">

			<?php
				/**
				 * TieLabs/before_post_content hook.
				 *
				 * @hooked tie_before_post_content_ad - 10
				 * @hooked tie_story_highlights - 20
				 */
				do_action( 'TieLabs/before_post_content' );
			?>

	<div class="product js-product-wrap wrapperProduct369860" data-productid="369860"> 
		<div class="product__header_contener " >
			<div class="product__header "  data-productid="369860">
				<div class="wrap">
					<div class="product__header-infos">
						<h1 class="product__title"> <?= get_the_title() ?> </h1>
						<h2 class="product__subtitle"><?= $sous_titre ?>
						</h2>
						<a href="#avis" class="product__rating rating js-product-scrollto">
							<div class="rating__image">
							<?php if(function_exists('taqyeem_get_score')) {
								taqyeem_get_score(); 
							} ?>

								
							</div>
							<div class="rating__count u-txt-blue-grey "> (<?= $formationNbrAvis?> avis) </div>
						</a>
						<ul class="product__attributes attributes">
							<li class="attributes__item "><img
									src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/picto-a-distance-plus-presentiel.html"
									alt="" loading="lazy">
									<span ><?= $modalite ?></span>
							</li>
							<?= $tags ?>
														
							<li  class="attributes__item tooltipstered" style="cursor: default;">
								<i class="icon-cpf"></i><span>QUALIOPI</span>
							</li>
							<li  class="attributes__item tooltipstered" style="cursor: default;">
								<i class="material-symbols-outlined">update</i><span><?= the_modified_date() ?></span>
							</li>
						</ul>
					</div>
					<div class="product__header-sidebar">
						<div class="product__ctas " >
							<a target="_blank">
								<img src="<?= $bannerImg['url'] ?>" >
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap">
			<div class="product__layout">
				<!-- volet sur le coté -->
				<div class="product__tabs ">
					
					<div class="product__tabs-content">
						<?php 
						if(true): ?>
						<div id="video" class="product__tabs-panel js-tab-content is-active">
							<div class="product__tabs-header "><span
									class="u-mb0 u-txt-light u-txt-semibold">Un petit apercu ?</span></div>
							<div class="product__tabs-sections">
								<div class="u-mts u-mbm u-txt-center">
									<span class="u-txt-grey">
										<?= $Description_video ?>
										
									<div>
										<div data-video-open="" data-embed-url="" class="product__video u-mtl">
										<?php rwmb_the_value( 'formation_embed_video' ) ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; 
						$videos = rwmb_meta( 'my_field_id' );
						if(rwmb_meta( 'my_field_id' ) != null): 
						?>
						<div id="video" class="product__tabs-panel js-tab-content is-active">
							<div class="product__tabs-header "><span
									class="u-mb0 u-txt-light u-txt-semibold">Un petit apercu ?</span></div>
							<div class="product__tabs-sections">
								<div class="u-mts u-mbm u-txt-center">
									<span class="u-txt-grey">
										<?= $Description_video ?>
										
									<div>
										<div data-video-open="" data-embed-url="" class="product__video u-mtl">
										<?php foreach ( $videos as $video ) : ?>
											<li><video src="<?= $video['src']; ?>"></li>
										<?php endforeach ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; 
						if(rwmb_meta( 'formation_pdf' ) != null): 
						?>
						<div id="pdf" class="product__tabs-panel js-tab-content is-active">
							<div class="product__tabs-header "><span
									class="u-mb0 u-txt-light u-txt-semibold">PLUS D’INFORMATIONS </span></div>
							<div class="product__tabs-sections">
								<div class="u-mts u-mbm u-txt-center">
									<span class="u-txt-grey">
										Ici vous retrouverez plus d'information <br/> sur cette formation
										<ul style="text-align: left">
											<li> <b>ORGANISATION</b> <br/> Nous nous adaptons à votre planning , à votre lieu </li>
											<li> <b>ACCESSIBILITE AUX PERSONNES HANDICAPÉES</b> <br/> « Les personnes atteintes de handicap souhaitant suivre cette formation sont invitées à nous contacter directement, afin d’étudier ensemble les possibilités de suivre la formation. » ( Lien renvoie vers les besoins spécifique ) </li>
											<li> <a href="projetforma.com/mediation/"><b>MEDIATION</b> </a></li>
										</ul>
										<br/>
										Documents :
									<div>
									<?php $files = rwmb_meta( 'formation_pdf' ); ?>
										<?php foreach ( $files as $file ) : ?>
											<li><a href="<?= $file['url']; ?>"><?= ucfirst(substr($file['name'], 0, strlen($file['name']) - 4)); ?></a></li>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						</div>
						<?php endif; 
					
						?>
						<div style="height: 10px; background: var(--main-bg-color)"></div>

						<div class="product__tabs-items">
							<?php if($prix_inter > 0):?>
								<a data-href="inter" onclick="tab_nav(this)" class="product__tabs-item js-tab-item is-active ">Chez Nous</a>
								<?php endif;
							if($prix_intra > 0):?>
								<a data-href="intra" onclick="tab_nav(this)" class="product__tabs-item js-tab-item <?= ($prix_inter > 0) ? : 'is-active' ?>">Chez Vous</a>
								<?php endif;
							if($devis == '1'):?>
								<a data-href="sur-mesure" onclick="tab_nav(this)" class="product__tabs-item js-tab-item <?= (($prix_inter <= 0) & ($prix_intra <= 0)) ?  'is-active': '' ?>">Sur Mesure</a>
								<?php endif;?>
						</div>
					</div>
							
					
					<div class="product__tabs-content">
						<?php if($prix_inter > 0):?>
						<div id="inter" class="product__tabs-panel is-active js-tab-content">
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
										<div class="u-txt-right"><span class="tt-3 u-txt-semibold"><?= $reference ?></span>
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
											<div class="tt-3 u-mbs"><?= $Date ?></div>
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
												id="price-with-margin"><strong><?= $prix_inter ?></strong> &nbsp;HT
											</span></div>
									</div>
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
						<?php endif;
						if($prix_intra > 0):?>
						<div id="intra" class="product__tabs-panel js-tab-content <?= ($prix_inter > 0) ? : 'is-active' ?>">
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
										<div class="u-txt-right"><span class="tt-3 u-txt-semibold"><?= $reference ?></span>
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
											<div class="tt-3 u-mbs"><?= $Date ?></div>
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
												id="price-with-margin"><strong><?= $prix_intra ?></strong> &nbsp;HT
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
									<div class="u-txt-center u-mbs cursor-pointer" ><a href="<?= get_site_url() . '/grille-tarifaire' ?>"><span
											class="u-txt-underline-on-hover">Grille tarifaire</span></a></div>
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
						<?php endif;
						if($devis == '1'):?>
						<div id="sur-mesure" class="product__tabs-panel js-tab-content <?= (($prix_inter <= 0) & ($prix_intra <= 0)) ?  'is-active': '' ?>">
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
						<?php else:
							if (($prix_inter <= 0) & ($prix_intra <= 0)):
								?> 
							<div id="sur-mesure" class="product__tabs-panel js-tab-content is-active ">
								<div class="product__tabs-header "><span
										class="u-mb0 u-txt-light u-txt-semibold">Indisponible</span></div>
								<div class="product__tabs-sections">
									<div class="u-mts u-mbm u-txt-center"><span class="u-txt-grey">
										Malheureusement nous ne sommes pas en mesure de vous communiquer les informations tarifaire de cette formation. <br>
										Cette thématique vous intéresse ? <br> Nous nous ferons un plaisir d'adapter notre formation a vos besoin !</span></div>
									<div class="u-mtm u-mbm"
										onclick="dataLayer.push({'event': 'genericEvent', 'eventCategory': 'Product', 'eventAction': 'Contact', 'eventLabel': 'Customized'})">
										<a href="http://127.0.0.1:5500/contact?mode=sur-mesure"
											class="cta-default cta-default--main cta-default--block u-txt-size-18"><span
												class="u-txt-bold">Nous contacter</span></a></div>
								</div>
							</div>
								<?php
							endif;
						endif;
						?>
						<hr class="u-hr">
						<div class="u-mt u-txt-center">
							<p class="u-txt-grey u-txt-size-16 u-mbs">Partager cette formation</p>
						</div>
						<div class="flex-container center-xs">
							
							<a class="emailSend"><i class="icon-mail"></i></a>
							
							
							<a onclick="copyToClipboard(this)" data-href="<?= get_permalink()?>"><div class="none">Lien copié!</div><i class="icon-link"></i>
							</a>
							<div style="margin-left: 5px; margin-right: 5px; padding-bottom: 5px"> | </div>
							<li class="list-social-icons menu-item custom-menu-link">
								<a href="#" class="follow-btn">
									<span class="tie-icon-plus" aria-hidden="true"></span>
									<span class="follow-text"><?php esc_html_e( 'Follow', TIELABS_TEXTDOMAIN ) ?></span>
								</a>
								<?php
									tie_get_social(
										array(
											'show_name' => true,
											'before'    => '<ul class="dropdown-social-icons comp-sub-menu">',
											'after'     => '</ul><!-- #dropdown-social-icons /-->'
										));
								?>
							</li><!-- #list-social-icons /-->
						</div>
					</div>
					
						
				</div>
				<div class="product__main">
					
					<div id="inner-nav-bar">
						<ul class="inner-nav" >
							<li id='cu' class="is-active nav-objectif" onclick=" nav_trigger(this)" data-href="cycle">
								<a href="">
									<span class="iconco-cible hidden-xs hidden-sm"></span><br class="hidden-xs hidden-sm">
									Formation                        
								</a>
							</li>
							<li class="nav-programme" onclick=" nav_trigger(this)" data-href="programme">
								<a href="">
									<span class="iconco-cible hidden-xs hidden-sm"></span><br class="hidden-xs hidden-sm">
									Programme                        
								</a>
							</li>
							<li class="nav-date" onclick=" nav_trigger(this)" data-href="dates">
								<a href="">
									<span class="iconco-calendar hidden-xs hidden-sm"></span><br class="hidden-xs hidden-sm">
									Dates
								</a>
							</li>
							<li class="nav-intervenants" onclick=" nav_trigger(this)" data-href="intervenants">
								<a href="">
									<span class="iconco-intervenant hidden-xs hidden-sm"></span><br class="hidden-xs hidden-sm">
									Intervenants
								</a>
							</li>
						</ul>
					</div>
					<?php the_content(); ?>


					
					<div id="dates" class="part-section" style="display: none;">
						<div class="wrap">
							<div id="sessions">
								<div data-xhr-url="/ajax/sessions?productId=369860&amp;" class="sessions js-sessions u-myl">
									<div class="sessions__head">
										<div class="sessions__title">
											<h2 class="tt-2">Dates et Délais d’accès</h2>
											<div class="pdb10 u-txt-red">Mise à jour le <?= $MAJ ?></div>
											<p>Les inscriptions doivent être réalisées au plus tard une semaine avant le début de la formation.</p>
										</div>
										
										
									</div>
									<div class="sessions__wrap js-sessions-content">
										<div class="sessions__content">
											
											<ul class="sessions__items" style=" margin: 0;"> 
												<!-- Liste des sessions  -->
												<li class="sessions__item" data-ville="A DISTANCE" style="list-style-type: none;"
													data-startat="2022-08-24 00:00:00" data-endat="2022-11-10 00:00:00">
													<div class="sessions__cols">
														<div class="sessions__col">
															<span class="u-txt-grey bt-flex bt-more ">Date à définir selon la demande et le nombre de participants </span>
															
														</div>
														
														<div class="sessions__col sessions_text"><span class="u-txt-session-available">P12 participants maximum</span>
																<div class="tooltip-help tooltip-help--right tooltipstered"
																	style="cursor: default;">
																	<div
																		class="tooltipster-base tooltipster-bases tooltipster-sidetip tooltipster-bottom tooltipster-fade">
																		<div class="tooltipster-box">
																			<div class="tooltipster-content">
																				<p>Date à définir selon la demande et le nombre de participants .</p>
																			</div>
																		</div>
																		<div class="tooltipster-arrow">
																			<div class="tooltipster-arrow-uncropped">
																				<div class="tooltipster-arrow-border"></div>
																				<div class="tooltipster-arrow-background"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</span></div>
														<div class="sessions__col">
															<div class="sessions__cta u-txt-center"><span>
															<a href="" >
																S'inscrire
																</a>
									</span>
															</div>
														</div>
													</div>
													<div id="sessions_item_2" class="sessions__details u-collapse">
														<div
															class="sessions__cols grid__cpf {% if product.isCpf != true %} notCpf {% endif %}">
															<div class="u-txt-left mgl15">
																<p class="u-txt-dark">Détail des dates <br> pour cette session :
																</p>
																<ul class="reset-list u-txt-grey u-txt-size-14">
																	<li>Du 24 août au 25 août 2022</li>
																	<li>Du 19 sept. au 20 sept. 2022</li>
																	<li>Du 13 oct. au 14 oct. 2022</li>
																	<li>Du 09 nov. au 10 nov. 2022</li>
																</ul>
															</div>
															<div class="u-txt-left">
																<div class="u-mt"><span
																		class="u-txt-grey location u-txt-size-14"><i
																			class="icon-marker"></i> Le lien de connexion à la
																		formation à distance sera envoyé au participant quelques
																		jours avant le début de sa formation. </span></div>
															</div>
															<div class="u-txt-left"></div>
															<div class="u-txt-left"></div>
														</div>
													</div>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div id="intervenants" class="part-section" style="display: none;">
						<div>
							<p>
							ProjetForMa s’appuie sur une équipe pédagogique composée de formateurs permanents auxquels se joignent des intervenants ponctuels spécialisés experts dans les domaines dans lesquels ils interviennent et issus du monde de l’entreprise avec une pratique avérée des métiers. Ils maitrisent tous la pédagogie des adultes et de l’alternance ainsi que l’individualisation des apprentissages dans un groupe d’apprenant. <br/>
							Pour vous accompagner efficacement  :
							</p>
						</div>
						<p>
							
							<?php 
							
							foreach(get_post_meta(get_the_ID(), 'formation_formateur') as $formateur_post){
								echo '<h3>'.get_the_title($formateur_post ).'</h3>';
								echo get_the_content( "", "", $formateur_post );
								echo "<hr>";
							}
							?>
						</p>
					</div>
					

					
					<?php
						/**
						 * TieLabs/after_post_content hook.
						 *
						 * @hooked tie_after_post_content_ad - 5
						 * @hooked tie_post_multi_pages - 10
						 * @hooked tie_post_source_via - 20
						 * @hooked tie_post_tags - 30
						 * @hooked tie_edit_post_button - 40
						 */
						do_action( 'TieLabs/after_post_content' );
					?>



					<?php
					/**
					 * TieLabs/after_post_entry hook.
					 *
					 * @hooked tie_mobile_toggle_content_button - 10
					 * @hooked tie_article_schemas - 10
					 * @hooked tie_post_share_bottom - 20
					 */
					do_action( 'TieLabs/after_post_entry' );
					?>
					
				</div>
			</div>
		</div>
	</div>
	<style>
		div[class*="links-modal"] {
			position: fixed;
			/* Stay in place */
			z-index: 10;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		.tooltipster-bases {
			width: 600px;
			transform: translateX(-48.5%);
			top: 22px;
			transition: 0.3s;
			z-index: 999999;
		}

		.tooltipster-bases .tooltipster-arrow {
			left: 50%;
		}

		.tooltip-help:hover .tooltipster-bases {
			opacity: 1;
			pointer-events: auto;
		}

		.modal-content {
			background-color: #fefefe;
			margin: 15% auto;
			/* 15% from the top and centered */
			padding: 30px;
			border: 1px solid #888;
			width: 80%;
			/* Could be more or less, depending on screen size */
			position: relative;
			max-width: 735px;
			box-sizing: border-box;
		}

		.modal-content a {
			text-decoration: underline;
		}

		/* The Close Button */
		.close {
			color: #d20000;
			float: right;
			font-weight: bold;
			position: absolute;
			top: 0;
			right: 0;
			font-size: 12pt;
			padding: 8px 10px;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		.sessions__item-modal button {
			text-decoration: underline;
		}

		.sessions__item-expand span {
			white-space: pre;
		}

		.grid__cpf {
			display: grid;
			grid-template-columns: 1fr;
			grid-column-gap: 20px;
		}

		.sessions__cols span.location div {
			display: inline-block;
			padding-inline: 5px;
		}

		@media screen and(min-width: 980px) {
			.sessions__col {
				width: 18%;
				padding: 0 11px;
			}

			.grid__cpf {
				grid-template-columns: 260px 1fr;
			}

			.grid__cpf.notCpf {
				grid-template-columns: 315px 1fr;
			}
		}
	</style>
	
	


</article><!-- #the-post /-->

<?php
/**
* TieLabs/before_post_components hook.
*
* @hooked tie_after_post_entry_ad - 5
*/
do_action( 'TieLabs/before_post_components' );
?>

<div class="post-components">

<?php
/**
 * TieLabs/post_components hook.
 *
 * @hooked tie_post_about_author - 10
 * @hooked tie_post_newsletter - 20
 * @hooked tie_post_next_prev - 30
 * @hooked tie_related_posts - 40
 * @hooked tie_post_comments - 50
 * @hooked tie_related_posts - 60
 */
do_action( 'TieLabs/post_components' );
?>

</div><!-- .post-components /-->

<?php
/**
* TieLabs/after_post_components hook.
*/
do_action( 'TieLabs/after_post_components' );
?>

</div><!-- .main-content -->

<?php
/**
* TieLabs/after_post_column hook.
*
* @hooked tie_post_fly_box - 10
*/
do_action( 'TieLabs/after_post_column' );

?>

	
	
	
<?php get_footer() ?>