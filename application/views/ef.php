<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Etude de faisabilité</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/redist/when.js"></script>
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
				<h1 style="margin-top:-50px;"class="title_phase"style="position:absolute;">Etude de faisabilité</h1>
				<div class="content_phases"style="position:relative;z-index:1">
					<h4 style="padding:3px;"class="title_section"><img src="<?php echo base_url()?>assets/img/goal.png">Objectifs</h4>
					<div>
					<span><span class="traits_section"></span></span>
					<span><span class="traits_section"></span></span>
					<p>D(le besoin de l'entreprise), permettre à l'entreprise de répondre à ce besoin et aligner la stratégie résultante pour le changement avec les stratégies de niveau inférieur.</p>
				</div>
				<h4 class="title_section"><img src="<?php echo base_url()?>assets/img/clipboard.png">Activités</h4>
				<div>
					<span><span class="traits_section"></span></span>
					<span><span class="traits_section"></span></span>
					<ul>
						<li>Evaluer la performance de la solution</li>
							<p>Déterminer la méthode la plus appropriée pour évaluer la performance d'une solution, y compris son alignement sur les enjeux et les objectifs de l'entreprise. Et effectuer l'évaluation.</p>
						<li>Analyser les critères de performance évalués</li>
							<p>Examiner les informations de performance d'une solution afin de comprendre la valeur qu'elle fournit à l’entreprise et aux parties prenantes, et déterminer si elle répond aux besoins de l'entreprise.</p>
						<li>Evaluer les limites de la solution</li>
							<p>Etudier les limites de la solution pouvant entraver toute sa potentialité de répondre au besoin de l’entreprise.</p>
						<li>Recommander des actions pour augmenter la valeur de solution</li>
							<p>Identifier et définir les actions que l’entreprise peut réaliser pour augmenter la valeur délivrée par la solution.</p>
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
