<?php

/**
 * A Simple Category Template
 */

use formAdult\formation;
require_once 'component/formation_handler.php';
get_header();

function get_taxonomy_value($tag){
	return get_post_meta(get_the_ID(), $tag, true);
 }
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
                        <li>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <a href="<?= get_permalink() ?>" >
                                <div class="tax_list">
                                    <div>
                                        <h2><?php the_title() ;?></h2> 
                                    </div>

                                    
                                    <?php the_post_thumbnail(); ?>
                                    <div class="wp-container-7 wp-block-columns">
                                        <div class="wp-container-1 wp-block-column">
                                            <?= get_the_title() ?>
                                        </div>
                                        <div class="wp-container-1 wp-block-column">
                                            <?= taqyeem_get_score() ?>
                                        </div>
                                        <div class="wp-container-1 wp-block-column">
                                            A partir de <b><?= get_taxonomy_value('formation_prix_intra'); ?> € HT </b>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="formation-archive">
                                    <p  style="margin: 15px; text-align: center;">
                                        <h5> <?= $sous_titre = get_taxonomy_value('formation_sous_titre'); ?></h5>  
                                    </p>
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                            </li>
                            <?php endwhile; else : ?>
                                <p><?php _e( 'No Posts To Display.' ); ?></p>
                        <?php endif; ?>  
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