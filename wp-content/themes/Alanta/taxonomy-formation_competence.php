<?php

/**
 * A Simple Category Template
 */

use formAdult\formation;
require_once 'component/formation_handler.php';
get_header();
?>

<div <?php tie_content_column_attr(); ?>>

		<?php if ( have_posts() ) : ?>

			<header class="entry-header-outer container-wrapper">
				<?php

					do_action( 'TieLabs/before_archive_title' );

					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description entry">', '</div>' );

					do_action( 'TieLabs/after_archive_title' );

                    
				?>
			</header><!-- .entry-header-outer /-->

           
            <div class="mag-box full-width-img-news-box full-overlay-title center-overlay-title">
			<div class="container-wrapper">
				<div class="mag-box-container clearfix">
                    <ul>
                        <?php 
                        $custom_terms = get_terms('formation_competence');

                        foreach($custom_terms as $custom_term) {
                            wp_reset_query();
                            $args = array('post_type' => 'formation',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'formation_competence',
                                        'field' => 'slug',
                                        'terms' => 'accueil-et-reception',
                                    ),
                                ),
                             );
                             
                             $loop = new WP_Query($args);
                             if($loop->have_posts()) {   
                                echo "<ul>";                    
                                while($loop->have_posts()) : $loop->the_post();
                                function get_taxonomy_value($tag){
                                    return get_post_meta(get_the_ID(), $tag, true);
                                 }
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
                                    ?>
                                    <li>
                                        <a href="<?= get_permalink() ?>" class="wp-container-7 wp-block-columns">
                                            <div class="wp-container-1 wp-block-column">
                                                <?= get_the_title() ?>
                                            </div>
                                            <div class="wp-container-1 wp-block-column">
                                                <?= taqyeem_get_score() ?>
                                            </div>
                                            <div class="wp-container-1 wp-block-column">
                                                A partir de <b><?= get_taxonomy_value('formation_prix_intra'); ?> € HT </b>
                                            </div>
                                        </a>
                                        <div class="formation-archive">
                                            <p><?= $sous_titre = get_taxonomy_value('formation_sous_titre'); ?></p>
                                        </div>
                                    </li>
                                    <?php
                                endwhile;
                                echo "</ul>";
                             }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            </div>

			<?php
		// If no content, include the "No posts found" template
		else :
            ?>
            <header class="entry-header-outer container-wrapper">
				<?php

					do_action( 'TieLabs/before_archive_title' );

					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description entry">', '</div>' );

					do_action( 'TieLabs/after_archive_title' );

                    
				?>
			</header><!-- .entry-header-outer /-->

            <div class="mag-box full-width-img-news-box full-overlay-title center-overlay-title">
			<div class="container-wrapper">
                Nous proposont actuellement pas de formation dans ce domaine actuellement. Mais nous serions heureux de construire avec vous une formation qui vous convienne dans :"<?=get_the_archive_title() ?>"
            </div>
            </div>
			<?php

		endif;

		?>

	</div><!-- .main-content /-->

<?php get_footer(); ?>