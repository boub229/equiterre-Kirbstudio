<?php 
/**
 * 	Template Name: Histoire
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
		<section id='histoire'>
  <div class="hero">
    <div class="fruit">
        <div class="image_détail_nouvelle">
        <div class="opacity_hero_détail"></div>
          <div class="titre_détail_nouvelle">
            <h2>Histoire</h2>
          </div>
          <img src="/sources/médias/histoire/histoire.jpg" alt="">
        </div>
    </div>
  </div>
  <div class="a-propos-container">

    <div class="a-propos-content">
      <p>Rio de Janeiro, 1992 : au Sommet de la Terre, des jeunes des quatre coins de la planète se retrouvent et se concertent sur des valeurs communes de solidarité et de respect de l’environnement. Parmi eux, quelques Québécois reviennent de Rio avec pour projet de créer une organisation citoyenne capable de proposer des solutions concrètes aux problèmes engendrés par la pollution, l’industrialisation à grande échelle et l’exploitation des travailleurs du Sud.<br><br>
        Un organisme voit ainsi le jour en 1993, sous le nom ASEED : Action pour la solidarité, l’équité, l’environnement et le développement. Il obtient le statut d’organisme à but non lucratif en 1995 et prend officiellement le nom Équiterre en 1998.<br><br>
        Depuis ses débuts, Équiterre regroupe des passionnés de divers champs d’expertise. Avec le concours des citoyens, des organisations et des gouvernements, ils développent des projets dans les domaines de l’alimentation, du transport, du commerce équitable, de l’énergie durable, de la consommation responsable et de la lutte aux changements climatiques.</p>
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
		</style>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>