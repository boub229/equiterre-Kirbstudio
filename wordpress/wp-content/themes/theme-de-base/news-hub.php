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

		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		
<section id='nouvelles'>
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

<div class='cartes_nouvelles'>


</div>


<div class='btn_nouvelles'>


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

<style>

.titre_cartes{
  z-index: 4;
  position: relative;
  color:white;
}
.opacity_détail{
  width: 100%;
    height: 100%;
    opacity: 40%;
    background-color: #184864;
    position: absolute;
    z-index: 2;
    }

    .cartes:nth-child(1) .opacity_détail{
      background-color: #e23d77;
    }

    .btn_nouvelles{
      display:flex;
      justify-content:center;
    }

  

</style>

<script>
function bouton_news(nbr) {
  fetch(`/equiterre-Kirbstudio/wordpress/wp-json/wp/v2/nouvelle?_embed&orderby=date&order=asc&per_page=${nbr}`)

  .then(response => response.json())

    .then(data => {console.log(data)

        let html = "";

        let fetchDivNouvelle = document.querySelector('.cartes_nouvelles')

        for (let i = 0; i < nbr; i++) {


           let link = data[i].link;

           let title = data[i].title.rendered;

           let image = data[i]._embedded['wp:featuredmedia'][0].source_url;



           html += 

                  `
  <a class='cartes' href="${link}">
    <div class="opacity_détail"></div>
    <div class="titre_cartes"><h2>
    ${title}</h2>
    </div>
    <img src="${image}"  class='img-nouvelles-détail' alt="">
  </a>`;         
           }
      console.log(fetchDivNouvelle)
      fetchDivNouvelle.innerHTML = html;

        });
} 

bouton_news(6); 

    </script>

