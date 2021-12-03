<?php 
/**
 * 	Template Name: Équipe
 * Template Post Type: post, page, membres_equipes, membres_equipes_admins
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
		<section id='équipe'>
    <div class="hero">
      <div class="fruit">
          <div class="image_nouvelle">
          <div class="opacity"></div>
            <div class="titre_nouvelle">
             <h2> <?php the_field('titre_des_pages'); ?> </h2>
             <h3> <?php the_field('composante_de_description_de_base_1'); ?> </h3>
            </div>
            <img src="<?php the_field('img_hero'); ?>" alt="">
            
          </div>
      </div>
  </div>

  <div class="equipe-container">
    
    <div class="titre_equipe"><h2><?php the_field('equipe_direction'); ?></h2></div>
    <div class="equipe-content">

  <?php
      $membres_arguments = array( // 👈 Tableau d'arguments
        'post_type' => 'membre_equipe',
        'order' => 'asc'
      );
  $membres = new WP_Query($membres_arguments);
  while ($membres->have_posts()) : $membres->the_post(); 
?>
        <div class="flex-equipe">
       <div class="img-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>"> <?php the_post_thumbnail('large');?></div>
       <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>" > <?php the_field('nom'); ?></div>
       <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>" > <?php the_field('poste'); ?></div>
        </div>
        
        
        <?php endwhile; // Fermeture de la boucle
wp_reset_postdata(); 
?>

    </div>

    <div class="titre_equipe"><h2>Administration</h2></div>
    <div class="equipe-content-2">

    <?php
      $membres_admin_arguments = array( // 👈 Tableau d'arguments
        'post_type' => 'membre_equipe_admin',
        'order' => 'asc'
      );
  $membres_admin = new WP_Query($membres_admin_arguments);
  while ($membres_admin->have_posts()) : $membres_admin->the_post(); 
?>
        <div class="flex-equipe">
       <div class="img-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>" > <?php the_post_thumbnail('large');?></div>
       <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>" > <?php the_field('nom'); ?></div>
       <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="<?php the_field('modal') ?>" > <?php the_field('poste'); ?></div>
        </div>
        
        
        <?php endwhile; // Fermeture de la boucle
wp_reset_postdata(); 
?>
      </div>
    </div>
  </div>
      

<!-- Modal -->
<div class="modal fade" id="Colleen" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Colleen Thorpe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2> <?php the_field('titre_modal1'); ?></h2>
        <p><?php the_field('texte_modal1'); ?></p>
        <h2> <?php the_field('titre_modal2'); ?></h2>
        <p><?php the_field('texte_modal2'); ?></p>
        <h2> <?php the_field('titre_modal3'); ?></h2>
        <p><?php the_field('texte_modal3'); ?></p>
        <h2> <?php the_field('titre_modal4'); ?></h2>
        <p><?php the_field('texte_modal4'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Marie" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marie Normand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal5'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Marilyne" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marilyne Tremblay Coutu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal6'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Nicole" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nicole Bergeron</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal7'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Laurence" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laurence Prost</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal8'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Patricia" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patricia Chourio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal9'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Boivin" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patricia Boivin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal10'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Thibault" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thibault Gautier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal11'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Phil" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Philippe Mercier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal12'); ?></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Jeanne" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jeanne Bilodeau</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php the_field('texte_modal13'); ?></p>
      </div>
    </div>
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

		.equipe-content{
    display: flex;
}
.equipe-content-2{
    display: flex;
    flex-wrap: wrap;
}
.flex-equipe{
    display: flex;
    flex-direction: column;
    margin-left: 10px;
    margin-right: 10px;
    flex-wrap:nowrap;
}
.titre_equipe h2{
    font-size: 4vw;
    color: white;
    padding: 2%;
}
.img-equipe img{
    width: 100%;
    margin-left: 0.5vw;
    height: 100%;
}
.txt-equipe{
    margin-left: 0.5vw;
    font-size:1.8vw;
    color: white;
    width: 100%;   
}

.modal-content{
  color: black;
  cursor: pointer;
}




		</style>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>