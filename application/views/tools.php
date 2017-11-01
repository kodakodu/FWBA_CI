<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
	<title>Accueil</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.min.css.css" rel="stylesheet">

	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/redist/when.js"></script>
	<script type="text/javascript" src="../assets/js/core.js"></script>
	<script type="text/javascript" src="../assets/js/graphics.js"></script>
	<script type="text/javascript" src="../assets/js/mapimage.js"></script>
	<script type="text/javascript" src="../assets/js/mapdata.js"></script>
	<script type="text/javascript" src="../assets/js/areadata.js"></script>
	<script type="text/javascript" src="../assets/js/areacorners.js"></script>
	<script type="text/javascript" src="../assets/js/scale.js"></script>
	<script type="text/javascript" src="../assets/js/tooltip.js"></script>

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
					key: 'kitacc',
					stroke: false,
					altImage: '../assets/img/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'overview',
					stroke: false,
					altImage: '../assets/img/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'tools',
					altImage: '../assets/img/bas_hover.png',
					stroke: false,
					fillOpacity: 3
				},
				{
					key: 'comm',
					stroke: false,
					altImage: '../img/assets/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'deli',
					stroke: false,
					altImage: '../img/assets/bas_hover.png',
					fillOpacity: 3
				},
			]
		});
	});
	</script>
</head>
<body>
<div class="img_header">
   <div style="position:absolute;z-index:1">
      <img src="../assets/img/haut2.png">
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
		<h1 class="title_phase"style="position:absolute;">Outils</h1>
		<p style="padding:30px;"></p>
		<div class="content_phases"style="position:relative;z-index:1">
			<div>
				<span><span class="traits_section"></span></span>
				<span><span class="traits_section"></span></span>
				<ul>
					<li><a href=""target="_blank">Lexique<a/></li>
					<li><a href=""target="_blank"><a/></li>
					<li><a href=""target="_blank"><a/></li>
					<li><a href=""target="_blank"><a/></li>
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
