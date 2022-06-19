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
                        
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        //Display Posts code here
                                <h2><?php the_title() ;?></h2> //Display the title of the post
                                    <?php the_post_thumbnail(); ?> //Display the post thumbnail AKA featured image
                                    <?php the_excerpt(); ?> //Display excerpt of the post
                        <?php endwhile; else : ?> //End the while loop
                                            <p><?php _e( 'No Posts To Display.' ); ?></p>
                        <?php endif; ?> //end If statement
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