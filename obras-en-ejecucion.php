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
                        
                        <!--Section galeria imagenes-->
                        <div style="background-color: #f5f5f5;">
                            <div class="container-h2-obras-realizadas p-5">
                                <h2 class="h2-obra-juncal">JUNCAL 2588 - CABA</h2>
                                <p class="text-center" style="font-size: 20px;">Vivienda Multifamiliar</p>
                            </div>
                            <div class="container-juncal autoplay">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO1.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO2.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO3.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO4.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO5.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO7.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO8.jpg">
                                <img  src="images/guaraniConstructora/JUNCAL/OBRA-JUNCAL-FOTO9.jpg">
                            </div>

                            <div class="container-h2-obras-realizadas p-5">
                                <h2 class="h2-obra-juncal">Luis Maria Campos - CABA</h2>
                                <p class="text-center" style="font-size: 20px;">Edificio de Oficinas</p>
                            </div>

                            <div class="container-juncal autoplay">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/00_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/01_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/02_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/03_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/04_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/05_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/06_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/07_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/08_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/09_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/10_LUIS_MARIA_CAMPOS.jpg" alt="">
                                <img src="images/guaraniConstructora/LUIS MARIA CAMPOS/11_LUIS_MARIA_CAMPOS.jpg" alt="">
                            </div>

                            <div class="container-h2-obras-realizadas p-5">
                                <h2 class="h2-obra-juncal">FRAY JUSTO SANTA MARIA DE ORO 1900 – CABA</h2>
                                <p class="text-center" style="font-size:20px;">VIVIENDA MULTIFAMILIAR</p>
                            </div>

                            <div class="container-juncal autoplay">
                                <img  src="images/guaraniConstructora/MARIA DE ORO/OBRA - MARIA DE ORO - FOTO 1.jpg" alt="">
                                <img  src="images/guaraniConstructora/MARIA DE ORO/OBRA - MARIA DE ORO - FOTO 2.jpg" alt="">
                                <img  src="images/guaraniConstructora/MARIA DE ORO/OBRA - MARIA DE ORO - FOTO 3.jpg" alt="">
                                <img  src="images/guaraniConstructora/MARIA DE ORO/OBRA - MARIA DE ORO - FOTO 4 .jpg" alt="">
                            </div>

                            <div class="container-h2-obras-realizadas p-5">
                                <h2 class="h2-obra-juncal">RAVIGNIANI 1655 – CABA</h2>
                                 <p class="text-center" style="font-size:20px;">VIVIENDA MULTIFAMILIAR</p>
                            </div>

                            <div class="container-juncal autoplay">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 1.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 2.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 3.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 4.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 5.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 6.jpg" alt="">
                                <img  src="images/guaraniConstructora/RAVIGNIANI/OBRA - RAVIGNIANI - FOTO 7.jpg" alt="">
                            </div>

                            <div class="container-h2-obras-realizadas p-5">
                                <h2 class="h2-obra-juncal">VIRASORO 1121 – CABA</h2>
                                <p class="text-center" style="font-size:20px;">EDIFICIO DE OFICINAS</p>
                            </div>

                            <div class="container-juncal autoplay">
                                <img src="images/guaraniConstructora/VIRASORO/OBRA VIRASORO - FOTO 1.jpg" alt="">
                                <img src="images/guaraniConstructora/VIRASORO/OBRA VIRASORO - FOTO 2.jpg" alt="">
                                <img src="images/guaraniConstructora/VIRASORO/OBRA VIRASORO - FOTO 3.jpg" alt="">
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
                                            <a class="button button_js" href="https://www.estudiodmg.com.ar" style=" background-color:#093a8b !important; color:#fff;"><span class="button_label">Escribenos</span></a>
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
                            Dise&ntilde;o de p&aacute;ginas Web &copy; 2023 Todos los derechos reservados. <a target="_blank" rel="nofollow" href="https://www.estudiodmg.com.ar/">Estudio DMG</a>
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


<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script src="slick/slick.min.js"></script>


<script>
$('.autoplay').slick({
  dots: true,  
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
</script>

<script>
    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
</body>

</html>