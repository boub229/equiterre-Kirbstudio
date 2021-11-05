<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>

      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-xs-12 text-center text-sm-start colonne1">
                <a class="logo-footer" href="index.html"><img src="/sources/maquettes_graphiques/medias/logo.PNG"></a>
                <a class="reseau-footer" href="https://www.facebook.com/equiterre/"><img  class="reseaux_sociaux" src="<?php echo get_template_directory_uri();?> /medias/Acceuil/fb2.png"></a>
                <a class="reseau-footer" href="https://www.instagram.com/equiterre_ong/?hl=fr-ca"><img  class="reseaux_sociaux" src="/sources/maquettes_graphiques/medias/insta2.png"></a>
                <a class="reseau-footer" href="https://twitter.com/equiterre?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img class="reseaux_sociaux" src="/sources/maquettes_graphiques/medias/twitter2.png"></a>
                <a class="partenaire-footer" href="https://www.vireauvert.org/"><img src="/sources/maquettes_graphiques/medias/partenaire1.png"></a>
                <a class="partenaire2-footer" href="https://uneplaneteunvote.ca/"><img src="/sources/maquettes_graphiques/medias/partenaire2.png"></a>
                <p class="copyright">© Équiterre KirbStudio</p>
              </div>
              <div class="col-sm-6 col-xs-12 text-center colonne2">
                <a class="button-don" href="don.html">Faites un don!</a>
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


<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
