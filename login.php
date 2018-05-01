<?php?>
<!doctype html>
<html lang="en">

<head>
    <title>Quantum Club</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;Ubuntu:400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <!-- Ionicons CSS -->
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revslider/css/settings.css">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">

</head>

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
     
  
    <section class="overview-block-ptb iq-feature-aria">
        <div class="container" style="height:500px;">
                 <div class="box">
                        <h2>LOGIN</h2>
                     <form>
                         <div class="inputBox">
                             <input type="text" name="user" required="">
                            <label>Username</label>
                         </div>
                        <div class="inputBox">
                            <input type="password" name="pass" required="">
                            <label>Password</label>
                            </div>
                         <input type="submit" name="" value="Iniciar Sesion">
                     </form>
            </div>
        </div>
        </section>
    
        
       
  
    
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
    <style>
       /* body{
         margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
        }*/
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width:  400px;
            padding: 40px;
            background:  rgba(0,0,0,.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgb(0,0,0,5);
            border-radius: 10px;
        }
        .box h2{
            margin:  0 0 30px;
            padding: 0;
            color:#fff;
            text-align: center;
        }
        .box .inputBox{
            position: relative;
        }
        .box .inputBox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color:#fff;
            letter-spacing:1px; 
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .box .inputBox label{
            position:  absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
            
        }
        .box .inputBox input:focus ~label,
        .box .inputBox input:valid ~label{
            top: -18px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }
        .box input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color:#fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</body>

</html>