<?php 
/**
 * 	Template Name: Services
 * * Template Post Type: post, page, services
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
		<section id='services'>
    <div class="hero">
      <div class="fruit">
          <div class="image_nouvelle">
          <div class="opacity"></div>
            <div class="titre_nouvelle">
            <h2> <?php the_field('titre_des_pages'); ?> </h2>
            </div>
            <img src="<?php the_field('img_hero'); ?>" alt="">
          </div>
      </div>
  </div>

<div class='cartes_services'>
  
<div class='cartes2'>
  <div class="opacity_détail1"></div>
  <div class="titre_cartes1">
    <h2>École ouverte</h2>
  </div>
  <img  src="<?php echo get_template_directory_uri();?>/img/détail_services/service1.png" class='img-nouvelles-détail' >
</div>
<div class='cartes2'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    Paniers bio</h2>
  </div>
  <img src="/sources/médias/détail_services/service2.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes2'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    Épluche ta ville pour manger local</h2>
  </div>
  <img src="/sources/médias/détail_services/service3.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes2'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    Exigez local</h2>
  </div>
  <img src="/sources/médias/détail_services/service4.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes2'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>   
    Travailler sur une ferme</h2>
  </div>
  <img src="/sources/médias/détail_services/service5.jpg"  class='img-nouvelles-détail' alt="">
</div>
<div class='cartes2'>
  <div class="opacity_détail"></div>
  <div class="titre_cartes"><h2>
    Recettes</h2>
  </div>
  <img src="/sources/médias/détail_services/service6.png"  class='img-nouvelles-détail' alt="">
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

		.cartes2 {
    position: relative;
    width: 40vw;
    height: 30vw;
    margin: 10px;
    overflow: hidden;
}

.cartes_services{
	position: relative;
    display: flex;
    height: auto;
    justify-content: center;
    flex-wrap: wrap;
}
		</style>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>