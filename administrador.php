
<?php
    //sesion 
    include('control_session.php');
    validar_Session();
?>
<!doctype html>
<html lang="en">

<?php include("head.php")?>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/loader.gif" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
     <header>
        <div class="iq-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="inicio.php"><img class="img-fluid" src="images/quantum-color.png" alt="logo"></a>
                        </div>
                        <nav> <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
                            <ul class="menu text-right">
                                <form action="matar_sesion.php" method="post">
							<input type="submit" id="SignOff" name="signOff" value="Salir" style="background-color:#001841;overflow:hidden; color:#fff;"/>
						</form>
            
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
  
    <!-- Header End -->
   
      <section class="iq-bg iq-bg-fixed iq-over-black-80 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url('images/'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading-title">
                        <h3 class="title text-uppercase iq-font-white iq-tw-6">Bienvenido al sistema</h3>
                    </div>
                    
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                
                <li class="breadcrumb-item active" aria-current="page">Administrador</li>
            </ol>
        </nav>
        </section>
    <section class="overview-block-ptb iq-feature-aria">
        <div class="portafolio-filters">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="filters">
                        <li>
                            <a href="#" class="filter active" data-filter="todo">General</a>
                        </li>
                        <li>
                            <a href="#" class="filter" data-filter="oportunidad">Oportunidad</a>
                        </li>
                        
                        <li>
                            <a href="#" class="filter" data-filter="servicio">Servicios</a>
                        </li>
                        <li>
                            <a href="#" class="filter" data-filter="contacto">Contacto</a>
                        </li>       
                        <li>
                            <a href="#" class="filter" data-filter="recursos">Recursos</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        </div>
        <div class="portafolio-item 2-cols">
            <div class="container">
                
                <div class="row">
                    <!--Formulario de actualizar Evento-->
                    <div id="grid mix">
                        	  <div class="item col-md-12  oportunidad" style = "border: 2px solid;">
                                  <div class="portfolio-item-container">
                                      <h1>Oportunidad</h1>
			                 <!--begin-->
                                      
                <form action="controlador_actualiza_evento.php" method="post" class="contact-form" enctype="multipart/form-data">
					<fieldset>
						<label class="required product"><!--i class="icon-pencil"></i-->
							<select class ="1" id="selectEvento" name="selectEvento" style="width=100%;">	
                            </select>
						  </label>
						            <label class="requerid product"><input id="fecha" type="text" name="fecha" placeholder="Fecha del evento" value=""></label>
                                    <label class="requerid product"><input id="nombre" type="text" name="nombre" placeholder="Nombre del evento" value=""></label>
                                    <label class="requerid product"><input id="speaker" type="text" name="speaker" placeholder="Speaker" value=""></label>
                                    <label class="requerid product"><input id="hora" type="text" name="hora" placeholder="Hora " value=""></label>
                                    <label class="requerid product"><input id="lugar" type="text" name="lugar" placeholder="Lugar" value=""></label>
                                     <label class="requerid product"><textarea id="descripcion" type="text" name="descripcion" placeholder="Descripcion" value=""></textarea></label>
                                    
                                    <label class="required product"><input id="imagen" type="file" name="imagen" placeholder="" /></label>
                                    <input id="changeE" class="btn" type="button" name="send-message" value="Guardar" />
                                   <!--<button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-40">Guardar </button>-->
					</fieldset>
				</form>
				<!--end-->
				                    </div>
                                  <!-- .portfolio-item-container ends -->
                            </div>
                            
                    </div>
                    <div id="grid mix">
                        	  <div class="item col-md-12  servicio" style = "border: 2px solid;">
                                  <div class="portfolio-item-contain">
					               <img src="images/beneficios.png" style="max-height:609px;">
                                  </div>
                            </div>
                <!-- .portfolio-item-container ends -->
              
                            
                    </div>
                    <!--Formulario de actualizar servicio-->
                    <div id="grid mix">
                        	  <div class="item col-md-12  servicio" style = "border: 2px solid;">
                <div class="portfolio-item-container">
				<h1>Servicio</h1>
			  <!--begin-->
				<form action="" method="post" class="contact-form" enctype="multipart/form-data">
					<fieldset>
						<label class="required product"><!--i class="icon-pencil"></i-->
							<select class ="2" id="selectServicio" name="selectServicio" style="width=100%;">
								
							</select>
						  </label>
						            <label class="requerid product"><input id="nombreServicio" type="text" name="nombre" placeholder="Nombre del Servicio" value=""></label>
                                     <label class="requerid product"><textarea id="descripcion" type="text" name="descripcion" placeholder="Descripcion del Servicio" value=""></textarea></label>
                                    <a>Caracteristicas:</a>
                                    <label class="requerid product"><input id="detalle1" type="text" name="detalle1" placeholder="Caracteristica 1" value=""></label>
                                    <label class="requerid product"><input id="detalle2" type="text" name="detalle2" placeholder="Caracteristica 2" value=""></label>
                                    <label class="requerid product"><input id="detalle3" type="text" name="detalle3" placeholder="Caracteristica 3" value=""></label>
                                    <label class="requerid product"><input id="detalle4" type="text" name="detalle4" placeholder="Caracteristica 4" value=""></label>
                               
                                    
                                    <label class="required product"><input id="imagen_Servicio1" type="file" name="imagen_Servicio1" placeholder="" /></label>
                                    <label class="required product"><input id="imagen_Servicio2" type="file" name="imagen_Servicio2" placeholder="" /></label>
                                <input id="changeS" class="btn" type="button" name="send-message" value="Guardar" />
                                <!--<button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-40">Guardar </button>-->    
                                
					</fieldset>
				</form>
				<!--end-->
				</div>
                <!-- .portfolio-item-container ends -->
              </div>
                            
                    </div>
                     <div id="grid mix">
                        	  <div class="item col-md-12  oportunidad" style = "border: 2px solid;">
                                  <div class="portfolio-item-contain">
					               <img src="images/beneficios.png" style="max-height:609px;">
                                  </div>
                            </div>
                <!-- .portfolio-item-container ends -->
              
                            
                    </div>
                  
                    <!--Formulario de contacto-->
                       <div id="grid mix">
                        	  <div class="item col-md-12   contacto" style = "border: 2px solid;">
                <div class="portfolio-item-container">
				<h1>Contacto</h1>
			  <!--begin-->
				<form action="" method="post" class="contact-form" enctype="multipart/form-data">
					<fieldset>
						             <label class="requerid product"><textarea id="direccion" type="text" name="direccion" placeholder="Direccion:" value=""></textarea></label>
                                  
                                    <label class="requerid product"><input id="telefono" type="text" name="telefono" placeholder="Telefono" value=""></label>
                                    <label class="requerid product"><input id="correo" type="email" name="email" placeholder="Correo" value=""></label>
                                    <input id="changeC" class="btn" type="button" name="send-message" value="Guardar" />
                                    <!--<button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-20">Guardar </button>--> 
					</fieldset>
				</form>
				<!--end-->
				</div>
                <!-- .portfolio-item-container ends -->
              </div>
                            
                    </div>
                     <div id="grid mix">
                        	  <div class="item col-md-12  oportunidad" style = "border: 2px solid;">
                                  <div class="portfolio-item-contain">
					               <img src="images/beneficios.png" style="max-height:609px;">
                                  </div>
                            </div>
                <!-- .portfolio-item-container ends -->
              
                            
                    </div>
                 
            </div>
        </div>
        </div>
        </section>
       <style>
           a {
  color: #555;
}

a:hover {
  color: #555;
  text-decoration: none;
}

p {
  margin: 0;
}


   
/* CSS Transitions */
.navbar-container,
.btn,
.featured-slider.flexslider .flex-direction-nav a,
.project-container .flex-direction-nav,
.project-details li:before,
.portfolio-item img,
.item-meta-container,
.portfolio-item .overlay .zoom,
.widget ul li a,
.widget ul li a:before,
.post-slider .flex-direction-nav a,
.post-content .blockquote,
.portfolio-item .overlay .preview-links,
.related-posts li a .meta,
.project-tags a,
.breadcrumbs a,
.service,
.service i,
.share-project li a,
.stats b,
.team .member .social-links a {
  transition: all .3s ease;
  -webkit-transition: all .3s ease;
}

.animated {
  animation-duration: 0.3s;
  -moz-animation-duration: 0.3s;
  -webkit-animation-duration: 0.3s;
}

/* Headings */
.sub-title {
  font-size: 16px;
  margin: 0 0 30px;
}

/* -------------------------------------------*/
/* ---------->>> SITE CONTAINER <<<-----------*/
/* -------------------------------------------*/
#boxed-wrap {
  -webkit-box-shadow: 0 0 27px #9E9E9E;
  -moz-box-shadow: 0 0 27px #9E9E9E;
  box-shadow: 0 0 27px #9E9E9E;
  margin: 0 auto;
  width: 1170px;
}

#boxed-wrap .header {
  padding: 0;
}

#boxed-wrap .container {
  padding: 0 30px;
}


/* -------------------------------------------*/
/* ---------->>> HEADER SECTION <<<-----------*/
/* -------------------------------------------*/

.header {
  color: #fff;
  line-height: 60px;
  position: relative;
}

.header h1 {
  display: inline-block;
  font-size: 20px;
  margin: 0;
  position: relative;
  top: 3px;
}

.header a {
 color: #6e5128;
 //color: #6e5128;
 font-weight: 200px;
  
}

.header i {
 color: #6e5128;
 font-weight: 200px;
  
}

.header h1 a {
  font-size: 1emp;
  font-weight: 200;
}

.header a:hover {
  color: #fff;
}

.header .logo {
  margin-right: 10px;
  position: relative;
  top: -5px;
}


/* ---------------------------------------*/
/* ---------->>> NAVIGATION <<<-----------*/
/* ---------------------------------------*/

#navbar-sticky-wrapper {
  height: 0!important;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 10000;
}

.navbar-sticky-wrapper.sticked .navbar-container {
  line-height: 60px;
}

.navbar-sticky-wrapper.sticked #menu li > a {
  height: 60px;
}

.navbar-sticky-wrapper.sticked #menu .dropdown-menu li > a {
  height: auto;
}

.navbar {
  background: #292F36;
  /*background: rgba(41, 47, 54, 0.79);*/
  background-color: #fff;
  background-image: url("../images/patron-header2.png");
  border: 0;
  border-radius: 0;
}

.navbar-container {
  line-height: 80px;
  margin: 0 auto;
  width: 1140px;
}

#nav {
  display: inline;
}

#menu {
  margin: 0;
  float: right;
}

#menu li {
  font-size: 12px;
  display: inline-block;
  padding: 0 20px;
  text-transform: uppercase;
}

#menu li a {
  position: relative;
}

#menu .current > a:after {
  /*background: #584223;*/
  background: #b37618;
  bottom: 0;
  content: '';
  display: block;
  height: 3px;
  left: 0;
  position: absolute;
  width: 100%;
}

#menu .dropdown-menu {
  background: rgba(32, 37, 43, 0.9);
  border-radius: 0;
  border: 0;
  margin: 0;
  opacity: 0;
  padding: 0;
  width: 200px;
}

#menu li:hover {
  background: #20252b;
}

#menu li.dropdown:hover a {
  border: 0;
}

#menu li a {
  display: block;
  height: 80px;
}

#menu .dropdown-menu li {
  display: block;
  margin: 0;
  padding: 0;
}

#menu .dropdown-menu li a {
  color: #fff;
  height: auto;
  padding: 17px 20px;
  text-transform: none;
  width: 100%;
}

#menu .dropdown-menu li a:hover {
  /*background: rgba(0, 181, 181, 0.95);*/
  background: #b37618;
}

#menu li a.active {
  border-bottom: 3px solid #584223;
}

/* Responsive nav toggle */
#nav-toggle {
  display: none;
  font-size: 22px;
  position: fixed;
  right: 30px;
  top: 0;
}


/* ------------------------------------*/
/* ---------->>> BUTTONS <<<-----------*/
/* ------------------------------------*/
.button{
                display: block;
                width:100px;
                height: 50px;
                position:absolute;
                
                bottom: 0px;
                left: 50%;
                background-color: #f9b707;
                background-repeat: no-repeat;
                    
            }
            .button:hover{
                background-color: #365573;
                cursor: pointer;
            }



/* -------------------------------------*/
/* ---------->>> HOMEPAGE <<<-----------*/
/* -------------------------------------*/

/* Featured Slider */
.featured-slider {
  height: 720px;
  overflow: hidden;
  position: relative;
  width: 100%;
}

.arrow-down {
  bottom: 10px;
  height: 50px;
  margin-left: -25px;
  position: absolute;
  text-align: center;
  left: 50%;
  width: 50px;
  -webkit-animation-duration: 2s;
  -webkit-animation-delay: 2s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-duration: 2s;
  -moz-animation-delay: 2s;
  -moz-animation-iteration-count: infinite;
  animation-duration: 2s;
  animation-delay: 2s;
  animation-iteration-count: infinite;
  z-index: 9999;
}

.arrow-down a {
  color: #FFF;
  font-size: 52px;
  line-height: 32px;
}

.tp-rightarrow.default,
.tp-leftarrow.default {
  background: url('../images/slider-prev-next.png') 0 -46px no-repeat;
}

.tp-leftarrow.default.tparrows {
  background-position: 0 0;
}

/* Custom Caption styles for Revolution slider */
.tp-caption.orc-cyan-bg {
  background: #fff; /* Fallback for older browsers */
  background: rgba(255, 255, 255, 0.86);
  color: #000;
  font-size: 22px;
  line-height: 22px;
  padding: 8px 12px;
}

.tp-caption.white-text a {
  color: #fff;
}

.tp-caption.medium-text {
  font-size: 28px;
}

.tp-caption.large-text {
  font-size: 70px;
  font-weight: 200;
}

.tp-caption.uppercase {
  text-transform: uppercase;
}

.tp-caption.white {
  color: #FFF;
}

.tp-caption.black-bg {
  background: #000;
  background: rgba(0, 0, 0, 0.64);
  border: 2px solid #FFF;
  color: #fff;
  font-size: 46px;
  font-weight: 400;
  padding: 4px 40px;
}

.tp-caption.all-caps {
  text-transform: uppercase;
}

.tp-caption .slide-cta.btn {
  font-size: 18px;
  font-weight: 700;
  padding: 11px 24px;
}

/* Styles for flexslider */
.featured-slider.flexslider .container {
  height: 500px;
  position: relative;
}

.featured-slider.flexslider .slide-meta {
  color: #fff;
  left: 15px;
  max-width: 1170px;
  margin: 0 auto;
  position: absolute;
  top: 200px;
}

.featured-slider.flexslider .slide-meta .slide-title {
  background: rgba(0, 181, 181, 0.63);
  font-size: 28px;
  font-weight: 700;
  margin: 0;
  padding: 9px 17px;
}

.featured-slider.flexslider .slide-meta .slide-description {
  margin: 0 0 20px;
}

.featured-slider.flexslider .slide-meta .slide-description span {
  background: rgba(0, 0, 0, 0.43);
  font-size: 16px;
  line-height: 37px;
  padding: 7px 18px;
}

.featured-slider.flexslider .slides li {
  height: 500px;
}

.featured-slider.flexslider li .backdrop-featured-image {
  display: block;
  width: 100%;
}

.featured-slider.flexslider .slide-contents {
  height: 500px;
  left: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: 100%;
}

.featured-slider.flexslider li .rhs-featured-image {
  position: absolute;
  right: 15px;
  top: 50%;
}

.featured-slider.flexslider .slides {
  height: 500px;
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
}

.featured-slider.flexslider .flex-direction-nav a {
  background: rgba(0, 0, 0, 0.7);
  border-radius: 3px;
  color: #FFF;
  font-size: 0;
  height: 62px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
  width: 32px;
  z-index: 100;
}

.featured-slider.flexslider .flex-prev:before,
.featured-slider.flexslider .flex-next:before,
.post-slider .flex-prev:before,
.post-slider .flex-next:before,
.clients-slider .flex-next:before,
.clients-slider .flex-prev:before {
  font-family: FontAwesome;
  font-size: 32px;
  font-style: normal;
  font-weight: normal;
  left: 11px;
  position: absolute;
  text-decoration: inherit;
  top: 6px;
  -webkit-font-smoothing: antialiased;
}

.featured-slider.flexslider .flex-prev {
  opacity: 0;
  left: -40px;
}

.featured-slider.flexslider .flex-prev:before {
  content: "\f104";
}

.featured-slider.flexslider .flex-next {
  opacity: 0;
  right: -40px;
}

.featured-slider.flexslider .flex-next:before {
  content: "\f105";
}

.featured-slider.flexslider:hover .flex-prev {
  left: 20px;
  opacity: 1;
}

.featured-slider.flexslider:hover .flex-next {
  opacity: 1;
  right: 20px;
}


/* Main message below featured slider */

.main-message {
  color: #555;
  font-size: 20px;
  padding: 85px 0 55px;
  text-align: center;
}

.main-message p {
  font-size: 28px;
  font-weight: 200;
  margin: 0;
}

.main-message .sub-heading {
  color: #999;
  font-size: 18px;
}

.main-message .more-link i {
  margin-left: 10px;
}


/* Services section - homepage */

.services {
  margin-bottom: 50px;
  /*padding: 60px 0;*/
  padding: 60px 0 0 0;
}

.service {
  background: #f0f3f6;
  border-radius: 3px;
  padding: 60px 30px 40px;
  text-align: center;
}

.service:hover {
  background: #584223;
  color: #FFF;
}

.service:hover .btn {
  background: #f4f4f4;
  color: #738897;
}

.service:hover i {
  background: #584223;
}

.services h3 {
  font-size: 20px;
  vertical-align: top;
}

.services i {
  background: #8f9da7;
  border: 4px solid #FFF;
  border-radius: 50%;
  color: #fff;
  display: block;
  float: left;
  font-size: 32px;
  height: 100px;
  left: 50%;
  line-height: 98px;
  margin: 0 12px 0 -50px;
  position: absolute;
  text-align: center;
  top: -42px;
  width: 100px;
}

.services p {
  font-size: 14px;
  font-weight: 200;
  line-height: 28px;
  margin: 0 0 30px;
}


/* Showcase section - homepage */
.showcase-section {
  background: url(../images/showcase-bg.jpg) 0 0;
  -webkit-background-size: cover;
  background-size: cover;
  color: #FFF;
  font-weight: 200;
  margin-bottom: 70px;
  padding: 110px 0 0;
  overflow: hidden;
}

.showcase-section h2 {
  font-size: 26px;
  font-weight: 200;
  margin-top: 0;
}

.showcase-section p {
  font-size: 16px;
  line-height: 30px;
  margin-bottom: 30px;
}

.showcase-section .btn {
  padding: 10px 22px;
  margin-bottom: 37px;
}

.showcase-section .showcase-image {
  float: right;
  width: 100%;
  margin-bottom: -35px;
}


/* Portfolio section - Homepage */
.portfolio-section {
  margin-bottom: 100px;
}

.portfolio-items.portfolio-section {
  min-height: 0;
}

.portfolio-section .portfolio-item {
  overflow: hidden;
  position: relative;
  -webkit-backface-visibility: hidden;
}

.portfolio-item .overlay {
  background-color: #000;
  background-color: rgba(20, 22, 23, 0.6);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
}

.portfolio-item img {
  width: 100%;
}

.portfolio-item-container:hover img {
  -webkit-transform: scale(1.3);
  -ms-transform: scale(1.3);
  transform: scale(1.3);
}

.portfolio-item-container:hover .overlay {
  background-color: rgba(20, 22, 23, 0.6);
  display: block;
  opacity: 1;
  top: 0;
}

.portfolio-item .overlay .zoom,
.portfolio-item .overlay .link {
  -moz-border-radius: 1500px;
  -webkit-border-radius: 1500px;
  border-radius: 1500px;
  border: 2px solid #fff;
  color: #FFF;
  display: inline-block;
  font-size: 18px;
  height: 60px;
  line-height: 30px;
  margin: 0 10px;
  padding: 13px 0;
  text-align: center;
  width: 60px;
  -webkit-backface-visibility: hidden;
}

.overlay .zoom:hover,
.overlay .link:hover {
  background: #fff;
  color: #000;
  cursor: pointer;
}


.portfolio-item .overlay .preview-links {
  height: 50px;
  left: 60%;
  margin: -25px 0 0 -80px;
  position: absolute;
  top: -50%;
}

.animated.preview-links {
  -webkit-animation-duration: 0.7s;
}

.animated.overlay.slideOutUp {
  -webkit-animation-duration: 0.7s;
}

.portfolio-section .title {
  font-size: 28px;
  font-weight: 200;
  margin: 40px 0 15px;
  text-align: center;
}

.portfolio-section .sub-title {
  border-bottom: 1px solid #d7d7d7;
  color: #999;
  font-size: 18px;
  font-weight: 200;
  margin-bottom: 35px;
  padding-bottom: 30px;
  text-align: center;
}


.portfolio-section .item-meta-container {
  background: #f6f6f6;
  border-bottom: 3px solid #dadada;
  margin: 0;
  padding: 25px;
  text-align: center;
}

.portfolio-item-container:hover .item-meta-container {
  border-bottom-color: #584223;
}


/* Parallax Clients Section - Homepage */
.parallax-clients-section {
  background: #F0F0F0 url("../images/backdrop-image.jpg") center repeat-y;
  background-size: cover;
  -webkit-background-size: cover;
  color: #FFF;
  font-weight: 200;
  padding: 70px 0 90px;
  text-align: center;
  width: 100%;
}

.clients-slider {
  background: #FFF;
  background: rgba(255, 255, 255, 0.71);
  height: 121px;
  line-height: 121px;
  margin: 0 80px 50px;
  position: relative;
}

.clients-slider .owl-buttons {
  font-size: 0;
}

.clients-slider .owl-prev,
.clients-slider .owl-next {
  background: #25282e;
  color: #fff;
  display: block;
  height: 121px;
  position: absolute;
  top: 0;
  width: 80px;
}

.clients-slider .owl-prev {
  left: -80px;
}

.clients-slider .owl-next {
  right: -80px;
}

.clients-slider .owl-next:before,
.clients-slider .owl-prev:before {
  display: block;
  font-family: 'FontAwesome';
  font-size: 42px;
  font-weight: 700;
  height: 30px;
  left: 50%;
  line-height: 30px;
  margin: -15px 0 0 -8px;
  position: absolute;
  top: 50%;
  width: 16px;
}

.clients-slider .owl-next:before {
  content: "\f105";
}

.clients-slider .owl-prev:before {
  content: "\f104";
}

.parallax-clients-section .client-list {
  margin: 0 0 40px;
  padding: 30px 0;
}

.parallax-clients-section .client-list li {
  background: #FFF;
  background: rgba(255, 255, 255, 0.26);
  display: inline-block;
  margin: 0 13px;
  padding: 10px 13px;
}

.parallax-clients-section .client-list li img {
  width: 100%;
}

.parallax-clients-section .title {
  font-size: 28px;
  margin-bottom: 10px;
}

.parallax-clients-section .sub-title {
  font-size: 18px;
  font-weight: 200;
  margin-bottom: 50px;
}

.parallax-clients-section p,
.parallax-clients-section a {
  -webkit-backface-visibility: hidden;
}

.parallax-clients-section .parallax-cta {
  font-size: 20px;
  padding: 16px 28px;
}

/* Bottom Message section - Homepage */
.message-container {
  background: #F0F0F0;
  margin: 100px 0;
  overflow: hidden;
  padding: 50px;
}

.message-container h3,
.message-container h4 {
  font-size: 26px;
  line-height: 34px;
  margin: 0;
}

.message-container h4 {
  color: #6b6b6b;
  font-size: 16px;
}

.message-container i {
  font-size: 67px;
}
.message-container .message-text {
  padding-left: 25px;
}
.message-container .btn {
  margin: 11px 0;
  padding: 13px 35px;
}



/* -------------------------------------------*/
/* ---------->>> PORTFOLIO PAGE <<<-----------*/
/* -------------------------------------------*/

.filters {
  background: #f2f2f2;
  border-bottom: 5px solid #E7E7E7;
  margin: 60px 0 50px;
  padding: 0;
}

  .filters li {
    display: inline-block;
  }

  .filters a {
    color: #5c6d7e;
    display: block;
    font-size: 11px;
    padding: 9px 21px;
    text-transform: uppercase;
  }

  .filters .active {
    background: #584223;
    box-shadow: 0px 6px 0 #b37618;
    color: #fff;
}

.portfolio-items {
  min-height: 700px;
}

  .portfolio-items #grid {
    margin: 0 0 30px;
    padding: 0;
    overflow: hidden;
  }

    #grid .mix {
      display: none;
      opacity: 0;
    }

.portfolio-item {
  background: #3e4651;

  overflow: hidden;
  position: relative;
}

  .portfolio-item .overlay {
    padding: 70px 85px;
  }

  .portfolio-items .item {
    margin: 0 0 30px;
    overflow: hidden;
  }

    .portfolio-items .item img {
      width: 100%;
    }

  .portfolio-items .item-title {
    border-top: 1px solid rgba(255, 255, 255, 0.57);
    bottom: 0;
    color: #FFF;
    font-size: 18px;
    font-weight: 200;
    left: 0;
    padding: 20px 15px;
    position: absolute;
    text-align: center;
    width: 100%;
    margin: 0;
    max-height: 97px;
    overflow: hidden;
  }


.portfolio-item-container:hover .overlay .preview-links {
  top: 38%;
}

.portfolio-items .portfolio-item-container {
  margin: 0 0 30px;
}

  .portfolio-items .item-meta-container {
    background: #f6f6f6;
    border-bottom: 3px solid #dadada;
    margin: 0;
    padding: 6px 13px;
    -webkit-backface-visibility: hidden;
  }

  .portfolio-items .item-meta-container .share-icons li {
    display: inline-block;
    margin-right: 25px;
  }

    .portfolio-items .item-meta-container .share-icons i {
      font-size: 16px;
      margin-right: 6px;
      position: relative;
      top: 1px;
    }

      .portfolio-items .item-meta-container .share-icons i.facebook:hover {
        color: #3a5898;
      }

    .portfolio-items .item-meta-container .share-icons a {
      color: #898989;
      font-size: 12px;
    }

      .portfolio-items .item-meta-container .share-icons a.facebook:hover {
        color: #3a5898;
      }

      .portfolio-items .item-meta-container .share-icons a.twitter:hover {
        color: #00aced;
      }

      .portfolio-items .item-meta-container .share-icons a.pinterest:hover {
        color: #cd2224;
      }

      .portfolio-items .item-meta-container .share-icons a.gplus:hover {
        color: #b90700;
      }

.portfolio-items.2-cols .portfolio-item {
  height: 320px;
}

.categories {
  color: #aaa;
  font-size: 12px;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

  .categories li {
    display: inline;
  }

    .categories li:after {
      content: '/';
      margin: 0 5px;
    }

  .categories li:last-child:after {
    display: none;
  }

.portfolio-items .item-desc {
  color: #5c6d7e;
  font-size: 12px;
  line-height: 2;
}


/* Portfolio page modal styles */

.modal-dialog {
  padding: 0;
  width: 800px;
}

.modal-content {
  background: none;
  border: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin: 40px 0;
}

.modal-header, .modal-body {
  border: 0;
  padding: 0;
}

.modal-header .close {
  color: #fff;
  font-size: 16px;
  opacity: 1;
  padding: 0 0 5px;
  text-shadow: none;
}

.modal .item-featured-image {
  width: 800px;
}

.item-meta {
  background: #fff;
  padding: 20px;
}

.item-description {
  margin: 10px 0 0;
}

/* -----------------------------------------*/
/* ---------->>> PROJECT PAGE <<<-----------*/
/* -----------------------------------------*/
.project-container {
  margin: 60px 0;
}

.main-message.project-page-title {
  background-image: url('../images/project-page-header-bg.jpg');
}

/* Page title */
.project-page-title.page-title p {
  width: auto;
}

.project-page-title.page-title .project-caption {
  background: #E0E0E0;
  border-radius: 3px;
  color: #929292;
  font-size: 11px;
  line-height: 12px;
  margin-left: 10px;
  padding: 5px 10px;
  position: relative;
  top: 27px;
}

.breadcrumbs ul {
  background: #25282b;
  display: inline;
  float: right;
  line-height: 20px;
  margin: 10px 0 0;
  overflow: hidden;
  padding: 2px 10px;
  position: relative;
  top: 14px;
}

.breadcrumbs li {
  line-height: inherit;
  display: inline-block;
}

.breadcrumbs a {
  color: #fff;
  font-size: 10px;
  text-transform: uppercase;
}

.breadcrumbs a:hover {
  color: #b37618;
}

.breadcrumbs i {
  font-size: 9px;
  margin: 0 9px;
  position: relative;
  top: -1px;
}

/* Project Images */
.project-images img {
  margin-bottom: 40px;
  width: 100%;
}

/* Slider controls */
.project-container .post-slider {
  height: 600px;
  overflow: hidden;
}

.project-container .post-slider:hover .flex-direction-nav {
  top: 10px;
  opacity: 1;
}

.project-container .post-slider .flex-direction-nav {
  opacity: 0;
  top: -10px;
}

.project-container .post-slider .flex-direction-nav a {
  height: 30px;
  width: 30px;
}

.project-container .flex-direction-nav a:before {
  font-size: 22px;
  left: 11px;
  top: 5px;
}

.project-title {
  font-size: 24px;
  margin: 0 0 15px;
}

.project-desc {
  font-size: 14px;
  line-height: 24px;
  margin: 0 0 20px;
}

/* project tags */
.project-tags {
  margin: 40px 0 30px;
}

.project-tags a {
  border: 2px solid #ccc;
  border-radius: 3px;
  color: #929292;
  display: inline-block;
  font-size: 11px;
  margin: 0 5px 10px 0;
  padding: 3px 11px 4px;
}

.project-tags a:hover {
  background: #584223;
  border-color: #b37618;
  color: #fff;
}

.project-tags i {
  margin-right: 3px;
}

/* View project CTA */
.view-project {
  padding: 10px 40px;
}

.project-details {
  margin-bottom: 40px;
}

.project-details h3 {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 20px;
}

.project-details .sidebar-title {
  font-size: 18px;
  margin: 0 0 20px;
}

.project-details ul {
  margin: 0 0 40px;
  padding: 0;
}

.project-details li:before {
  content: "\f00c";
  color: #717272;
  font-family: "FontAwesome";
  margin-right: 9px;
  text-shadow: 0 1px 3px rgba(120,213,58,0.1);
}

.project-details li:hover:before {
  color: #584223;
}

/* Project Meta Info */
.project-container .meta li {
  background: #F0F0F0;
  margin-bottom: 13px;
}

.meta .label {
  background: #38404a;
  display: inline-block;
  font-weight: 400;
  margin-right: 10px;
  padding: 10px;
  text-align: left;
  text-transform: uppercase;
  width: 100px;
}

.share-project-container {
  margin-bottom: 50px;
}

.view-project-cta-container {
  background: #F0F0F0;
  padding: 20px;
  text-align: center;
  margin: 0 0 40px;
}

.view-project {
  display: inline-block;
  margin: 0 auto;
}

.share-project-container h3 {
  border-bottom: 1px solid #e1e1e1;
  margin-bottom: 30px;
  font-size: 12px;
  text-transform: uppercase;
}

.share-project-container span {
  background: #FFF;
  bottom: -7px;
  font-weight: 700;
  padding-right: 9px;
  position: relative;
}

.share-project li {
  display: inline-block;
}

.share-project li a {
  background: #f0f0f0;
  border: 1px solid #e1e1e1;
  display: block;
  font-size: 18px;
  height: 40px;
  line-height: 40px;
  margin-right: 10px;
  text-align: center;
  width: 40px;
}

.share-project li a:hover {
  background: #555;
  color: #F0F0F0;
}

/* --------------------------------------*/
/* ---------->>> BLOG PAGE <<<-----------*/
/* --------------------------------------*/

.main-message.blog-header {
  background-image: url('../images/blog-header-bg.jpg');
}

.main-message.page-title.blog-header:before {
  background: rgba(0, 0, 0, 0.45);
}

.blog-container {
  margin: 60px 0;
}

.blog-entries {
  width: 100%;
}

.entry {
  margin: 0 0 100px;
}

.entry .feat-image {
  margin-bottom: 20px;
}

.entry .feat-image img {
  width: 100%;
}

.entry .feat-video,
.entry .feat-video object {
  width: 100%;
}

.entry .title {
  font-size: 24px;
  margin: 0 0 10px;
}

.entry p {
  font-size: 16px;
}

.entry .title i {
  color: #ACACAC;
  display: inline-block;
  font-size: 16px;
  height: 24px;
  margin-right: 5px;
  position: relative;
  top: -4px;
}

.entry .meta {
  margin: 0 0 10px;
}

.entry .meta a {
  color: #584223;
}

.entry .meta ul {
  margin: 0;
  overflow: hidden;
  padding: 0;
}

.entry .meta li {
  color: #898989;
  float: left;
  font-size: 12px;
  margin-right: 20px;
}

.entry .meta i {
  margin-right: 5px;
}

.entry .excerpt {
  line-height: 28px;
  margin: 0 0 40px;
}

.entry .read-more {
  padding: 10px 20px;
}

.blog-navigation {
  clear: both;
  margin-bottom: 50px;
  overflow: hidden;
  width: 100%;
}

.blog-navigation a {
  color: #777;
  font-size: 20px;
}

.blog-navigation a:hover {
  color: #000;
}

.blog-navigation i {
  font-size: 30px;
  position: relative;
  top: 2px;
}

.blog-navigation .prev-posts i {
  margin-right: 8px;
}

.blog-navigation .next-posts i {
  margin-left: 8px;
}

/* Post with slider */
.post-slider {
  margin-bottom: 20px;
  position: relative;
}

.post-slider .slides {
  overflow: hidden;
  padding: 0;
}

.post-slider .slides li {
  list-style: none;
  zoom: 1;
}

.post-slider .slides img {
  width: 100%;
}

.post-slider .flex-direction-nav {
  top: 10px;
  font-size: 0;
  height: 30px;
  left: 10px;
  margin: 0;
  padding: 0;
  position: absolute;
}

.post-slider .flex-direction-nav li {
  float: left;
  margin-right: 7px;
}

.post-slider .flex-direction-nav a {
  background: #000;
  color: #fff;
  border-radius: 3px;
  display: block;
  height: 20px;
  position: relative;
  width: 20px;
}

.post-slider .flex-direction-nav a:hover {
  background: #584223;
  color: #fff;
}

.post-slider .flex-prev:before,
.post-slider .flex-next:before {
  font-size: 15px;
  left: 7px;
  line-height: 20px;
  top: 0;
}

.post-slider .flex-prev:before {
  content: "\f104";
}

.post-slider .flex-next:before {
  content: "\f105";
  left: 8px;
}

/* Blockquote post */
.entry .blockquote {
  background: #F3F3F3;
  border-left: 5px solid #ACACAC;
  font-size: 18px;
  padding: 20px 28px;
  line-height: 30px;
}

/* Large header */
.main-message.page-title.large-blog-header {
  background: url('../images/backdrop-image.jpg') center no-repeat;
  background-size: cover;
  height: auto;
  padding: 90px 0;
}

.main-message.large-blog-header p,
.large-blog-header span {
  color: #FFF;
  line-height: 24px;
  padding: 13px 15px;
}

.main-message.large-blog-header p {
  background: #584223;
  background: rgba(0, 181, 181, 0.71);
  width: auto;
  margin: 0;
}

.main-message.large-blog-header span {
  background: #000;
  background: rgba(0, 0, 0, 0.71);
  float: left;
}

/* Post page */
.main-message.blog-post {
  background-image: url('../images/single-post-header-bg.jpg');
}

.blog-post .breadcrumbs ul {
  margin: 0;
  top: 2px;
}

.post.entry {
  margin-bottom: 40px;
}

.post-content p {
  line-height: 28px;
  margin-bottom: 40px;
}

.post-content .blockquote {
  font-size: 16px;
  margin-bottom: 40px;
}

.post-content .blockquote:hover {
  border-color: #584223;
}

.post-content ul {
  margin: 0 0 40px;
  padding: 0;
}

.post-content li {
  margin-bottom: 3px;
}

.post-content ul li:before {
  content: "\f00c";
  color: #584223;
  font-family: 'FontAwesome';
  margin-right: 9px;
  text-shadow: 0 1px 3px rgba(120,213,58,0.1);
}

/* Post tags */

.tags {
  margin-bottom: 40px;
  overflow: hidden;
  padding: 5px 0;
}

.tags h4 {
  float: left;
  font-size: 14px;
  margin: 0 15px 0 0;
  position: relative;
  top: 2px;
}

.tags ul li {
  float: left;
}

.tags a {
  border-radius: 3px;
  border: 1px solid #ccc;
  font-size: 12px;
  margin-right: 10px;
  padding: 3px 7px;
}

/* About author section */
.about-author {
  background: rgba(245, 245, 245, 0.49);
  border: 1px solid #584223;
  border-width: 3px 0 0;
  margin-bottom: 40px;
  padding: 30px 40px 46px;
}

.about-author h3 {
  font-size: 18px;
  font-weight: 400;
  margin: 0 0 30px;
}

.about-author img {
  border-radius: 50%;
  float: left;
  height: 100px;
  margin-right: 28px;
  width: 100px;
}

.author-meta h4 {
  font-size: 14px;
  font-weight: 600;
}

.author-meta p {
  font-size: 13px;
  color: #919191;
}

/* Related posts section */
.related-posts {
  margin-bottom: 40px;
  overflow: hidden;
}

.related-posts h3 {
  font-size: 18px;
  font-weight: 400;
  margin: 0 0 30px;
}

.related-posts ul {
  padding: 0;
  margin-left: -25px;
}

.related-posts li {
  display: inline-block;
  width: 205px;
  margin-left: 25px;
}

.related-posts li img {
  width: 100%;
}

.related-posts li a {
  display: block;
  position: relative;
}

.related-posts li a .meta {
  background: rgba(0, 0, 0, 0.74);
  bottom: 0;
  color: #fff;
  opacity: 0;
  font-size: 12px;
  left: 0;
  padding: 10px;
  position: absolute;
  width: 100%;
  z-index: 1;
}

.related-posts li a:hover .meta {
  opacity: 1;
}

/* Comments */
.comments {
  margin-bottom: 100px;
}

.comments ul {
  margin: 0;
  padding: 0;
}

.comments-list > .comment:first-child {
  border: 0;
  padding: 0;
}

.comments h3 {
  font-size: 18px;
  margin-bottom: 30px;
}

.comments h3 a {
  color: #b37618;
}

.comments a:hover {
  border-bottom: 1px solid #b37618;
}

.comment {
  border-top: 1px solid #eee;
  padding-top: 30px;
}

.comment .author-image {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  float: left;
  height: 70px;
  overflow: hidden;
  width: 70px;
}

.comment .author-image img {
  width: 100%;
}

.comment-content {
  margin-left: 90px;
}

.comment .comment-author-name {
  color: #555;
  font-size: 14px;
  margin-right: 3px;
}

.comment-meta {
  font-size: 12px;
  margin-bottom: 10px;
}

.comment-meta span {
  color: #bbb;
}

.comment-meta .reply {
  color: #584223;
}

.comment p {
  color: #898989;
  font-size: 12px;
  line-height: 20px;
  margin-bottom: 30px;
}

ul.comment-reply {
  margin-left: 90px;
}

.comment-form h3 {
  font-size: 18px;
  margin-bottom: 30px;
}

/* Widgets */
.widget {
  clear: both;
  margin: 0 0 50px;
  overflow: hidden;
  width: 300px;
}

.widget h3 {
  font-size: 18px;
  margin: 0 0 10px;
}

.widget a {
  color: #777;
  font-size: 12px;
}

.widget ul {
  margin: 0;
  padding: 0;
}

.widget li {
  padding: 2px 0;
}

.list-widget li {
  border-bottom: 1px solid #e1e1e1;
  padding: 10px 0;
}

.widget.list-widget ul li a:before {
  color: #333333;
  content: '\f054';
  font-family: FontAwesome !important;
  font-size: 8px;
  padding-right: 10px;
  position: relative;
  top: -2px;
}

.widget li:hover a,
.widget li:hover a:before {
  color: #584223;
}

/* Search widget */
.search-widget input[type=text] {
  background: none;
  border: 1px solid #D5D5D5;
  color: #777;
  padding: 6px 15px;
  width: 270px;
}

.search-widget input[type=submit] {
  background: url(../images/search-icon.png) center no-repeat;
  border: 0;
  height: 26px;
  left: -35px;
  outline: none;
  position: relative;
  top: 5px;
  width: 26px;
}

/* Tags widget */
.widget.tags-widget h3 {
  margin-bottom: 20px;
}

.widget.tags-widget li {
  float: left;
  margin: 0 10px 10px 0;
}

.widget.tags-widget li a {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 5px 8px;
}

.widget.tags-widget li a:before {
  display: none;
}

.widget.tags-widget li a:hover {
  border-color: #584223;
  color: #584223;
}

.widget.tags-widget li a:active {
  background: #584223;
  color: #fff;
}

/* Tabbed widget */
.widget .nav-tabs {
  margin-bottom: 15px;
}

.widget .nav-tabs li a {
  border: 0;
  color: #bbbaba;
  font-size: 12px;
  margin-bottom: -3px;
  padding: 7px 16px;
  text-transform: uppercase;
  transition: none;
  -webkit-transition: none;
}

.widget .nav-tabs li a:hover,
.widget .nav-tabs li.active a:hover {
  background: none;
}

.widget .nav-tabs li.active a {
  border: 3px solid #0AA;
  border-width: 0 0 3px 0;
  color: #555;
}

.widget .tab-content ul {
  padding-left: 13px;
}

.widget .tab-content li {
  clear: both;
  margin-bottom: 15px;
  overflow: hidden;
}

.widget .tab-content .thumb {
  float: left;
  margin-right: 15px;
}

.widget .tab-content .meta .title {
  font-size: 13px;
  line-height: 17px;
  margin: 0 0 4px;
}

.widget .tab-content .meta .time-stamp {
  color: #AFAFAF;
  font-size: 12px;
}

/* Flickr Widget */
.flickr-widget li {
  float: left;
  height: 70px;
  margin: 0 5px 5px 0;
  width: 70px;
}

/* ========= CONTACT US PAGE ========= */

#map {
  width: 100%;
  height: 450px;
  margin: 50px 0;
}


.contact-form {
  margin: 0 0 100px;
}
/*
.contact-form {
  margin: 100px 0 100px;
}
*/

.contact-form input, 
.contact-form textarea {
  background: none;
  border: 0;
  font-size: 12px;
  resize: none; /*NO ESTABA*/
  outline: none;
  padding: 0;
  width: 250px;
}

.contact-form i {
  display: block;
  float: left;
  line-height: 20px;
  margin-right: 10px;
  width: 14px;
}
.contact-form label {
  background: #F0F0F0;
  margin: 0 0 20px;
  padding: 5px 10px;
  display: block;
  width: 300px;
}
.contact-form label.product {
  background: #F0F0F0;
  margin: 0 0 20px;
  padding: 5px 10px;
  display: block;
  /*width: 300px;*/
  width: 100%;
}

.product{}

.contact-form label.message {
  padding-right: 0;
  width: 520px;
}

.contact-form textarea {
  width: 480px;
  min-height: 150px;
  max-width: 480px;
  min-width: 480px;
}

.contact-form .btn {
  background: #133e68;
  color: #FFF;
  height: 34px;
  width: 100px;
}

.address-block i {
  display: block;
  float: left;
  font-size: 14px;
  line-height: 18px;
  margin-right: 6px;
  width: 14px;
  text-align: center;
}

.address-block p {
  font-size: 13px;
  margin: 0 0 10px;
}

.address-block a {
  color: #555;
}

/* ========= ABOUT US PAGE ========= */
.main-message.about-page {
  background-image: url("../images/about-header.jpg");
  padding: 175px 0 75px;
}

.main-message.about-page:before {
  background: rgba(0, 0, 0, 0);
}

.main-message.about-page p {
  font-size: 36px;
  font-weight: 400;
  text-align: center;
}

.main-message.about-page .tagline {
  font-size: 18px;
}

.amazing-workspaces {
  margin-bottom: 30px;
  overflow: hidden;
  padding: 100px 0 0;
}

.amazing-workspaces p {
  font-size: 18px;
  font-weight: 200;
  line-height: 32px;
}

.amazing-workspaces img {
  float: right;
}

.amazing-workspaces .cta {
  border-color: #555;
  color: #555;
  font-size: 18px;
  font-weight: 700;
  margin: 30px 0;
  padding: 12px 25px;
  text-transform: uppercase;
}

.amazing-workspaces .cta:hover {
  background-color: #000 !important;
  border-color: #000 !important;
  color: #fff !important;
}

.about-title {
  font-size: 36px;
  font-weight: 700;
  line-height: 37px;
  margin: 0 0 20px;
  padding: 0;
  text-transform: uppercase;
}

.about-image {
  margin: 8px 0;
}

.about-image img {
  max-width: 100%;
}

/* Stats section*/
.stats {
  background: #F1F1F1 url('../images/stats-bg.jpg') no-repeat;
  background-size: cover;
  color: #FFF;
  margin: 0 15px 80px;
  overflow: hidden;
  padding: 80px 30px;
}

.stats b {
  border: 3px solid #FFF;
  border-radius: 3px;
  display: block;
  font-size: 48px;
  padding: 20px;
  text-align: center;
  margin: 10px auto;
  width: 130px;
}

.stats b:hover {
  background: rgba(0, 0, 0, 0.56);
}

.stats p {
  font-size: 18px;
  font-weight: 600;
  text-align: center;
}

/* Team section */
.team {
  margin-bottom: 100px;
}

.team h2 {
  font-size: 36px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
}

.team .about-team {
  color: #555;
  font-size: 18px;
  font-weight: 200;
  line-height: 1.7;
  margin-bottom: 40px;
  padding: 0 150px;
  text-align: center;
}

.team .member { 
  background: #F8F8F8;
  overflow: hidden;
  text-align: center;
}

.team .member img {
  width: 100%;
  margin-bottom: 30px;
}

.team .member h3 {
  font-weight: 700;
  line-height: 1;
  margin: 0 0 3px;
}

.team .member .social-links {
  margin: 0 0 20px;
}

.team .member .social-links li {
  display: inline-block;
  font-size: 14px;
  margin: 0 10px;
}

.team .member .social-links a:hover {
  color: #b37618;
}

.team .member p {
  font-weight: 200;
  line-height: 1.8;
  padding: 0 20px 10px;
  margin-bottom: 20px;
}

.team .member p.designation {
    color: #959595;
    font-size: 16px;
    font-weight: 400;
    padding: 0;
}


/* Bottom Message */
.bottom-message {
  background: #F8F8F8;
  font-size: 22px;
  line-height: 22px;
  margin: 0 0 100px;
  overflow: hidden;
  padding: 50px 50px 30px;
}

.bottom-message p {
  line-height: 32px;
}

.bottom-message .cta {
  background: #38404a;
  float: right;
  font-size: 18px;
  padding: 15px 45px;
  position: relative;
  top: -10px;
}

.bottom-message .cta:hover {
  -webkit-box-shadow: 0 3px 0 #000;
  -moz-box-shadow: 0 3px 0 #000;
  box-shadow: 0 3px 0 #000;
}

/* ------------------------------------------*/
/* ---------->>> MEDIA QUERIES <<<-----------*/
/* ------------------------------------------*/

/* Smartphones (portrait and landscape) */
@media (max-width : 640px) {
  body { -webkit-text-size-adjust: none; }

  /* Hiding owl carousel controls on devices */
  .owl-controls .owl-buttons {
    display: none;
  }

  .clients-slider {
    margin: 0 10px 50px;
  }
}

@media only screen and (max-width : 991px) {
  .widget {
    width: 100%;
  }
}

/* Desktops and laptops */
@media (max-width: 1200px) {
  #boxed-wrap {
    max-width: 1170px;
  }

  .header {
    padding: 0;
  }

  .navbar-container {
    width: 940px;
  }

  /* == Home page == */
  /* Showcase section */
  .showcase-section {
    padding: 60px 0;
  }

  /* Single portfolio project page */
  .project-container .post-slider {
    height: 498px;
  }

  .related-posts li {
    width: 170px;
  }
}

/* iPads (portrait and landscape) */
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
  body { -webkit-text-size-adjust: none; }

  .featured-slider .btn.btn-large {
    padding: 12px 24px !important;
  }
  
  .portfolio-items .portfolio-item-container {
    width: 342px;
  }
}

@media only screen and (max-width : 1024px) {
  .slider-wrap .tp-leftarrow {
    bottom: 0 !important;
    left: 0 !important;
    top: auto !important;
  }

  .slider-wrap .tp-rightarrow {
    bottom: 0 !important;
    right: 0 !important;
    top: auto !important;
  }

  .tp-rightarrow.default {
   background: url('../assets/large_right.png') 0 0 no-repeat;
  }

  .tp-leftarrow.default {
   background: url('../assets/large_left.png') 0 0 no-repeat;
  }

  .featured-slider .tp-bannertimer {
    bottom: auto !important;
    top: 0 !important;
  }

  .main-message {
    font-size: 15px;    
    padding: 30px 0;
  }

  .main-message .more-link i {
    margin-left: 5px;
  }

  .message-icon i {
    font-size: 52px;
  }

  .message-container {
    padding: 30px;
  }

  .message-container .message-text {
    margin: 0px;
    padding-left: 10px;
  }

  .message-container .message-text h3 {
    font-size: 22px;
    margin: 0px;
  }

  .message-cta-container {
    margin: 0px;
    text-align: center;
  }

  .message-cta {
    padding: 12px 24px;
  }

  .footer p {
    float: left;
  }

  .contact-form {
    margin-bottom: 40px;
  }

  /* Single portfolio project page */
  .project-container .post-slider {
    height: 498px;
  }

  .related-posts li {
    width: 200px;
  }

  /* == Home page == */
  /* Showcase section */
  .services .service {
    margin-bottom: 90px;
    padding-bottom: 10px;
  }

  .services .service-details {
    margin: 0 0 30px;
  }

  .showcase-section p {
    font-size: 14px;
    margin-bottom: 15px;
  }

  /* == About page == */
  .team .member {
    margin-bottom: 30px;
  }

  .bottom-message p {
    margin-bottom: 10px;
    text-align: center;
  }

  .amazing-workspaces .cta {
    margin-bottom: 40px;
  }

  .amazing-workspaces img {
    float: left;
  }

  /* Bottom message on about page */
  .bottom-message {
    padding: 50px;
    text-align: center;
  }

  .bottom-message .cta {
    float: none;
    margin: 20px auto 0;
    top: 0;
  }

  /* Portfolio page */
  .portfolio-items .item-meta-container .share-icons li {
    margin-right: 20px;
  }

  /* Project page */
  .breadcrumbs ul {

  }

.bottom-message .message-inner {
    text-align: center;
}}

@media (max-width: 990px) {
  .navbar-container {
    width: 720px;
  }

  /* == Homepage == */
  /* Showcase Section */
  .showcase-section {
    text-align: center;
  }

  /* Bottom Message */
  .message-icon {
    margin-bottom: 15px;
    text-align: center;
  }

  .message-text {
    margin-bottom: 10px;
    text-align: center;
  }

  /* Portfolio page */
  #grid .mix {
    width: 100%;
  }
  
  /* Blog page */
  .sidebar {
    display: none;
  }
}

@media (max-width: 700px) {
  .navbar-container {
    width: 465px;
  }
}

@media (max-width: 768px) {
  #boxed-wrap {
    max-width: 750px;
  }
  
  /* Navbar */
  .header {
    /*background: #292F36;*/
	background: #6e5128;
	background-image: url('../images/patron-header2.png');
  }

  #navbar-sticky-wrapper {
    height: auto !important;
  }

  #nav-toggle {
    position: absolute;
  }

  .navbar-fixed-top {
    margin: 0;
    position: static;
  }

  .navbar-container {
    width: 100%;
  }

  /* Responsive navigation */
  #nav {
    background: #30373f;
    border-radius: 6px;
    clear: both;
    margin: 0 0 20px;
    overflow: hidden;
    padding: 0;
  }

  #nav li a {
    border-bottom: 1px solid #384755;
    font-size: 14px;
    height: auto;
    line-height: 30px;
    margin: 0;
    padding: 10px 0px;
    text-transform: none;
  }

  #nav #menu > li:last-child a {
    border: 0;
  }

  #nav li a:hover {
    color: #584223;
  }

  #nav.opened {
    max-height: none !important;
  }

  #nav ul {
    float: none;
    margin: 0;
    padding: 0;
    display: block;
    list-style: none;
  }

  #nav li {
    clear: both;
    display: block;
    margin: 0;
    width: 100%;
  }

  #nav .dropdown {
    clear: both;
  }

  #nav .dropdown-menu {
    background: none;
    border: 0;
    box-shadow: none;
    opacity: 1;
    overflow: hidden;
    width: 100%;
    position: static;
  }

  #nav li.dropdown:hover {
    background: none;
  }

  #nav #menu li.dropdown:hover a {
    border-bottom: 1px solid #384755;
  }

  #nav li.dropdown li {
    padding-left: 20px;
    position: relative;
  }

  #nav li.dropdown ul a {
    padding: 10px 0;
  }

  #nav li.dropdown a:hover {
    background: none;
  }

  .js #nav {
    clip: rect(0 0 0 0);
    max-height: 0;
    position: absolute;
    display: block;
    overflow: hidden;
    zoom: 1;
  }

  #nav.opened {
    max-height: 9999px;
    margin: 0 auto 10px;
  }

  .js #nav {
    position: relative;
  }

  .js #nav.closed {
    max-height: none;
  }

  #nav-toggle {
    display: block;
  }
  
  /* Single portfolio project page */
  .project-container .post-slider {
    height: 363px;
  }

  .related-posts li {
    width: 180px;
  }

  .main-message.page-title {
    padding-top: 40px;
  }
}

@media only screen and (max-width : 700px) {
  .container,
  #boxed-wrap {
    max-width: 495px;
  }

  .main-message.page-title {
    height: auto;
  }

  .breadcrumbs {
    text-align: center;
    width: 100%;
  }
  
  .breadcrumbs ul {
    float: left;
  }

  .featured-slider.flexslider .slide-meta {
    width: 280px;
  }
  
  .featured-slider.flexslider .slide-meta .slide-title {
    font-size: 18px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .featured-slider.flexslider .slide-meta .slide-description {
    font-size: 14px;
    margin: 0 0 15px;
    overflow: hidden;
    padding: 0 10px 0 0;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .main-message .more-link {
    clear: both;
    display: block;
    text-align: left;
  }

  /* Blog page */

  .blog-container {
    margin: 20px 0 0;
  }

  .search-widget input[type=text] {
    width: 100%;
  }

  .main-message.large-blog-header {
    padding: 30px 0;
  }

  .blog-entries {
    width: auto;
  }

  .entry img,
  .entry .feat-image,
  .entry object {
    width: 100%;
  }

  .entry .meta li {
    margin-bottom: 10px;
  }

  .blog-navigation {
    margin-bottom: 50px;
    overflow: hidden;
    width: 290px;
  }

  .services {
    padding: 20px 0 0;
  }

  .portfolio-section .item-title {
    line-height: 21px;
  }

  /* Single project page */
  .related-posts li {
    margin-bottom: 30px;
  }
}

@media only screen and (max-width : 660px) {
  .container,
  #boxed-wrap {
    max-width: 495px;
  }

  .featured-slider.flexslider .slide-meta .slide-description {
    margin: -2px 0 15px;
    width: 270px;
  }

  .featured-slider.flexslider .slide-meta .slide-description span {
    font-size: 13px;
  }
  
  .slide-cta {
    font-size: 13px;
    padding: 9px 15px;
  }

  .featured-slider.flexslider li .rhs-featured-image {
    display: none;
  }

  .featured-slider.flexslider {
    height: 285px;
  }

  .featured-slider.flexslider .slide-contents {
    height: 285px;
  }

  .main-message p {
    white-space: normal;
  }

  .message-icon {
    margin: 0 0 30px;
    text-align: center;
  }

  .message-container .message-text {
    margin: 0 0 30px;
    padding-left: 0;
    text-align: center;
  }

  .message-container .message-text h3 {
    margin: 0 0 20px;
  }

  .message-cta-container {
    margin: 0 0 30px;
    text-align: center;
  }

  /* Footer - mobile version */

  .footer, .footer-bottom {
    height: auto;
    text-align: center;
  }

  .footer-bottom {
    padding: 16px 0;
  }

  .footer-bottom .pull-left,
  .footer-bottom .pull-right {
    width: 100%;
  }

  .footer-bottom .pull-right .social-links {
    float: none;
    padding: 20px 0 0;
  }

  .footer p {
    width: auto;
  }

  .footer-widget {
    clear: both;
    overflow: hidden;
    padding: 0 10px;
    text-align: left;
    width: 100%;
  }

  .modal.in .modal-dialog {
    width: 500px;
  }

  .modal .item-featured-image {
    width: 500px;
  }

  .contact-form label,
  .contact-form label.message {
    width: 290px;
  }

  .contact-form label input,
  .contact-form label textarea {
    width: 240px;
  }

  .contact-form label.message textarea {
    min-width: 0;
  }

  .modal.in .modal-dialog,
  .modal .item-featured-image {
    width: 300px;
  }

  .modal.in .modal-dialog,
  .modal .item-featured-image {
    width: 500px;
  }

  .contact-form label,
  .contact-form label.message {
    width: 290px;
  }

  .contact-form label input,
  .contact-form label textarea {
    width: 240px;
  }

  .contact-form label.message textarea {
    min-width: 0;
  }
}

/* iPhone */
@media only screen and (max-width : 600px) {
  .container,
  #boxed-wrap {
    max-width: 331px;
  }

  .header {
    padding: 0;
  }

  .featured-slider.flexslider .slide-meta {
    margin-left: 0;
    width: 280px;
  }

  .featured-slider.flexslider .slide-meta .slide-description {
    margin: -2px 0 15px;
    width: 270px;
  }

  .featured-slider.flexslider .slide-meta .slide-description span {
    font-size: 13px;
  }
  
  .featured-slider .btn {
    display: none;
  }

  .slide-cta {
    font-size: 13px;
    padding: 9px 15px;
  }

  .featured-slider.flexslider li .rhs-featured-image {
    display: none;
  }

  .featured-slider.flexslider {
    height: 285px;
  }

  .featured-slider.flexslider .slides,
  .featured-slider.flexslider .slides li,
  .featured-slider.flexslider li .backdrop-featured-image {
    height: 100%;
    width: auto;
  }

  .featured-slider.flexslider .slide-contents {
    height: 285px;
  }

  .featured-slider.flexslider .flex-direction-nav a {
    top: auto;
    bottom: 0;
    height: 40px;
    width: 40px;
    border-radius: 0;
  }

  .featured-slider.flexslider .flex-prev:before, .featured-slider.flexslider .flex-next:before {
    left: 14px;
    top: -4px;
  }

  .featured-slider.flexslider:hover .flex-prev {
    left: 0;
  }
  
  .featured-slider.flexslider:hover .flex-next {
    right: 0;
  }

  .main-message p {
    white-space: normal;
  }

  .message-icon {
    margin: 0 0 30px;
    text-align: center;
  }

  .message-container .message-text {
    margin: 0 0 30px;
    padding-left: 0;
    text-align: center;
  }

  .message-container .message-text h3 {
    margin: 0 0 20px;
  }

  .message-cta-container {
    margin: 0 0 30px;
    text-align: center;
  }

  /* About page */
  .team {
    margin-bottom: 50px;
  }

  .team .about-team {
    padding: 0;
  }

  /* Footer - mobile version */

  .footer, .footer-bottom {
    height: auto;
    padding: 0;
    text-align: center;
  }

  .footer-bottom {
    padding: 16px 0;
  }

  .footer-bottom .pull-left,
  .footer-bottom .pull-right {
    width: 100%;
  }

  .footer-bottom .pull-right .social-links {
    float: none;
    padding: 20px 0 0;
  }

  .footer p {
    width: auto;
  }

  .footer-widget {
    clear: both;
    overflow: hidden;
    margin: 20px 0;
    padding: 0 10px;
    text-align: left;
    width: 100%;
  }

  .modal.in .modal-dialog {
    width: 500px;
  }

  .modal .item-featured-image {
    width: 500px;
  }

  .contact-form label,
  .contact-form label.message {
    width: 290px;
  }

  .contact-form label input,
  .contact-form label textarea {
    width: 240px;
  }

  .contact-form label.message textarea {
    min-width: 0;
  }

  .modal.in .modal-dialog,
  .modal .item-featured-image {
    width: 300px;
  }

  /* Single portfolio project page */
  .project-container .post-slider {
    height: 227px;
  }

  /* Single post page */
  ul.comment-reply {
    margin-left: 40px;
  }

  .related-posts li {
    margin-bottom: 20px;
    width: 100%;
  }

  .project-tags a {
    display: inline-block;
    margin-bottom: 10px;
  }
}

    </style>
  
    <!-- Main Content End -->
    <!--=================================Footer -->
            
        <?php
            include('footer.php');
        ?>
    <!--=================================Footer -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- jquery-min JavaScript -->
    <script src="js/jquery-min.js "></script>
    <!-- popper JavaScript -->
    <script src="js/popper.min.js "></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js "></script>
    <!-- Bitcoin widget JavaScript -->
    <script src="js/widget.js "></script>
    <!-- All-plugins JavaScript -->
    <script src="js/all-plugins.js "></script>
    <!-- particles JavaScript -->
    <script src="js/particles.js "></script>
    <!-- REVOLUTION JS FILES -->
    <script src="js/controlador_editable_contacto.js"></script>
    <script src="js/controlador_seccion_contactos.js"></script>
    <script src="js/controlador_boton.js"></script>
    <script src="js/controlador_eventos.js"></script>
    <script src="js/controlador_servicios.js"></script>
    <script src="js/controlador_editable_evento.js"></script>

    
    <!---->
    <script src="revslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="revslider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="revslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.video.min.js"></script>
    <script>
    var navigation = responsiveNav("#nav", {animate: true, openPos: "static", insert: "before", customToggle: "nav-toggle"});
  </script>
    <!-- Custom JavaScript -->
    <style>
    .filters {
  background: #f2f2f2;
  border-bottom: 5px solid #E7E7E7;
  margin: 60px 0 50px;
  padding: 0;
}

  .filters li {
    display: inline-block;
  }

  .filters a {
    color: #5c6d7e;
    display: block;
    font-size: 11px;
    padding: 9px 21px;
    text-transform: uppercase;
  }

  .filters .active {
    background: #f9b707;
    box-shadow: 0px 6px 0 #b37618;
    color: #fff;
}

.portfolio-items {
  min-height: 700px;
}

  .portfolio-items #grid {
    margin: 0 0 30px;
    padding: 0;
    overflow: hidden;
  }

    #grid .mix {
      display: none;
      opacity: 0;
    }

.portfolio-item {
  background: #3e4651;

  overflow: hidden;
  position: relative;
}

  .portfolio-item .overlay {
    padding: 70px 85px;
  }

  .portfolio-items .item {
    margin: 0 0 30px;
    overflow: hidden;
  }

    .portfolio-items .item img {
      width: 100%;
    }

  .portfolio-items .item-title {
    border-top: 1px solid rgba(255, 255, 255, 0.57);
    bottom: 0;
    color: #FFF;
    font-size: 18px;
    font-weight: 200;
    left: 0;
    padding: 20px 15px;
    position: absolute;
    text-align: center;
    width: 100%;
    margin: 0;
    max-height: 97px;
    overflow: hidden;
  }


.portfolio-item-container:hover .overlay .preview-links {
  top: 38%;
}

.portfolio-items .portfolio-item-container {
  margin: 0 0 30px;
}

  .portfolio-items .item-meta-container {
    background: #f6f6f6;
    border-bottom: 3px solid #dadada;
    margin: 0;
    padding: 6px 13px;
    -webkit-backface-visibility: hidden;
  }

  .portfolio-items .item-meta-container .share-icons li {
    display: inline-block;
    margin-right: 25px;
  }

    .portfolio-items .item-meta-container .share-icons i {
      font-size: 16px;
      margin-right: 6px;
      position: relative;
      top: 1px;
    }

      .portfolio-items .item-meta-container .share-icons i.facebook:hover {
        color: #3a5898;
      }

    .portfolio-items .item-meta-container .share-icons a {
      color: #898989;
      font-size: 12px;
    }

      .portfolio-items .item-meta-container .share-icons a.facebook:hover {
        color: #3a5898;
      }

      .portfolio-items .item-meta-container .share-icons a.twitter:hover {
        color: #00aced;
      }

      .portfolio-items .item-meta-container .share-icons a.pinterest:hover {
        color: #cd2224;
      }

      .portfolio-items .item-meta-container .share-icons a.gplus:hover {
        color: #b90700;
      }

.portfolio-items.2-cols .portfolio-item {
  height: 320px;
}

.categories {
  color: #aaa;
  font-size: 12px;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

  .categories li {
    display: inline;
  }
 .categories li:after {
      content: '/';
      margin: 0 5px;}.categories li:last-child:after { display: none;
  }.portfolio-items .item-desc {
  color: #5c6d7e;
  font-size: 12px;
  line-height: 2;
}


/* Portfolio page modal styles */
.modal-dialog {
  padding: 0;
  width: 800px;
}.modal-content {
  background: none;
  border: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin: 40px 0;
}.modal-header, .modal-body {
  border: 0;
  padding: 0;
}.modal-header .close {
  color: #fff;
  font-size: 16px;
  opacity: 1;
  padding: 0 0 5px;
  text-shadow: none;
}.modal .item-featured-image {
  width: 800px;
}.item-meta {
  background: #fff;
  padding: 20px;
}.item-description {
  margin: 10px 0 0;
}
    </style>
    <script src="js/custom.js "></script>
    <script>
    var revapi3,
        tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_3_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_3_1");
        } else {
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "persephone",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1170,
                gridheight: 480,
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    speedbg: 0,
                    speedls: 0,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
    </script>
    <script>
  jQuery(function($){
	console.log("VALOR ACTUAL: "+$( "select option:selected" ).attr("val"));  
  });
	
  </script>
  
 
</body>

</html>