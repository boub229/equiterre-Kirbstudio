<?php 
/**
 * 	Template Name: Équipe
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
		<section id='équipe'>
  <div class="hero">
    <div class="fruit">
        <div class="image_nouvelle">
        <div class="opacity"></div>
          <div class="titre_nouvelle">
            <h2>Équipe</h2>
          </div>
          <img  src="<?php echo get_template_directory_uri();?>/img/Équipe/equipe.jpg"  alt="">
        </div>
    </div>
  </div>
  <div class="equipe-container">
    <div class="titre_equipe"><h2>Direction Générale</h2></div>
    <div class="equipe-content">
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Colleen" type="button"><img src="/sources/médias/Équipe/colleen thorpe.png" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Colleen" type="button"><p>Colleen Thorpe <br>Directrice Générale<br>conférencière</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Marie" type="button"><img src="/sources/médias/Équipe/1.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Marie" type="button"><p>Marie Normand <br>Conseillère et adjointe<br>à la direction générale</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Marilyne" type="button"><img src="/sources/médias/Équipe/Maryline Tremblay Coutu.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Marilyne" type="button"><p>Marilyne Tremblay Coutu <br>Conseillère et adjointe<br>à la direction générale</p></div>
      </div>
    </div>
    <div class="titre_equipe"><h2>Administration</h2></div>
    <div class="equipe-content-2">
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Nicole" type="button"><img src="/sources/médias/Équipe/nicole bergeron.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Nicole" type="button"><p>Nicole Bergeron <br>Directrice<br>Finances et administration</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Laurence" type="button"><img src="/sources/médias/Équipe/2.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Laurence" type="button"><p>Laurence Prost <br>Analyste comptable</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Patricia" type="button"><img src="/sources/médias/Équipe/patricia chourio.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Patricia" type="button"><p>Patricia Chourio <br>Technicienne comptable</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Boivin" type="button"><img src="/sources/médias/Équipe/3.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Boivin" type="button"><p>Patricia Boivin <br>Technicienne comptable</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Thibault" type="button"><img src="/sources/médias/Équipe/thibault gautier.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Thibault" type="button"><p>Thibault Gautier <br>Conseiller en ressources<br>humaines</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Phil" type="button"><img src="/sources/médias/Équipe/4.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Phil" type="button"><p>Philippe Mercier <br>Agent administratif<br>Ressources humaines et<br>régie interne</p></div>
      </div>
      <div class="flex-equipe">
        <div class="img-equipe" data-bs-toggle="modal" data-bs-target="#Jeanne" type="button"><img src="/sources/médias/Équipe/5.jpg" alt=""></div>
        <div class="txt-equipe" data-bs-toggle="modal" data-bs-target="#Jeanne" type="button"><p>Jeanne Bilodeau <br>Agente administrative<br>Ressources humaines</p></div>
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
        <h2>UN PARCOURS INTERNATIONAL, UNE VISION GLOBALE</h2>
        <p>Multilingue, Colleen Thorpe est diplômée en gestion de l'environnement et en journalisme. Elle a étudié et habité pendant 5 ans à Berlin lors de la chute du mur, où elle a pu travailler pour CBC comme assistante à la réalisation. Comme journaliste, elle a également travaillé pour Global Television Network, CFCF Television et CBC Television, en couvrant de nombreux sujets d’importance.</p>
        <h2>GESTIONNAIRE IMPLIQUÉE DEPUIS 10 ANS CHEZ ÉQUITERRE</h2>
        <p>Colleen s’est spécialisée en responsabilité sociale des entreprises et en consommation responsable. Chez Équiterre, avant d’occuper le poste de directrice des programmes éducatifs et des services, elle a été chargée de projet principale, responsable du service conseil et des conférences, conférencière elle-même, formatrice et porte-parole.<br>
          Colleen a collaboré à l’élaboration de nombreux plans de développement durable tant pour des entreprises que pour des municipalités et des institutions. Depuis son entrée chez Équiterre en 2008, elle a accompagné diverses organisations dont la STM, le Groupe Pages Jaunes, Desjardins, Sid Lee ainsi que les municipalités de Laval, Saint-Lambert, l’arrondissement de Ville-Marie et les CSSS de l’Ouest-de-l’Île.<br>          
          Elle a également mis sur pied et coordonné des projets relatifs aux transports durables, à la consommation responsable, au compostage en milieu scolaire et en approvisionnement alimentaire responsable.<br>          
          Fréquemment interpellée par les médias francophones et anglophones, Colleen possède une connaissance approfondie des multiples enjeux de l’écoresponsabilité, ainsi qu’une habileté à les vulgariser pour faciliter le passage à l’action.</p>
        <h2>VIVRE LES ENJEUX SOCIAUX ET ENVIRONNEMENTAUX AU QUOTIDIEN</h2>
        <p>Colleen incarne les idéaux qu’elle véhicule dans sa vie professionnelle. Cycliste 4 saisons, elle transmet ses valeurs à ses grands enfants avec persévérance et détermination.<br> 
          Colleen est également membre du conseil d’administration du Centre des services partagés du Québec, membre du conseil SAM (Système alimentaire montréalais) et a été membre du conseil d’administration de l’espace de concertation sur les pratiques d’approvisionnement responsable.<br>
          Sa famille a également récemment participé à deux projets de parrainage de réfugiés syriens.</p>
        <h2>EXTRAITS D’ENTREVUES AVEC COLLEEN THORPE</h2>
        <p>Entrevue télévisée, <a href="https://ici.radio-canada.ca/nouvelle/1162174/changement-climatique-rechauffement-alimentation-assiette-agriculture-transport">« Le contenu de votre assiette risque de changer avec le réchauffement climatique »</a>, Émission l'Épicerie de Radio-Canada, 4 avril 2019<br>
          Entrevue radiophonique, <a href="https://ici.radio-canada.ca/ohdio/premiere/emissions/pour-faire-un-monde/episodes/429394/audio-fil-du-vendredi-15-mars-2019/12">«Les jeunes à la rescousse du climat »</a>,  Pour faire un monde de Radio-Canada, 15 mars 2019<br>
          Entrevue écrite, <a href="https://www.ledevoir.com/societe/environnement/541587/les-ges-dans-l-assiette">« Les GES dans l’assiette, un pas plus facile à franchir que d’autres »</a> Le Devoir, 17 novembre 2018<br>
          Entrevue écrite, <a href="https://plus.lapresse.ca/screens/e22d9f79-d418-4f21-9f84-f48238fe298a__7C___0.html">« De petits et de grands gestes pour la planète »</a> La Presse, 22 avril 2019</p>
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
        <p>Arrivée au Canada en 2011, Marie a débuté en philanthropie au sein de l'association Mécénat Chirurgie Cardiaque comme assistante chef de projet.<br>
          Après des études en tant que chargée d'affaires en ventes de solutions durables, elle a enrichi son parcours dans le domaine de la vente et de la publicité.<br>         
          C'est à la suite de plusieurs implications comme bénévole chez Équiterre qu'elle a rejoint l’équipe au poste de conseillère en développement philanthropique en avril 2019, puis comme conseillère et adjointe à la direction en juin 2020.</p>
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
        <p>Titulaire d'un baccalauréat en sciences biologiques (spécialisation Écologie, environnement et évolution) de l'Université de Montréal, Marilyne a ensuite fait un détour professionnel d'une quinzaine d'années dans divers domaines : ventes & marketing relationnel, soutien administratif et ressources humaines, entre autres.<br>
          Depuis son arrivée chez Équiterre à l'automne 2020, elle offre un soutien quotidien à l'équipe de direction et au département des communications.</p>
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
        <p>Titulaire d’un baccalauréat en comptabilité de HEC Montréal, Nicole cumule plus de 20 ans d'expérience comme directrice finances et administration dans le domaine dans des organismes de bienfaisance de divers secteurs : Les Grands Ballets Canadiens de Montréal, Le Club ⅔,Oxfam-Québec, la Fondation québécoise du cancer, avant de se joindre en 2016 à l’équipe d’Équiterre.<br><br>
          Nicole possède une forte connexion avec la nature, en particulier les montagnes, où elle se retrouve le plus souvent possible. Elle prend soin de pratiquer des sports de plein air (vélo, randonnée en montagne, ski de fond) et d’aller voir plusieurs spectacles pour maintenir son équilibre.</p>
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
        <p>Laurence compte une expérience de 12 ans, d’abord à titre d'auditrice auprès d’une clientèle variée (entreprises) puis en tant qu’analyste financière dans le secteur public (cégep).<br>
          Maman de jeunes enfants, elle se sent interpelée par l’enjeu environnemental et les impacts de notre consommation sur notre santé.<br>
          Essayant de changer le monde un petit geste à la fois dans la sphère personnelle, Laurence n’a pu résister à la possibilité de rejoindre la grande famille d’Équiterre en août 2017, en tant qu’analyste comptable.</p>
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
        <p>Détentrice d’un baccalauréat en administration des affaires, Patricia cumule 12 ans d’expérience en comptabilité et administration, des piliers qui font d’elle une ressource fiable et fort appréciée au sein de l’équipe du service comptable, qu’elle a rejoint en mai 2017.</p>
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
        <p>Forgée à la pression des cuisines pendant plus de 12 années en tant que cuisinière et sous-chef et qu’adjointe dans le domaine de l’ingénierie, Patricia joint l’équipe d’Équiterre en avril 2019 parce que l’envie de changer le monde un petite geste à la fois l’interpelle. L’alimentation locale, biologique et durable sont l’un des sujets qui lui tient à coeur. Son grand sens de l’organisation et des priorités et sa main de fer ont fait d’elle une adjointe aux communications hors pair et fort appréciée de ses collègues toujours débordés par mille urgences, qu’elle a su décharger avec autonomie et brio.<br>
          Débordante d’énergie, Patricia poursuivait des études à temps partiel aux HEC et a
          ensuite joint l’équipe de comptabilité, comme technicienne comptable. De débutante en
          avril 2020, sa courbe d’apprentissage a été vertigineuse et elle est maintenant un atout
          majeur pour l’équipe.</p>
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
        <p>Membre de l'Ordre des conseillers en ressources humaines agréés et fort d’une expérience variée dans les secteurs des nouvelles technologies, du développement durable et de l’aide sociale, Thibault conjugue au quotidien sa passion pour les ressources humaines, l'innovation et la planète au sein de l’équipe d’Équiterre depuis 2015.<br>
          Avec son aide, Équiterre est devenu le premier organisme à but non lucratif québécois à être certifié Employeur de choix (Canadian Nonprofit Employer of Choice), une distinction prestigieuse qui reconnaît les employeurs qui offrent des conditions et un milieu de travail exceptionnels à travers le Canada.<br>       
          Thibault ne compte pas s’arrêter là et travaille ardemment à rendre les conditions et espaces de travail plus flexibles, agréables et efficaces pour les employés, les stagiaires et la centaine de bénévoles qui gravitent autour de l’organisation.</p>
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
        <p>Philippe est agent administratif pour les ressources humaines et la régie interne.</p>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis gravida neque convallis a cras semper auctor. Condimentum mattis pellentesque id nibh. Enim diam vulputate ut pharetra sit amet aliquam id. Placerat duis ultricies lacus sed turpis tincidunt id. Ac orci phasellus egestas tellus.
           Nulla facilisi nullam vehicula ipsum a arcu. Leo duis ut diam quam nulla. Enim sit amet venenatis urna. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Volutpat sed cras ornare arcu dui vivamus arcu felis bibendum. Est ultricies integer quis auctor elit sed vulputate. Potenti nullam ac tortor vitae purus. Ac felis donec et odio pellentesque diam volutpat commodo sed.</p>
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
}
.titre_equipe h2{
    font-size: 4vw;
    color: white;
    padding: 2%;
}
.img-equipe{
    width: 20vw;
    margin-left: 0.5vw;
}
.txt-equipe{
    margin-left: 0.5vw;
    font-size: 1.8vw;
    color: white;
}
		</style>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>