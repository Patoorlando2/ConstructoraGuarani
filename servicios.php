<!DOCTYPE html>
<html class="no-js">
<?php 
    include 'head.html';
?>

<body class="layout-full-width header-fixed minimalist-header header-menu-right sticky-header sticky-white hide-title-area no-content-padding">
<style>
	body{
		padding:0;
		margin:0;
	}
	.masthead{
	height: 100vh;
	min-height: 500px;
	background-image: url("images/guaraniConstructora/TORIBIO_EXTRA/20230925_131436.jpg");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	filter:brightness(0.5);
}
div.container-h2-nosotros{
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: center;
	align-content:center;
	margin: 15px;
}
h2.items-h2-nosotros{
	font-family: 'Lato', sans-serif;
	color:black;
	position: relative;
	animation-name: h2-nosotros;
	animation-duration: 4s;
	border-bottom: 4px solid transparent;
  transition: border-bottom 0.3s ease;
}
h2.items-h2-nosotros:hover{
	font-family: 'Lato', sans-serif;
	color:black;
	position: relative;
	animation-name: h2-nosotros;
	animation-duration: 4s;
	border-bottom: 4px solid #5490f4;
}

@keyframes h2-nosotros{
	0% {
	  opacity:0;
	  transform: translate(20px);
	}
	100% {
	  opacity: 1;
	  transform: translate(0);
	}
}
.navbar-nav li a{
	border-bottom: 4px solid transparent;
  transition: border-bottom 0.3s ease;
}
.navbar-nav li a:hover{
	border-bottom: 4px solid #5490f4;
	line-height: 15px;
}
</style>

<?php
include 'image-header.html'; 
include 'navbar.php';
?>

<!-- Main Theme Wrapper -->
<div id="Wrapper">
        
<div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fcfcfc">
<div class="section_wrapper clearfix">
<div class="items_group clearfix">
<!-- One Fourth (1/4) Column -->
<div class="column one-fourth column_how_it_works">
 <div class="how_it_works no_border">
 <div class="image"><img src="images/how_it_works_1.png" class="scale-with-grid" alt="Step 1"><!--<span class="number">1</span>-->
</div>
 <h4>Gerenciamiento</h4>
</div>
 </div>

 <div class="column one-fourth column_how_it_works">
<div class="how_it_works no_border">
<div class="image"><img src="images/how_it_works_2.png" class="scale-with-grid" alt="Step 2"><!--<span class="number">2</span>-->
 </div>
<h4>Proyecto</h4>

</div>
</div>

<div class="column one-fourth column_how_it_works">
<div class="how_it_works no_border">
<div class="image"><img src="images/how_it_works_3.png" class="scale-with-grid" alt="Step 3"><!--<span class="number">3</span>-->
</div>
<h4>Presupuesto</h4>

 </div>
 </div>

<div class="column one-fourth column_how_it_works">
 <div class="how_it_works no_border">
<div class="image"><img src="images/how_it_works_4.png" class="scale-with-grid" alt="Step 4"><!--<span class="number">4</span>-->
 </div>
 <h4>Construcción</h4>

 </div>
</div>
 </div>
 </div>
 </div>
												 <!--Bootstrap Cards-->
												 <div class="container">
													<div class="row">
															<div class="col-lg-12">
																<div class="card mb-3 mx-auto" style="max-width: 540px;">
																	<div class="row no-gutters">
																			<!--<div class="col-md-4">
																					<img class="imgNumber" src="images/home_electric_step_1.png" alt="...">
																			</div>-->
																			<div class="col-md-12">
																					<div class="card-body">
																							<h5 class="card-title text-center">Gerenciamiento</h5>
																							<p class="card-text justify-content-center">En Constructora Guaraní, valoramos la comunicación clara y efectiva. Contamos con un equipo de profesionales dedicados a transmitir los plazos y objetivos de cada proyecto, desde el inicio hasta la conclusión. Adaptamos nuestra comunicación según tus necesidades y mantenemos una línea abierta durante todo el proceso. Este enfoque nos permite organizar y ejecutar los trabajos de manera eficiente y precisa, asegurando resultados exitosos en cada etapa.</p>
																					</div>
																			</div>
																	</div>
															</div>
															
													
															<div class="col-lg-12">
																<div class="card mb-3 mx-auto" style="max-width: 540px;">
																	<div class="row no-gutters">
																		<!--<div class="col-md-4">
																			<img class="imgNumber" src="images/home_electric_step_2.png" alt="...">
																		</div>-->
																		<div class="col-md-12">
																			<div class="card-body">
																				<h5 class="card-title text-center">Proyecto</h5>
																				<p class="card-text justify-content-center">Realización completa de proyecto, documentación, pliegos y planillas necesarias para la ejecución de trabajos.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="col-lg-12">
																<div class="card mb-3 mx-auto" style="max-width: 540px;">
																	<div class="row no-gutters">
																		<!--<div class="col-md-4">
																			<img class="imgNumber" src="images/home_electric_step_3.png" alt="...">
																		</div>-->
																		<div class="col-md-12">
																			<div class="card-body">
																				<h5 class="card-title text-center">Presupuesto</h5>
																				<p class="card-text justify-content-center">Ofrecemos el armado de planillas de cómputo y presupuesto del costo de tareas a realizar, de manera detallada y completa.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="col-lg-12">
																<div class="card mb-3 mx-auto" style="max-width: 540px;">
																	<div class="row no-gutters">
																		<!--<div class="col-md-4">
																			<img class="imgNumber" src="images/home_electric_step_4.png" alt="...">
																		</div>-->
																		<div class="col-md-12">
																			<div class="card-body">
																				<h5 class="card-title text-center">Construcción</h5>
																				<p class="card-text justify-content-center">Ofrecemos la construcción integral de las obras civiles, desde las fundaciones hasta las terminaciones constructivas.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
													</div>
												 </div>
												 </div>
												 <!--Bootstrap Cards-->
												

                        <div class="section" id="calltoaction" style="padding-top:50px; padding-bottom:10px; background-image:url(images/home_electric_texture_1.png); background-repeat:repeat; background-position:center; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    
                                    <div class="column two-third column_column">
                                        <div class="column_attr ">
                                            <h3 style="margin: 6px 0 0 0; color: #fff;">24 / 7 haga su consulta:  <i style="color: #7eafff;" class="icon-phone"></i>11-3059-0117</h3>
                                        </div>
                                    </div>
                                   
                                    <div class="column one-third column_column">
                                        <div class="column_attr align_right">
                                            <a class="button button_js" href="https://wa.me/1130590117" target="_blank" style=" background-color:#093a8b !important; color:#fff;"><span class="button_label">Escribenos</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




												
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            Dise&ntilde;o de p&aacute;ginas Web &copy; 2023 Todos los derechos reservados. <a target="_blank" rel="nofollow" href="#">Estudio DMG</a>
                        </div>
                        <!--Social info area-->
                        <ul class="social"></ul>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
												<a href="https://api.whatsapp.com/send?phone=+541130590117&text=Hola%20sean%20bienvenidos" class="whatsapp_float" target="_blank">
													<i class="fa fa-whatsapp my-float"></i>
												</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-electric.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>