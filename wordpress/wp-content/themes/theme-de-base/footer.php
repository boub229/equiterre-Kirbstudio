<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
  * 	Template Name: Footer
  * * Template Post Type: post, page, footer, partenaires
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>

      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-xs-12 text-center text-sm-start colonne1">
                <a class="logo-footer" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/medias/logo.PNG"></a>
                <a class="reseau-footer" href="https://www.facebook.com/equiterre/"><img  class="reseaux_sociaux" src="<?php echo get_template_directory_uri();?>/medias/fb2.png"></a>
                <a class="reseau-footer" href="https://www.instagram.com/equiterre_ong/?hl=fr-ca"><img  class="reseaux_sociaux" src="<?php echo get_template_directory_uri();?>/medias/insta2.png"></a>
                <a class="reseau-footer" href="https://twitter.com/equiterre?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img class="reseaux_sociaux" src="<?php echo get_template_directory_uri();?>/medias/twitter2.png"></a>


                <?php 
                $partenaires = new WP_Query('post_type=partenaire');


            while ($partenaires->have_posts()) : $partenaires->the_post();
              ?>

<a class="partenaire-footer" href="<?php the_field('liens_partenaires'); ?>"> <img src="<?php the_post_thumbnail('large'); // Vignette large du post ?>" ></a>


            <?php endwhile; // Fermeture de la boucle
            wp_reset_postdata(); 
            ?>



                <?php 
                $partenaires2 = new WP_Query('post_type=partenaire2');


            while ($partenaires2->have_posts()) : $partenaires2->the_post();
              ?>

<a class="partenaire2-footer" href="<?php the_field('liens_partenaires'); ?>" >
 <img src="<?php the_post_thumbnail('large'); // Vignette large du post ?>">
</a>


            <?php endwhile; // Fermeture de la boucle
            wp_reset_postdata(); 
            ?>


                <p class="copyright">© Équiterre KirbStudio</p>
              </div>
              <div class="col-sm-6 col-xs-12 text-center colonne2">
                <a class="button-don" href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/?_ga=2.86176735.613308119.1637355142-258796891.1637355142">Faites un don!</a>
                <p class="p-footer" id="text-footer">
                  Téléphone: 514-522-2000 <br>
                  <br>
                  <a class="p-footer" href="https://goo.gl/maps/uo4jxH8JsrZiT4zy6">Maison du développement durable 50, rue Sainte-Cathernie Ouest Bureau 340 Montréal (Québec) H2X 3V4CANADA</a><br>
                  <br>
                </p>
                <a class="a-footer" href="mailto:info@equiterre.org">info@equiterre.org</a>
              </div>
          </div>
      </div>

</footer>
<style>

.colonne1 .partenaire2-footer{
  position:absolute;
  transform: scale(0.2);
  height:425px;

}

.colonne1 a.partenaire2-footer{
  height: 425px;
  display: flex;
  align-items: flex-end;
  z-index: 4;
}
</style>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
