<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Dossier d'exigences Métiers</title>

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
				<h1 style="margin-top:-50px;"class="title_phase"style="position:absolute;">Dossier d'exigences Métiers</h1>
				<div class="content_phases"style="position:relative;z-index:1">
					<h4 style="padding:3px;"class="title_section"><img src="<?php echo base_url()?>assets/img/goal.png">Objectifs</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
						<p>Etablir la collaboration entre l’analyste et les parties prenantes pour recueillir, comprendre leurs besoins et préoccupations, situés dans le contexte de leur travail et dans la situation actuelle de l’entreprise. Par l’élicitation, l’analyste s’assure de bien comprendre les besoins réels de base des parties prenantes, plutôt que leurs souhaits énoncés ou superficiels.</p>
					</div>
					<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/clipboard.png">Activités</h4>
					<div>
						<span><span class="traits_section"></span></span>
						<span><span class="traits_section"></span></span>
						<ul>
							<li>Spécifier les exigences</li>
								<p>Décrire un ensemble d'exigences ou de conceptions à l'aide des techniques analytiques.</p>
							<li>Vérifier les exigences</li>
								<p>Vérifier que les exigences sont cohérentes, de bonne qualité et suffisamment détaillées pour être utilisables par un autre intervenant.</p>
							<li>Valider les exigences</li>
								<p>Valider que l’ensemble d’exigences définies répond aux enjeux et aux objectifs métier.</p>
							<li>Structurer les exigences</li>
								<p>Structurer toutes les exigences et les conceptions de manière à ce qu'elles soient conformes aux objectifs et globalement cohérentes.</p>
							<li>Définir les options de solution</li>
								<p>Identifier, explorer et décrire les différents moyens permettant de répondre au besoin.</p>
							<li>Analyser la valeur potentielle et recommander la solution</li>
								<p>Evaluer la valeur métier de chaque solution potentielle et comparer les différentes options, y compris les compromis, afin de recommander celle qui offre la plus grande valeur globale ainsi que la stratégie de changement associée.</p>
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
						<ul>
							<li><a href="http://www.toollity.com/index.php/2016/04/21/conduire-une-interview/"target="_blank">Conduire une interview<a/></li>
							<li><a href="http://www.toollity.com/index.php/2016/01/28/rediger-une-exigence-unitaire-attributs-dune-exigence-snowcard/"target="_blank">Rédiger une exigence unitaire</a></li>
							<li><a href="http://www.toollity.com/index.php/2016/03/17/la-matrice-de-kano/"target="_blank">Prioriser les exigences avec la Matrice de Kano</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
  </body>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109039991-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-109039991-1');
	</script>
</html>
