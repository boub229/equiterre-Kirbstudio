<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

?>


	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
   



    <section>
      <div class="swiper-container" id='index'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel1_vector.png">
              <div class="opacity"></div>
                <h2 class="titre_articles_noir"><?php the_field('titre_accueil1'); ?></h2>
                <p class="description_articles_noir"><?php the_field('soustitre_accueil1'); ?></p>
                
            </div>
            
            <div class="swiper-slide"> 
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel2_vector.png">
              <div class="opacity"></div>
                <h2 class="titre_articles_noir"><?php the_field('titre_accueil2'); ?></h2>
                <p class="description_articles_noir"><?php the_field('soustitre_accueil2'); ?> </p>
                
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel3_vector.png">
                <div class="opacity"></div>
                <h2 class="titre_articles_gros"><?php the_field('titre_accueil3'); ?></h2>
                <p class="description_articles"><?php the_field('soustitre_accueil3'); ?></p>
                
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel4_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles"><?php the_field('titre_accueil4'); ?></h2>
              <p class="description_articles"><?php the_field('soustitre_accueil4'); ?></p>
              
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel5_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_noir"><?php the_field('titre_accueil5'); ?></h2>
              <p class="description_articles_noir"><?php the_field('soustitre_accueil5'); ?></p>
              
            </div>

            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel6_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_gros"><?php the_field('titre_accueil6'); ?></h2>
              <p class="description_articles"><?php the_field('soustitre_accueil6'); ?></p>
              
            </div>

            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel7_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_noir"><?php the_field('titre_accueil7'); ?></h2>
              <p class="description_articles_noir"><?php the_field('soustitre_accueil7'); ?></p>
              
            </div>
            
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

    </div>
    </section>

  <section>
  <div class="bloc_services">
  <?php
  $services_arguments = array( // 👈 Tableau d'arguments
    'post_type' => 'service',
    'posts_per_page' => 3,
    'orderBy' => 'date',
    'order' => 'asc'
  );
  $services = new WP_Query($services_arguments);
  while ($services->have_posts()) : $services->the_post(); 
?>

<a  href="<?php the_field('liens'); ?>" class="service1">
      
        <?php the_post_thumbnail('large'); // Vignette large du post ?>
        <div class="color-1">
        </div>
        <p class="text_cartes" ><?php the_title(); ?></p>
        
</a>
      

<?php endwhile; // Fermeture de la boucle
wp_reset_postdata(); 
?>
    
  </section>
  <section>
    <h1>Témoignage</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-sm-12 text-center">
          <div class="img-témoignages">
          <img src="<?php echo get_template_directory_uri();?>/img/Accueil/personne_témoignages.jpg">
          </div>
        </div>

        <div class="col-xl-6 col-sm-12 text-center text-sm-start text_témoignages">
          <p>D’ici 2050, Équiterre aura contribué à l’émergence de solutions sur le terrain, à la transformation des normes sociales et à l’adoption de politiques publiques permettant de concrétiser de nouvelles façons de se nourrir,
           produire, consommer et se déplacer qui sont sobres en carbone, compatibles avec les écosystèmes et la justice sociale, et conçues à l’échelle de nos territoires et de leurs communautés. </p>
        </div>
      </div>
    </div>
  </section>
  <section>
  <h1>Nouveautés</h1>
  <div class="container-fluid">
    <div class="row">
      <?php
      $nouvelles_arguments = array( // 👈 Tableau d'arguments
        'post_type' => 'nouvelle',
        'posts_per_page' => 3,
        'orderBy' => 'date',
        'order' => 'asc'
      );
  $Nouvelles = new WP_Query($nouvelles_arguments);
  while ($Nouvelles->have_posts()) : $Nouvelles->the_post(); 
?>
<div class="col-lg-4 col-sm-12 text-center">
  <div class="img-nouvelles">
    </div>
        
        <?php the_post_thumbnail('large'); // Vignette large du post ?>
        <p class="text-nouvelles" ><?php the_title(); ?></p>
        <a href="<?php the_field('liens'); ?>">
        <button class="button-savoir-plus">En savoir plus</button>
        </a>
        
       
        
        
    </div>
     

<?php endwhile; // Fermeture de la boucle
wp_reset_postdata(); 
?>

        
        
      </div>
        
      </div>
</section>
<section>
  <h1>Dons</h1>
  <div class="container-don">
    <a class="btn-don" href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/?_ga=2.86176735.613308119.1637355142-258796891.1637355142" >
      <div class="text-don" >Faites un don!</div>
    </a>
  </div>
</section>
</article>
<style>
    .img-témoignages img{
      width: 100%;
      height: 100%;
      text-align: center;
    }

    .service1 img{
      top:0px;
      right:0px;
      position: absolute;
      width:100%;
      height:100%;
    }

    .service1:nth-child(1) .color-1{
      background-color: #F47B28;
    }

    .service1:nth-child(2) .color-1{
      background-color: #4EA5D9;
    }

    .service1:nth-child(3) .color-1{
      background-color: #FF206E;
    }

    
    .img-nouvelles{
      width: 375px;
		}

    .row>*{
      padding-right: calc(var(--bs-gutter-x) * .0) !important; 
     padding-left: calc(var(--bs-gutter-x) * .0) !important;
    }

</style>
<script>
  const play = document.querySelector('.btn-don');

play.addEventListener('click', function() {
  gsap.timeline()
    .fromTo('.btn-don', {scale: 1.1, duration: 0.3, backgroundColor: 'white', ease: "ease-in-out"},
                        {scale: 1, backgroundColor: 'white', ease: "ease-in-out"})
    .to('.text-don', {scale: 1, duration: 0.1, color: '#4EA5D9', ease: "ease-in-out"},)
});
  </script>



<?php 


get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>

