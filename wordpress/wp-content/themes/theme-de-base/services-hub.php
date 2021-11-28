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
  <div class="cartes_services">

 

 
</div>


</section>




	</article>
	<style>
		.img-nouvelles-détail img{
			position: relative;
      width: 100%;
      height:100%;
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

<script>
 
 fetch("/equiterre-Kirbstudio/wordpress/wp-json/wp/v2/service?_embed&orderby=date&order=asc")
 
 .then(response => response.json())
 
   .then(data => {console.log(data)
 
       let html = "";
 
       let fetchDivService = document.querySelector('.cartes_services')
 
       for (let i = 0; i < 6; i++) {
 
 
          let link = data[i].link;
 
          let title = data[i].title.rendered;
 
          let image = data[i]._embedded['wp:featuredmedia'][0].source_url;
 
 
 
          html += 
 
                 `
 <a class='cartes2' href="${link}"> 
   <div class="opacity_détail"></div>
   <div class="titre_cartes"><h2>
   ${title}</h2>
   </div>
   <img src="${image}"  class='img-nouvelles-détail' alt="">
 </a>`;         
          }
     console.log(fetchDivService)
     fetchDivService.innerHTML = html;
 
       });
   </script>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>