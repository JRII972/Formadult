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

            <?php 
                $taxonomy = "formation_competence";
                $terms = get_terms([
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                ]);
            ?>
            <div class="mag-box full-width-img-news-box full-overlay-title center-overlay-title">
			<div class="container-wrapper">
				<div class="mag-box-container clearfix">
                    <ul>
                        <?php 
                        foreach ($terms as $term){
                            ?> 
                            <li class="rounded-list">
                            <a href="<?= get_site_url()?>/competence/<?= $term->slug ?>">
                            
                            <?php
                            echo $term->name;
                            ?> 
                            <div class="formation-archive">
                                <?= $term->description ?>
                            </div>
                            </a></li> <?php
                          }
                        ?>
                    </ul>
                </div>
            </div>
            </div>

			<?php
		// If no content, include the "No posts found" template
		else :
			TIELABS_HELPER::get_template_part( 'templates/not-found' );

		endif;

		?>

	</div><!-- .main-content /-->

<?php get_footer(); ?>