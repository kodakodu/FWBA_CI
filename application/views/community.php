<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Communauté</title>

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
<div class="pages_content"style="width:80%">
	<div style="position:absolute;z-index:1;top:280px;">
		<img src="<?php echo base_url()?>assets/img/bas_page_vide.png"  border="0" alt="" u>
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
