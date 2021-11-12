<?php 
/**
 * 	Template Name: Accueil
 *  Template post type: image_service
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
                <h2 class="titre_articles_noir">Événement-bénéfice 2021</h2>
                <p class="description_articles_noir"> Équiterre vous invite à participer à son événement-bénéfice 2021 qui <br> portera sur le thème « Économie circulaire : les emplois de l'avenir ».</p>
                <button class="button-savoir-plus">En savoir plus</button>
            </div>
            
            <div class="swiper-slide"> 
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel2_vector.png">
              <div class="opacity"></div>
                <h2 class="titre_articles_noir">Nouvelle pétition : exigeons des <br>biens durables et réparables !</h2>
                <p class="description_articles_noir"> Un ordinateur qui rend l’âme après un an, un écran de cellulaire qui se fissure au moindre choc, une laveuse<br> qui n’essore plus… et tout un casse-tête pour celles et ceux qui ont la ténacité de vouloir les faire réparer! </p>
                <button class="button-savoir-plus">En savoir plus</button>
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel3_vector.png">
                <div class="opacity"></div>
                <h2 class="titre_articles_gros">Le pouvoir des sols : une feuille de route au profit <br> des agriculteurs et de la résilience climatique</h2>
                <p class="description_articles">Dans un rapport dévoilé le 1er mars 2021, Équiterre et son partenaire, la Fondation Greenbelt, démontrent comment des <br>sols en santé peuvent permettre aux fermes canadiennes de jouer un rôle central pour affronter la crise climatique et...</p>
                <button class="button-savoir-plus">En savoir plus</button>
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel4_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles">Dossier complet : L’enjeu du dézonage agricole au Québec</h2>
              <p class="description_articles">Les terres agricoles québécoises sont des ressources rares et précieuses. Pourtant, la pression à laquelle elles sont assujetties est alarmante. <br>Malgré la Loi sur la Protection du territoire et des activités agricoles, adoptée il y a 40 ans, nos terres...</p>
              <button class="button-savoir-plus">En savoir plus</button>
            </div>
            
            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel5_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_noir">Des outils par et pour les agriculteurs-trices!</h2>
              <p class="description_articles_noir">Dans le cadre de la Semaine canadienne de l’environnement, Équiterre et Coordination services-conseil, avec le soutien financier du ministère de <br>l’Agriculture, des Pêcheries et de l’Alimentation du Québec, lancent les Vitrines en santé et...</p>
              <button class="button-savoir-plus">En savoir plus</button>
            </div>

            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel6_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_gros">Comprendre la hausse des camions légers <br> au Canada afin de renverser la tendance</h2>
              <p class="description_articles">Alors que le Canada est engagé dans l’Accord de Paris et s’affiche comme un leader climatique à l’international, <br>le pays demeure l’un des plus grands pollueurs par habitant.e dans le monde et n’est pas en voie...</p>
              <button class="button-savoir-plus">En savoir plus</button>
            </div>

            <div class="swiper-slide">
              <img class="img-swiper" src="<?php echo get_template_directory_uri();?>/img/Accueil/carrousel7_vector.png">
              <div class="opacity"></div>
              <h2 class="titre_articles_noir">Rapport annuel d’Équiterre 2020</h2>
              <p class="description_articles_noir">2020 nous a beaucoup appris. Elle a changé nos perspectives, ravisé nos priorités et nous a fait comprendre que, oui, des changements<br> profonds et systémiques sont possibles. Ils sont même plus que possibles, ils sont nécessaires.</p>
              <button class="button-savoir-plus">En savoir plus</button>
            </div>
            
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

    </div>
    </section>

  <section>
  <div class="bloc_services">
      <div class="service1">
        <div class="color-1">
        </div>
        <p class="text_cartes">École ouverte</p>
      </div>

      <div class="service2">
        <div class="color-2">
        </div>
        <p class="text_cartes">Paniers bio</p>
      </div>
      <div class="service3">
        <div class="color-3">
        </div>
        <p class="text_cartes">Épluche ta ville pour manger local</p>
      </div>
    </div>
  </section>
  <section>
    <h1>Témoignage</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-sm-12 text-center">
          <div class="img-témoignages">
          <?php echo get_the_post_thumbnail();?>
          </div>
        </div>

        <div class="col-xl-6 col-sm-12 text-center text-sm-start text_témoignages">
          <p><?php the_field('text_temoignage'); ?> </p>
        </div>
      </div>
    </div>
  </section>
  <section>
  <h1>Nouveautés</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-sm-12 text-center">
        <img class="img-nouvelles" src="sources/médias/détail_nouvelles/nouvelle1.jpg">
        <h2 class="text-nouvelles">Conférence vedette de 2019 - Obsolescence : quel rôle pour le consommateur</h2>
        <button class="button-savoir-plus">En savoir plus</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center">
        <img class="img-nouvelles" src="sources/médias/détail_nouvelles/nouvelle2.jpg">
        <h2 class="text-nouvelles">Les péripéties d'un fermier de famille : un livre à savourer dès maintenant</h2>
        <button class="button-savoir-plus">En savoir plus</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center">
        <img class="img-nouvelles" src="sources/médias/détail_nouvelles/nouvelle3.png">
        <h2 class="text-nouvelles">Des fermiers d'excellence dans notre réseau!<br> ㅤ</h2>
        <button class="button-savoir-plus">En savoir plus</button>
        
      </div>

    </div>
  </div>
</section>
<section>
  <h1>Dons</h1>
  <div class="container-don">
    <div class="btn-don">
      <div class="text-don">Faites un don!</div>
    </div>
  </div>
</section>
</article>
<style>
    .img-témoignages img{
      width: 100%;
      height: 100%;
      text-align: center;
    }

</style>

<?php 

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>