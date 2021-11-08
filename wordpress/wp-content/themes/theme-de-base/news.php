<?php 
/**
 * 	Template Name: Nouvelles
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


<section id='nouvelles'>
  <div class="hero">
      <div class="fruit">
          <div class="image_nouvelle">
          <div class="opacity"></div>
            <div class="titre_nouvelle">
              <h2>Nouvelles</h2>
            </div>
            <img src="/sources/médias/détail_nouvelles/fruit.jpg" alt="">
          </div>
      </div>
  </div>

<div class='cartes_nouvelles'>
<div class='cartes'>
  <div class="opacity_détail1"></div>
  <div class="titre_cartes1"><h2>
    CONFÉRENCE VEDETTE DE
    2019 - OBSOLESCENCE :
    QUEL RÔLE POUR LE
    CONSOMMATEUR?</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle1.jpg"  class='img-nouvelles-détail' alt="">
  
</div>
<div class='cartes'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    FAITES L'EXPÉRIENCE DE LA SEULE COURSE 100% ÉCORESPONSABLE!</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle2.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    LA CRISE DES PESTICIDES AU QUÉBEC : À QUAND LA TRANSPARENCE?</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle3.png"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    4 ACTIONS POUR SAUVER #NOTREHIVER !</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle4-1.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>   
    GESTE DU MOIS DE FÉVRIER : CE 14 FÉVRIER... BOUDONS LA ROSE!</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle5-1.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    VULGARISATION SCIENTIFIQUE, CHANGEMENTS CLIMATIQUES ET ALIMENTATION EN ARCTIQUE : LA 9E BOURSE LAURE WARIDEL DÉCERNÉE À MARIANNE FALARDEAU-CÔTÉ</h2>
  </div>
  <img src="/sources/médias/détail_nouvelles/nouvelle6-1.jpg"  class='img-nouvelles-détail' alt="">
</div>
<button class='bouton_nouvelles'>Voir plus de nouvelles</button>
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