<?php
    //sesion 
    include('control_session_token.php');
    validar_Session();
?>
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
                                <form action="matar_sesion2.php" method="post">
							<input type="submit" id="SignOff" name="signOff" value="Salir" style="background-color:#001841;overflow:hidden;line-height: 50px; color:#fff;"/>
						</form>
            
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <!-- Header End -->
    <div class="clearfix"></div>
    <!--======= Breadcrumb Inner Page =======-->
    <section class="iq-bg iq-bg-fixed iq-over-black-80 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url('images/bg/bg-2.jpg'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading-title">
                        <h3 class="title text-uppercase iq-font-white iq-tw-6">Recursos Quantum</h3>
                    </div>
                    <p>Bienvenido a la seccion de recursos , en esta seccion podra encontrar informacion util </p>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Recursos</li>
            </ol>
        </nav>
    </section>
    <!--======= Breadcrumb Inner Page =======-->
    <!-- Main Content -->
    <div class="main-content">
        <!-- About us -->
         <section class="overview-block-ptb pading=45px">
          <div class="container">
              <div class="row">
                    <div class="col-lg-6 col-md-3 offset=-1 align-self-center text-center" >
                            <div class="iq-features1">
                            <div class="iq-bg" style="background-image: url('images/pdf.jpg');"></div>
                            <div class="iq-blog">
                                <!--<div class="step">1</div>
                                <div class="icon"><i aria-hidden="true" class="ion-ios-color-wand-outline"></i></div>-->
                                <h5 class="iq-tw-5 iq-mt-20 text-center"><a id="planBeneficio" href="#">Plan de Beneficios (PDF)</a> </h5>
                                
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6 col-md-3 offset=-1 align-self-center text-center" >
                            <div class="iq-features1">
                            <div class="iq-bg" style="background-image: url('images/ppt.jpg');"></div>
                            <div class="iq-blog">
                                <!--<div class="step">1</div>
                                <div class="icon"><i aria-hidden="true" class="ion-ios-color-wand-outline"></i></div>-->
                                <h5 class="iq-tw-5 iq-mt-20 text-center"> <a id="diapositivas" href="#">Plan de Beneficios (PPT)</a></h5>
                               
                            </div>
                        </div>
                    </div>
                
                      
                </div>
            </div>    
            </section>
     
        <section class="overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-4 offset=-1 align-self-center text-center">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/videoPrincipal.jpg" class="img-fluid"> </div>
                            <div class="video play"><a  id ="video1" name="video1" class="popup-youtube" href="https://www.youtube.com/watch?v=Op7Mx7ihyyo&t=74s"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5">Bienvenido a la seccion de recursos </h5> </a> </div>
                            <div class="news-content">
                                <p>.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video2" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"</h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video3" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"></h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video4" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"></h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video5" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"></h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video6" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"></h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 iq-mtb-15">
                        <div class="popup-gallery play-video">
                            <div class="video-img"> <img alt="#" src="images/recursos/video.jpg" class="img-fluid"> </div>
                            <div class="video play"><a id="video7" class="popup-youtube" href="http://www.youtube.com/watch?v=rAe_Ln88-6Y"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a></div>
                        </div>
                        <div class="iq-news-detai iq-pt-15">
                            <div class="news-title"> <a href="#"><h5 class="iq-tw-5"></h5> </a> </div>
                            <div class="news-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us -->
    </div>
    <!-- Main Content End -->
    <!--=================================
Footer -->
    <?php
        include('footer.php');  
    ?>
    <!--=================================
Footer -->
    <!--=================================
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
    <!-- Custom JavaScript -->
    <script src="js/custom.js "></script>
    <script src="js/controlador_enlace_video.js"></script>
    <script src="js/controlador_editable_recursos.js"></script>
</body>

</html>