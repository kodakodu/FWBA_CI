<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
	<title>Accueil</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

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
					key: 'kitacc',
					stroke: false,
					altImage: '<?php echo base_url()?>assets/img/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'overview',
					stroke: false,
					altImage: '<?php echo base_url()?>assets/img/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'tools',
					altImage: '<?php echo base_url()?>assets/img/bas_hover.png',
					stroke: false,
					fillOpacity: 3
				},
				{
					key: 'comm',
					stroke: false,
					altImage: '<?php echo base_url()?>assets/img/bas_hover.png',
					fillOpacity: 3
				},
				{
					key: 'deli',
					stroke: false,
					altImage: '<?php echo base_url()?>assets/img/bas_hover.png',
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
      <img src="<?php echo base_url()?>assets/img/haut2.png">
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
<div class="accueil_content">
	<div style="position:absolute;z-index:1">
		<img src="<?php echo base_url()?>assets/img/bas.png"  border="0" alt="" usemap="#shapes_Map">
		<map name="shapes_Map">
		    <area target="_self" alt="" title="Livrables" href="http://vps313166.ovh.net/FWBA_CI/index.php/Deliverables" group="deli" coords="567,381,102" shape="circle">
			<area target="_self" alt="" title="Kit d'accueil" href="http://vps313166.ovh.net/FWBA_CI/index.php/Kitacc" group="kitacc" coords="204,255,108" shape="circle">
			<area target="_self" alt="" title="Processus projet" href="http://vps313166.ovh.net/FWBA_CI/index.php/Overview" group="overview"  coords="506,111,116" shape="circle">
			<area target="_self" alt="" title="Outils" href="http://vps313166.ovh.net/FWBA_CI/index.php/Tools" group="tools"  coords="1512,154,94" shape="circle">
			<area target="_self" alt="" title="Communauté" href="http://vps313166.ovh.net/FWBA_CI/index.php/Community" group="comm" coords="1357,372,114" shape="circle">
		</map>
   </div>
</div>
</body>
<!-- <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer> -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109039991-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109039991-1');
</script>
</html>
