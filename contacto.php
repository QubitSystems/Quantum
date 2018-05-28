<!doctype html>
<html lang="en">

<?php include("head.php")?>


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
    <!--======= Breadcrumb Inner Page =======-->
    <section class="iq-bg iq-bg-fixed iq-over-black-80 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url('images/contacto.jpg'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading-title">
                        <h3 class="title text-uppercase iq-font-white iq-tw-6">Contacto</h3>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
        </nav>
    </section>
    <!--======= Breadcrumb Inner Page =======-->
    <div class="main-content">
        <!-- Contact Us -->
        <section class="contact-2">
            <div class="container">
                <div class="row iq-ptb-60">
                    <div class="col-lg-5">
                        <h3 class="iq-mtb-30">Informacion de Contacto</h3>
                        <div class="contact-box iq-mb-30">
                            <div>
                                <i aria-hidden="true" class="ion-ios-location-outline iq-icon"></i><span class="iq-title text-uppercase iq-ml-15 iq-tw-6 iq-font-yellow">Dirección</span>
                            </div>
                            <div id="direccion"> </div>
                            </div>
                   
                        <div class="contact-box iq-mb-30">
                            <div>
                                <i aria-hidden="true" class="ion-ios-telephone-outline iq-icon"></i><span class="iq-title text-uppercase iq-ml-15 iq-tw-6 iq-font-yellow">Telefono</span>
                            </div>
                            <div id="telefono"></div>
                            
                        </div>
                        <div class="contact-box iq-mb-30">
                            <div>
                                <i aria-hidden="true" class="ion-ios-email-outline iq-icon"></i><span class="iq-title text-uppercase iq-ml-15 iq-tw-6 iq-font-yellow">Correo</span>
                            </div>
                            <div id="correo"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="iq-mtb-30">Formulario de envio</h3>
                        <div id="formmessage">Success/Error Message Goes Here</div>
                        <form class="form-horizontal" id="contactform" method="post" action="../php/contact-form.php">
                            <div class="contact-form">
                                <div class="section-field iq-mb-30">
                                    <input id="name" type="text" placeholder="Nombre*" name="name"  >
                                </div>
                                <div class="section-field iq-mb-30">
                                    <input id="email" type="text" placeholder="Email*" name="email">
                                </div>
                                <div class="section-field iq-mb-30">
                                    <input id="phone" type="text" placeholder="Telefono*" pattern="[0-9]{9}"name="phone">
                                </div>
                                 <div class="section-field iq-mb-30">
                                    <input id="referencia" type="text" placeholder="Quien lo refirio o como llego a nosotros*" name="referencia">
                                </div>
                                <div class="section-field iq-mb-30">
                                    <textarea class="input-message" placeholder="Interes*" name="message"></textarea>
                                    <input type="hidden" name="action" value="sendEmail" />
                                    <button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-40">Enviar </button>
                                </div>
                            </div>
                        </form>
                        <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.gif" alt=""></div>
                    </div>
                </div>
            </div>
            <div >
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        <div class="iq-map" id="mapa1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.3799193052223!2d-76.97528819934018!3d-12.058219762909472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c667d1009c49%3A0xfd3c5cc6c96caaa3!2sCentro+Empresarial+Cunsac+-+Santa+Anita!5e1!3m2!1ses!2spe!4v1526582527910" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us -->
    </div>
    <!-- Main Content End -->
        <div class="clearfix"></div>
    <!--=================================
Footer -->
    <?php
    include('footer.php');
    ?>
    <!--=================================
Footer -->

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
    <script src="js/controlador_editable_contacto.js"></script>
    <script src="js/controlador_seccion_contactos.js"></script>
    
</body>

</html>