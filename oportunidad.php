<!doctype html>
<html lang="en">
<?php
    include("head.php");
 ?>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/loader.gif" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
    <?php 
        include('header2.php');
    ?>
    <!-- Header End -->
    
    <div class="clearfix"></div>
    <!-- Banner -->
   
  
    <div class="video-container">
<iframe width="1366" height="600" src="https://www.youtube.com/embed/HrKuIxveC4M?rel=0&amp;controls=0&amp;showinfo=0&loop=1&playlist=HrKuIxveC4M&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <style>
    .video-container {
position: relative;
padding-bottom: 56.25%; /* Para que el contenedor tenga relación de aspecto 16/9 */
padding-top: 30px;
height: 0;
overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
    </style>
  <!-- Banner  End -->
    <!--======= Breadcrumb Inner Page =======-->
    <!-- Main Content -->
    <div class="main-content">
        <!-- Eventos -->
        <section class="iq-event overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-5 iq-mb-20">Nuestros Eventos</h3>
                            <p>Here is 3 Easy Steps to Busy &amp; Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="eventone-tab" data-toggle="tab" href="#eventone" role="tab" aria-controls="eventone" aria-selected="true">Event 15-Jun-17</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eventwo-tab" data-toggle="tab" href="#eventwo" role="tab" aria-controls="eventwo" aria-selected="false">Event 16-Jun-17</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eventhree-tab" data-toggle="tab" href="#eventhree" role="tab" aria-controls="eventhree" aria-selected="false">Event 17-Jun-17</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eventfour-tab" data-toggle="tab" href="#eventfour" role="tab" aria-controls="eventfour" aria-selected="false">Event 18-Jun-17</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="evenfive-tab" data-toggle="tab" href="#evenfive" role="tab" aria-controls="evenfive" aria-selected="false">Event 19-Jun-17</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content iq-mt-30" id="myTabContent">
                            <div class="tab-pane fade show active" id="eventone" role="tabpanel" aria-labelledby="eventone-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/eventos/desayuno.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Desayuno Quantico</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="eventwo" role="tabpanel" aria-labelledby="eventwo-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/eventos/trading-day.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Trading Day Noviembre</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="eventhree" role="tabpanel" aria-labelledby="eventhree-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/eventos/casa-andina.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Casa Andina</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="eventfour" role="tabpanel" aria-labelledby="eventfour-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/eventos/jdgomez.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Juan Diego Gómez en Lima</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="evenfive" role="tabpanel" aria-labelledby="evenfive-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/eventos/presentacion.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Pre Lanzamiento</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="evensix" role="tabpanel" aria-labelledby="evensix-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12"><img src="images/feature/02.jpg" class="img-fluid" alt="#"></div>
                                    <div class="col-lg-8 col-md-12">
                                        <h5 class="iq-tw-5 iq-mt-10">Lorem Ipsum is simply dummy text.</h5>
                                        <div><span class="iq-tw-5 iq-font-black lead">Speaker:</span> Rinks Cooper</div>
                                        <ul class="list-inline iq-mt-20 iq-mb-10">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM TO 10.00 AM</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>MSG Ground, Hall 1, USA</li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!--Eventos end -->
        
        <!-- Paquetes-->
        <!--<section class="overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-5 iq-mb-20">Paquetes </h3>
                            <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-pricing">
                            <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                            <div class="pricing-header">
                                <h3 class="title">Profesional</h3>
                                <span class="price-value">$09</span>
                            </div>
                            <ul class="pricing-content">
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Wordpress</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Javascript</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Animation</li>
                            </ul>
                            <a class="button" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-pricing">
                            <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                            <div class="pricing-header">
                                <h3 class="title"> Master</h3>
                                <span class="price-value">$29</span>
                            </div>
                            <ul class="pricing-content">
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Wordpress</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Javascript</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Animation</li>
                            </ul>
                            <a class="button" href="#">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="iq-pricing">
                            <span class="icon"><i aria-hidden="true" class="ion-social-bitcoin-outline"></i></span>
                            <div class="pricing-header">
                                <h3 class="title">Corporativo</h3>
                                <span class="price-value">$99</span>
                            </div>
                            <ul class="pricing-content">
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Photoshop</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>HTML5 &amp; CSS 5</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Wordpress</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Javascript</li>
                                <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Animation</li>
                            </ul>
                            <a class="button" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
		    <section class="main-content">
            <div class="container">
                    <div class="col-lg-12 col-md-3 offset=-1 align-self-center text-center" >
                            <div class="iq-features1">
                            <div class="iq-bg" style="background-image: url('images/evento.png');"></div>
                            <div class="iq-blog" style="background-image: url('images/evento.png');">
                                <h5 class="iq-tw-5 iq-mt-20 text-center " style="color:#fff">¿Quiere ser parte del proximo evento?
                                   <br> <a href="contacto.php"> Contactanos</a></h5>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    
        <section class="overview-block-ptb pading=45px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-5 iq-mb-20">Nuestros paquetes</h3>
                            <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                             <div class="row">
                              
                    <div class="col-lg-4 col-md-4 offset=-1 align-self-center text-center" >
                        <figure class="imghvr-shutter-out-diag-1">
                            <img src="images/silver.png">
                                <figcaption>
                                    <h3>Quantum Silver</h3>
                                    <p>$180<br>
									3 meses<br>
									100 puntos comisionables</p>
                                    <br>
                                    Kit de inicio (carpeta de materiales)<br>
                                    Bono de 10$<br>
                                    Quantum Academy (Servicio)<br>
                                    Proyecciones de Inversion(Servicio)<br>
                                    Trading Vip Free (Servicio)<br>
                                    Forex Sniper (Servicio)<br>
                                    Portafolio de Inversion3.0
                                    <a href="contacto.php"></a>
                                </figcaption>
                        </figure>
                    </div>
                   
                      <div class="col-lg-4 col-md-4 offset=-1 align-self-center text-center" >
						<figure class="imghvr-shutter-out-diag-1">
                            <img src="images/gold.png">
                                <figcaption>
                                        <H3>Quantum Gold</H3>
                                        <p>$280<br>
									6 meses<br>
									200 puntos comisionables</p>
                                    <br>
                                    Kit de inicio (carpeta de materiales)<br>
                                    Bono de 10$<br>
                                    Quantum Academy (Servicio)<br>
                                    Proyecciones de Inversion(Servicio)<br>
                                    Trading Vip Free (Servicio)<br>
                                    Forex Sniper (Servicio)<br>
                                    Portafolio de Inversion3.0
                                    
                                        <a href="contacto.php"></a>
                                </figcaption>
                        </figure>
                    </div>
                       
                    
                    <div class="col-lg-4 col-md-4 offset=-1 align-self-center text-center" >
						<figure class="imghvr-shutter-out-diag-1">
                            <img src="images/platinum.png">
                                <figcaption>
                                        <H3>Quantum Platinum</H3>
                                        <p>$480<br>
									12 meses<br>
									400 puntos comisionables</p>
                                    <br>
                                    Kit de inicio (carpeta de materiales)<br>
                                    Bono de 10$<br>
                                    Quantum Academy (Servicio)<br>
                                    Proyecciones de Inversion(Servicio)<br>
                                    Trading Vip Free (Servicio)<br>
                                    Forex Sniper (Servicio)<br>
                                    Portafolio de Inversion3.0
                                    
                                        <a href="contacto.php"></a>
                                </figcaption>
                        </figure>
                    </div>
                    
                                  
                  
                    </div>
       
                </div>
                </div>

        </section>		
		
        <!-- Paquetes end-->
        <!--Informacion de los paquetes-->
        <!-- Recursos-->
           
            <!-- <section class=" iq-over-black-80 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url('images/quantum.jpg'); background-position: center center;">
                 <div class="container">
                <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading-title">
                        <h3 class="title iq-font-white ">Recursos</h3>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        </section>-->
            <div id="contenedor">
                <h1>Recursos</h1>
                  <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">Ir</button>
            </div>
        <style>
            #contenedor{
                background: url("images/quantum.jpg")fixed;
                max-height: 100%;
                height: 400px;
                position: relative;
                margin:0 auto;
                padding: 5%;
                background-size: cover;
            }
            #contenedor h1{
                text-align: center;
                margin-top: 80px;
                color: #fff;
            }
            .button{
                display: block;
                width: 50px;
                height: 50px;
                position:absolute;
                bottom: 0px;
                left: 50%;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
                background-color: #333333;
                background-repeat: no-repeat;
                    
            }
            .button:hover{
                background-color: #494949;
                cursor: pointer;
            }
        </style>
   
	<br>
        <!--Fin de recursos
        <section class="overview-block-ptb">
            <div class="container">
                <div class="row">
                    <a>Recursos:</a>
                    <br>
                        <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">Ver recursos</button> 
                </div>
            </div>
        </section>
        <!--fin de la info-->
     <!--modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Inicio de Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <a>Codigo de ingreso:</a>
        <input type="text">
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-primary"href="recursos.php">Ingresar</a>
        
      </div>
    </div>
  </div>
    </div>
        
    <!--fin modal-->
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
    <!-- Custom JavaScript -->
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
</body>

</html>