<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    
    <title>Processus Projet</title>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
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
					{
						key: 'EO',
						stroke: true,
						fill:false,
						strokeColor: 'E55819',
						strokeWidth: 3
					},
					{
						key: 'EF',
						stroke: true,
						fill:false,
						strokeColor:'92D050',
						strokeWidth: 3
					},
					{
						key: 'PAM',
						strokeColor:'016798',
						stroke: true,
						fill:false,
						strokeWidth: 3
					},
					{
						key: 'DEM',
						strokeColor:'B2B1B3',
						stroke: true,
						fill:false,
						strokeWidth: 3
					},
				]
			});
		});
		</script>
	  </head>
<body>
<div class="img_header">
   <div style="position:absolute;z-index:1">
      <img src="<?php echo base_url()?>assets/img/haut2.png" usemap="#image-map">
		<map name="image-map">
			<area target="" alt="" title="" href="<?php echo base_url()?>index.php" group="acc" coords="60,35,60,153,124,204,195,148,199,35" shape="poly">
		</map>
   </div>
   <div class="ban_texte_header">
		<center>
		<div class="ban_texte_header">
			<h1 class = "title"> BA & Chef de projet</h1>
			<span class="trait_vert"></span>
		</center>
		<!-- <p class = "subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nisl lorem. Fusce quis dolor mauris. Suspendisse tortor ipsum, lacinia sollicitudin orci consectetur, auctor porttitor turpis.</p> -->
		</div>
	</div>
</div>
<div class="content_global">
	<div style="position:absolute;z-index:1">
		<h1 class="title_phase"style="position:absolute;">Processus projet</h1>
		<p style="padding:30px;"></p>
		<div class="content_phases"style="position:relative;z-index:1">
			<img style="width:80%;" usemap="#details-map-1" src="<?php echo base_url()?>assets/img/puzzle.png" />
			<map name="details-map-1">
				<area shape="rect" group="EO" coords="106,249,304,446" href="<?php echo base_url()?>index.php/Eo" target="_blank" />
				<area shape="rect" group="EF" coords="313,250,513,450" href="<?php echo base_url()?>index.php/Ef" target="_blank" />
				<area shape="rect" group="PAM" coords="520,249,721,449" href="<?php echo base_url()?>index.php/Pam" target="_blank" />
				<area shape="rect" group="DEM" coords="730,249,928,450" href="<?php echo base_url()?>index.php/Dem" target="_blank" />
			</map>
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
