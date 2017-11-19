<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Etude d'opportunité</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/redist/when.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/graphics.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/mapdata.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/mapimage.js"></script>
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
				<h1 style="margin-top:-50px;"class="title_phase"style="position:absolute;">Etude d'opportunités</h1>
				<div class="content_phases"style="position:relative;z-index:1">
					<h4 style="padding:3px;"class="title_section"><img src="<?php echo base_url()?>assets/img/goal.png">Objectifs</h4>
					<div>
					<span><span class="traits_section"></span></span>
					<span><span class="traits_section"></span></span>
					<p>Décrire les travaux d'analyse métier qui doivent être effectués pour collaborer avec les parties prenantes afin d'identifier un besoin d'importance stratégique ou tactique (le besoin de l'entreprise), permettre à l'entreprise de répondre à ce besoin et aligner la stratégie résultante pour le changement avec les stratégies de niveau inférieur.</p>
				</div>
				<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/clipboard.png">Activités</h4>
				<div>
					<span><span class="traits_section"></span></span>
					<span><span class="traits_section"></span></span>
					<ul>
						<li>Décrire l'opportunité</li>
						<li>Analyser l'existant</li>
							<p> Le point de départ de tout changement est une compréhension de la raison pour laquelle la modification est nécessaire. Le changement potentiel est déclenché par des problèmes ou des opportunités qui ne peuvent être résolues sans altérer l'état actuel. Les analystes métiers travaillent pour aider les parties prenantes à changer les choses en explorant et en articulant les besoins de l'entreprise qui stimulent le désir de changer.</p>
						<li>Définir l'état cible</li>
							<p> Définir les buts et les objectifs qui démontreront que les besoins de l'entreprise ont été satisfaits et définir les éléments de l'entreprise qui doivent être modifiés pour atteindre ces buts et objectifs. Les analystes métier travaillent pour s'assurer que l'état futur de l'entreprise est bien défini, qu'il est réalisable avec les ressources disponibles et que les principaux intervenants ont une vision de consensus partagée sur le résultat.</p>
						<li>Analyser les risques</li>
							<p> Comprendre les incertitudes entourant le changement, considérer l'effet que ces incertitudes peuvent avoir sur la capacité à fournir de la valeur grâce à un changement, et recommander des actions pour résoudre les risques le cas échéant. L'évaluation des risques consiste à les analyser et à les gérer. Les risques peuvent être liés à l'état actuel, à un état futur souhaité, à un changement lui-même, à une stratégie de changement ou à toute tâche exécutée par l'entreprise.</p>
						<li>Définir la stratégie de changement</li>
							<p> Effectuer une analyse des écarts entre l'état actuel et cible, évaluer les options pour parvenir à la cible, et recommander l'approche la plus pertinente pour atteindre l'état cible ainsi que les états de transition qui pourraient être nécessaires.</p>
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
						<li><a href="http://www.toollity.com/index.php/2016/05/11/modelisation-dun-processus-simple-en-bpmn/"target="_blank">Modéliser un processus<a/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
