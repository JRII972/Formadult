<div id="dates" class="part-section" style="display: none;">
						<div class="wrap">
							<div id="sessions">
								<div data-xhr-url="/ajax/sessions?productId=369860&amp;" class="sessions js-sessions u-myl">
									<div class="sessions__head">
										<div class="sessions__title">
											<h2 class="tt-2">Dates et villes</h2>
											<div class="pdb10 u-txt-red">Mise à jour le <?= the_modified_date() ?> </div>
										</div>
										
										
									</div>
									<div class="sessions__wrap js-sessions-content">
										<div class="sessions__content">
											
											<ul class="sessions__items" style=" margin: 0;"> 
												<!-- Liste des sessions  -->
												<?php foreach( $attributes['sessions'] as $inner ): ?>
												<li class="sessions__item" data-ville="A DISTANCE" style="list-style-type: none;"
													data-startat="<?php echo date_i18n( 'j F Y', strtotime( $inner['debut'] ) ); ?>" data-endat="<?php echo date_i18n( 'j F Y', strtotime( $inner['fin'] ) ); ?>">
													<div class="sessions__cols">
														<div class="sessions__col">
															<span class="u-txt-grey bt-flex bt-more ">Du <?php echo date_i18n( 'j F', strtotime( $inner['debut'] ) ); ?> au <?php echo date_i18n( 'j F Y', strtotime( $inner['fin'] ) ); ?></span>
															
														</div>
														<div class="">
															<div class="sessions__price"><strong><?= $inner['prix'] ?> € HT</strong></div>
														</div>
														<div class="sessions__col sessions_text"><span class="u-txt-session-available"> <?= $inner['commentaire'] ?> </span>
																<div class="tooltip-help tooltip-help--right tooltipstered"
																	style="cursor: default;">
																	<div
																		class="tooltipster-base tooltipster-bases tooltipster-sidetip tooltipster-bottom tooltipster-fade">
																		<div class="tooltipster-box">
																			<div class="tooltipster-content">
																				<p><?= $inner['complement'] ?></p>
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
															<div class="sessions__cta u-txt-center"><a href="<?= get_site_url().'/contact' ?>"><span data-checkyear="true"
																	
																	data-href="https://www.cegos.fr/espace-client/inscription"
																	class="cta-default cta-default--main">S'inscrire</span></a>
															</div>
														</div>
													</div>
												</li>
											  <?php endforeach; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					