<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Plan d'Analyse Métier</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/src/redist/when.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/graphics.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/mapimage.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/mapdata.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/areadata.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/areacorners.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/scale.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/tooltip.js"></script>

		<script type="text/javascript">

		$(document).ready(function() {

			$('img').mapster({
				noHrefIsMask: false,
				fillOpacity: 0,
				mapKey: "group",
				strokeWidth: 2,
				clickNavigate:true,
				stroke:true,
				strokeColor: 'F88017',
				render_select: {
					fillColor: 'adadad',
					fillOpacity: 0.5

				},
				areas: [
					{
						key: 'acc',
						stroke:true,
						fill:false,
						strokeColor:'005b82',
						fillOpacity: 5
					},
				]
			});
		});
		</script>
		<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
	  </head>

	<body>
	<div class="img_header">
	   <div style="position:absolute;z-index:1">
		  <img src="<?php echo base_url()?>assets/img/haut2.png" usemap="#image-map">
			<map name="image-map" >
				<area target="" alt="" title="" href="<?php echo base_url()?>index.php" group="acc" coords="60,35,60,153,124,204,195,148,199,35" shape="poly">
			</map>
	   </div>
	   <div class="ban_texte_header">
			<center>
			<div class="texte_header">
				<h1 class = "title"> BA & Chef de projet</h1>
				<span class="trait_vert"></span>
			</center>
			<p class = "subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nisl lorem. Fusce quis dolor mauris. Suspendisse tortor ipsum, lacinia sollicitudin orci consectetur, auctor porttitor turpis.</p>
			</div>
		</div>
	</div>
		<div class="pages_content">
			<div style="position:relative;z-index:1">
			<p style="padding:10px;"><a class="return_link" href="javascript:history.go(-1)">Retour au processus projet</a></p>
				<h1 style="margin-top:-50px;"class="title_phase"style="position:absolute;">Plan d'analyse métier</h1>
				<div class="content_phases"style="position:relative;z-index:1">
					<h4 style="padding:3px;"class="title_section"><img src="<?php echo base_url()?>assets/img/goal.png">Objectifs</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
						<p> Organiser et coordonner les efforts des BA et des parties prenantes</p>
					</div>
					<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/clipboard.png">Activités</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
						<ul>
							<li>Définir la méthode d'analyse métier</li>
								<p> La méthode d'analyse métier décrit le processus général lors duquel se dérouleront les diverses activités de l’analyse métier dans une initiative donnée, le moment où les tâches seront exécutées et la façon dont elles le seront, les techniques utilisées et les livrables attendus.
							<li>Planifier les intéractions avec les parties prenantes</li>
								<p> Consiste à effectuer une analyse des parties prenantes pour identifier toutes les parties prenantes concernées et analyser leurs caractéristiques. Les résultats de l'analyse sont ensuite utilisés pour définir les meilleures approches de collaboration et de communication pour l'initiative et planifier de manière appropriée les risques des parties prenantes.</p>
							<li>Déterminer le mode de fonctionnement</li>
								<p> Le BA veille à ce qu'un processus de gouvernance soit en place et clarifie toute ambiguïté. Un processus de gouvernance identifie les décideurs, les processus et les informations nécessaires pour que les décisions soient prises. Un processus de gouvernance décrit également comment les approbations et les décisions de priorisation sont prises pour les exigences.</p>
							<li>Planifier la gestion des informations</li>
								<p> Les informations de l'analyse métier sont composées de tous les informations que l'analyste métier suscitent, créent, compilent et diffusent au cours de l'analyse métier. La gestion de l'information permet de s'assurer que les informations d'analyse métier sont organisées de manière fonctionnelle et utile, sont facilement accessibles aux personnes appropriées et sont stockées pour la durée nécessaire.</p>
							<li>Définir des pistes d'amélioration de la performance</li>
								<p> Pour surveiller et améliorer les performances de l'analyse métier, il est nécessaire d'établir des mesures de performance, d'effectuer une analyse de la performance, et d'identifier les actions préventives, correctives ou de développement nécessaires. Une fois que les améliorations potentielles de la performance sont identifiées, elles deviennent des directives pour la prochaine fois qu'une tâche est exécutée.</p>
						</ul>
					</div>
					<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/list1.png">Livrables</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
					</div>
					<h5 class="sub_livrables">Liens vers le template de livrable</h5>
					<h5 class="sub_livrables">Guides</h5>
					<h5 class="sub_livrables">Liens vers le BABOK</h5>
					<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/reunion.png">Parties prenantes et leurs rôles</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
					</div>
					<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/settings.png">Techniques</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
						<ul>
							<li><a href="http://www.toollity.com/index.php/2016/04/21/conduire-une-interview/"target="_blank">Conduire une interview<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/05/11/le-brainstorming/"target="_blank">Le Brainstorming<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/04/14/cartographie-des-parties-prenantes/"target="_blank">Cartographie des parties prenantes<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/04/06/matrice-des-parties-prenantes-ou-matrice-dinfluence/"target="_blank">Matrice d'influence<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/03/24/raci/"target="_blank">Le RACI<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/04/20/diagramme-de-causes-a-effet-ou-diagramme-dishikawa-diagramme-en-aretes-de-poisson-ou-5m/"target="_blank">Diagramme de causes à effets<a/></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
