<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : ElegantBlue
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120108

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Centro Integral de Odontología</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css' />
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="screen" />
<? if(isset($nobarra)){ ?>
    <link href="<?=base_url();?>css/nobarra.css" rel="stylesheet" type="text/css" media="screen" />
<?} else {?>
    <link href="<?=base_url();?>css/barra.css" rel="stylesheet" type="text/css" media="screen" />
<? } ?>
<script type='text/javascript' src='<?=base_url()?>js/jquery/jquery-1.7.1.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>js/jquery/jquery-ui-1.8.18.custom.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>js/jquery.tipTip.minified.js'></script>
<link type="text/css" href="<?=base_url()?>css/redmond/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=base_url()?>css/colorbox.css" />
<script src="<?=base_url()?>js/jquery.colorbox-min.js"></script>
<script src="<?=base_url()?>js/jquery.validate.min.js"></script>
<!--<script>
 $(".tiptip").tipTip({maxWidth: "auto", edgeOffset: 10});
</script>!-->

<script  type='text/javascript'>

function pideAjax(vurl){
	var html = $.ajax({
        url: vurl,
        async: false
        }).responseText;//oncomplete
	return html;
}


</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35336608-1']);
  _gaq.push(['_setDomainName', 'startlogic.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Centro Integral de Odontología</a></h1>
				<p>Servicios dentales de calidad</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li <?=($seccion=='home' || !isset($seccion))?' class="current_page_item"':'';?>>
				<?=anchor(base_url().'index.php','Inicio')?>
				    </li>
				<li><a href="#">Nosotros</a></li>
				<li><a href="#">Servicios</a></li>
<!--				<li><a href="#">Ubicación</a></li>
!-->				<li><a href="#">Contacto</a></li>
				<li <?=($seccion=='paciente')?' class="current_page_item"':'';?>>
				<?=anchor(base_url().'index.php/paciente','Pacientes')?></li>
				<!--<li <?=($seccion=='personal')?' class="current_page_item"':'';?>>
				</li>-->
			</ul>
		</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
					    <? foreach($titulo as $c=>$tit){ ?>
						<div class="post" <?=isset($forma[$c])?"id='".$forma[$c]."'":""?>>
							<h2 class="title"><?=$titulo[$c]?></h2>
							<p class="meta"><?=$subtitulo[$c]?></p>
                                                        <? if(isset($error[$c]) && $error[$c] != '') { ?>
                                                            <p class="error"><?=$error[$c]?></p>
                                                        <? } ?>
							<div class="entry">
							    <?=$contenido[$c]?>
							</div>
						</div>
					    <? } ?>
						
					    <!--
                                                <div class="post">
							<h2 class="title"><a href="#">Welcome to Elegant Blue</a></h2>
							<p class="meta">Posted by <a href="#">Someone</a> on January 31, 2012
								&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
							<div class="entry">
								<p><img src="images/img08.jpg" width="186" height="186" alt="" class="alignleft border" />This is <strong>Elegant Blue </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href="http://www.nodethirtythree.com/"></a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  The picture in this template is from <a href="#">PDPhoto.org</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
								<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
							</div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
							<p class="meta">Posted by <a href="#">Someone</a> on January 8, 2012
								&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
							<div class="entry">
								<p><img src="images/img09.jpg" width="186" height="186" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, consectetuer nisl felis ac diam. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. Mauris vitae nisl nec metus placerat consectetuer. </p>
							</div>
						</div>
						<div class="post">
							<h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2>
							<p class="meta">Posted by <a href="#">Someone</a> on January 8, 2012
								&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
							<div class="entry">
								<p><img src="images/img08.jpg" width="186" height="186" alt="" class="alignleft border" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc.</p>
							</div>
						</div>
					    !-->
					    
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
                                        <? if(!isset($nobarra)){ ?>
					<div id="sidebar">
						<ul>
                                                    <? if($this->session->userdata("idempleado")>0){?>
                                                    <li><?=anchor(base_url().'index.php/personal/logout','Cerrar Sesión')?></li>
                                                    <? } ?>
                                                    <li><?=anchor(base_url().'index.php/personal','Panel de Control')?></li>
                                                    <? if($this->session->userdata("idempleado")>0){?>
                                                        <li>
								<h2>Menú</h2>
								<ul>
                                                                    <li><?=anchor(base_url().'index.php/personal/agenda','Agenda')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/altaTratamientos','Nuevo tratamiento')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/seguimientoTratamiento','Seguimiento de tratamiento')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/altaPacientes','Administrar pacientes')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/altaEmpleados','Administrar empleados')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/procedimientos','Administrar procedimientos')?></li>
                                                                    <li><?=anchor(base_url().'index.php/personal/productos','Administrar productos')?></li>
								</ul>
							</li>

                                                    <? } ?>
<!--							<li>
								<h2>SIGDEN</h2>
								<p>
                                                                    <strong>Sistema Interactivo De Gestión Dental</strong><br>
                                                                    Este sistema le servirá para administrar todo lo relacionado con su consultorio.
                                                                </p>
							</li>-->
							<!--<li>
								<h2>Categories</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>
							<li>
								<h2>Blogroll</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>
							<li>
								<h2>Archives</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>!-->
						</ul>
					</div>
                                        <? } ?>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) <?=date("Y")?> <a href="http://www.dentalbiointegral.com">www.dentalbiointegral.com</a>. Derechos reservados. Desarrollado por <a href="http://www.salvadorvillegas.com/"> Salvador Villegas</a>. <?=anchor(base_url()."index.php/personal","Personal")?></p>
</div>
<!-- end #footer -->
</body>
</html>



