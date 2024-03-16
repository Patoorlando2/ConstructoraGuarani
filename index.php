<!DOCTYPE html>
<html class="no-js">
<?php
include 'head.html';
?>
<body>
<style>
body{
	padding:0;
	margin:0;
}
.masthead{
	height: 100vh;
	min-height: 500px;
	background-image: url("images/guaraniConstructora/TORIBIO_EXTRA/20230925_131436.jpg");
    /*background-image: url("images/guaraniConstructora/PATRICIO ORLANDO/fondo.jpg");*/
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

<!-- Nosotros-->
<div>
	<div class="container-h2-nosotros">
		<h2 class="items-h2-nosotros p-3">Nosotros</h2>
	</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 texto">
                <p id="texto_p">
                Con una sólida trayectoria de 10 años en el sector de la construcción, en Constructora Guarani ofrecemos servicios de construcción en hormigón armado y albañilería. Nuestra dedicación y experiencia nos han permitido establecer una reputación sólida y confiable en el mercado. Es por eso que nos comprometemos a brindar un asesoramiento personalizado a cada cliente. Desde la planificación inicial hasta la ejecución y finalización del proyecto, estamos aquí para ofrecer orientación y soluciones adaptadas a tus requisitos.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end nosotros -->
<!-- Slider SLICK -->

<div class="container">
    <div class="row autoplay">
        <div class="col-lg-4 mt-3">      
            <img src="images/guaraniConstructora/CAROUSEL/CAROUSEL_01.jpg" width="300px" height="200px">
        </div>
        <div class="col-lg-4 mt-3">      
            <img src="images/guaraniConstructora/CAROUSEL/CAROUSEL_02.jpg" width="300px" height="200px">
        </div>
        <div class="col-lg-4 mt-3">      
            <img src="images/guaraniConstructora/CAROUSEL/CAROUSEL_03.jpg" width="300px" height="200px">
        </div>
        <div class="col-lg-4 mt-3">      
            <img src="images/guaraniConstructora/CAROUSEL/CAROUSEL_04.jpg" width="300px" height="200px">
        </div>
        <div class="col-lg-4 mt-3">      
            <img src="images/guaraniConstructora/CAROUSEL/CAROUSEL_05.jpg" width="300px" height="200px">
        </div>
    </div>
</div> 

<!-- Slider SLICK -->

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                      
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
                            Dise&ntilde;o de p&aacute;ginas Web &copy; 2023 Todos los derechos reservados. <a target="_blank" rel="nofollow" href="https://www.estudiodmg.com.ar/">Estudio DMG</a>
                        </div>
                        <!--Social info area-->
                        <ul class="social"></ul>
												<!--<span class="icon-whatsapp"></span>--> <!-- whatsapp -->
												<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
												<a href="https://api.whatsapp.com/send?phone=+541130590117&text=Hola%20sean%20bienvenidos" class="whatsapp_float" target="_blank">
													<i class="fa fa-whatsapp my-float"></i>
												</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>



 
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script src="script_animation.js"></script>

<!-- JS SLICK -->
<!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
<script src="slick/slick.min.js"></script>


<script>
$('.autoplay').slick({
  dots: true,  
  slidesToShow: 3,
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