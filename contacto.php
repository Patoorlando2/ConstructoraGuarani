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

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section full-width sections_style_0 ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_map">

                                        <!-- Google map area -->
                                        <!--<div class="google-map-wrapper">
                                            <div class="google-map" style="width:100%; height:500px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.947950424526!2d-58.51353782505061!3d-34.60547765758984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7d28e34be6b%3A0x476e78e565aa24a!2sAv.%20Francisco%20Beir%C3%B3%204294%2C%20C1417HZR%20CABA!5e0!3m2!1ses-419!2sar!4v1699385447941!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fcfcfc">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr align_center">
                                            <h2 class="hrmargin_0">Queres hablar con nosotros?</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section left-sidebar" style="padding-top:60px; padding-bottom:20px; background-color:#f5f5f5">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column one-second column_column" style="margin-left:10%;">
                                        <div class="column_attr">
                                            <div>
                                                <h4>Oficina</h4>
                                                <p class="style_r_oficina">
                                                    Avenida Francisco Beiró 4294 – depto. H
                                                    <br> Belgrano
                                                    <br>
                                                    <a href="tel:+5491130590117">11-3059-0117</a>
                                                    <br>
                                                    <a href="mailto:info@constructoraguarani.com.ar">info@constructoraguarani.com.ar </a>
                                                    <a href="mailto:presupuestos@constructoraguarani.com.ar">presupuestos@constructoraguarani.com.ar </a>
                                                    <a href="mailto:toribio@constructoraguarani.com.ar">toribio@constructoraguarani.com.ar </a> 
                                                </p>
                                                <!--<hr class="no_line hrmargin_b_30" />-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <!--<div class="column one column_divider">
                                        <hr class="hrmargin_b_30" />
                                    </div>-->
                                    <!-- One full width row-->
                                    <!--<div class="column one column_column">
                                        <div class="column_attr ">
                                            <h3 class="hrmargin_0">Contacto</h3>
                                        </div>
                                    </div>-->
                                    <!-- One Third (1/3) Column -->
                                    <!--<div class="column one-third column_column">
                                        <div class="column_attr ">
                                            <p class="big">
                                                Completa el formulario; Nosotros nos comunicaremos con usted a la brevedad para despejar todas sus dudas.
                                            </p>
                                        </div>
                                    </div>-->
                                    <!-- Two Third (2/3) Column -->
                                    <!--<div class="column two-third column_column">
                                        <div class="column_attr ">

                                            <div id="contactWrapper">
                                                <form id="contactform">
                                                    <div class="column one">
                                                        <input placeholder="Nombre" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <input placeholder="Correo Electronico" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <input placeholder="Asunto" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <textarea placeholder="Mensaje" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                    </div>
                                                    <div class="column one">
                                                        <input type="button" value="Enviar" id="submit" onClick="return check_values();">
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>-->
                                </div>
                                <!--<div class="four columns section_sidebar">
                                    <div class="widget-area clearfix">
                                       
                                       
                                            <h3>Promociones</h3>
                                            <div class="textwidget">
                                                <div class="image_frame no_link scale-with-grid no_border alignnone">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/home_electric_banner.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                      
                                    
                                            <h3>Area de Servicio</h3>
                                            <div class="textwidget">
                                                <hr class="no_line hrmargin_b_25" />
                                                <div class="image_frame no_link scale-with-grid no_border alignnone">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/home_electric_map.png" alt="">
                                                    </div>
                                                </div>
                                                <hr class="no_line hrmargin_b_30" />
                                                <p class="big" style="margin-right: 5%;">
                                                   Si necesitas una p&aacute;gina web especial, distinta a las dem&aacute;s, te ofrecemos un dise&ntilde;o personalizado que se adapte a tus gustos y necesidades.
                                                </p>
                                            </div>
                                        </aside>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="section" id="calltoaction" style="padding-top:50px; padding-bottom:10px; background-image:url(images/home_electric_texture_1.png); background-repeat:repeat; background-position:center; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Two Third (2/3) Column -->
                                    <div class="column two-third column_column">
                                        <div class="column_attr ">
                                            <h3 style="margin: 6px 0 0 0; color: #fff;">24 / 7 haga su consulta:  <i style="color: #7eafff;" class="icon-phone"></i>11-3059-0117</h3>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
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
                            Dise&ntilde;o de p&aacute;ginas Web &copy; 2023 Todos los derechos reservados. <a target="_blank" rel="nofollow" href="https://www.estudiodmg.com.ar">Estudio DMG</a>
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
    <script src="js/email.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>

    <script>
        function google_maps_54afa06625d27() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "featureType": "water",
                    "stylers": [{
                        "color": "#46bcec"
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "landscape",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }]
                }, {
                    "featureType": "road",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 45
                    }]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#444444"
                    }]
                }, {
                    "featureType": "transit",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }],
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-54afa06625d27"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "images/home_electric_pin.png",
                map: map
            });
        }


        jQuery(document).ready(function($) {
            google_maps_54afa06625d27();
        });
    </script>
    
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

<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>