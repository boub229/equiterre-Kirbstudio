<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		<section>
    <h1>Témoignage</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-sm-12 text-center">
          <img class="img-témoignages" src="<?php the_field('temoignage_photo') ?>">
        </div>

        <div class="col-xl-6 col-sm-12 text-center text-sm-start text_témoignages">
          <p><?php the_field('text_temoignage'); ?></p>
        </div>
      </div>
    </div>
  </section>

  
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>