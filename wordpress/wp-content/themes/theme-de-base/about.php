<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>

		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		<section class="a-propos" id='a_propos'>
    <div class="hero">
      <div class="fruit">
          <div class="image_nouvelle">
          <div class="opacity"></div>
            <div class="titre_détail_nouvelle">
              <h2> <?php the_field('titre_des_pages'); ?> </h2>
              <h3>Équiterre est un des principaux organismes environnementaux du Québec avec, en 2018 :</h3>
              <div class="a-porpos-liste">
              <ul>
                <li>130 000 sympathisants, 25 000 membres, 200 bénévoles, 23 stagiaires et 53 employés créatifs et dévoués</li>
                <li>125 000 fans sur les réseaux sociaux</li>
                <li>Plus d’un million d’utilisateurs uniques de son site web.</li>
                <li>1 670 parutions médiatiques</li>
                <li>450 demandes d’entrevues</li>
                <li>40 rencontres de responsables politiques au provincial et 80 au fédéral.</li>
              </ul> 
            </div>
            </div>
            
            <img src="<?php the_field('img_hero'); ?>" alt="">
          </div>
      </div>
  </div>
  
<div class="a-propos-container">
  <h3 class="titre-liste">Mission</h3>
  <div class="a-propos-content">
    
    <p> <?php the_field('composante_de_description_de_base_1'); ?> </p>
  </div>
  <h3 class="titre-liste">Vision</h3>
  <div class="a-propos-content">
    
    <p> <?php the_field('composante_de_description_de_base_2'); ?> </p>
  </div>
  <h3 class="titre-liste">Stratégie</h3>
  <div class="a-propos-content">
    
    <p> <?php the_field('composante_de_description_de_base_3'); ?> </p>
  </div>
</div>
</section>
	</article>
  <style>
		.img-nouvelles-détail{
			position: relative;

		}

		.hero{
			width:85%;
			height: 100%;
    		position: relative;
    		margin-left: auto;
    		margin-right: auto;
		}

    .titre_détail_nouvelle{
      position: absolute;
      padding:10px;
      color:white;
    }

   

		
		</style>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>