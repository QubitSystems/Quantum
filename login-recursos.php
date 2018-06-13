<?php
    include('control_session_token.php');
    break_Session_Invalid();
    is_Invalid();
?>
<!doctype html>
<html lang="en">

<?php
    include('head.php');
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
         <div class="contenedor">
                 <div class="box">
                        <h2>LOGIN RECURSOS</h2>
                     <form action="controlador_session_recursos.php" method="post">
                    
                        <div class="inputBox">
                            <input type="password" id="token" name="token"  required="">
                            <label>Password</label>
                            </div>
                         <center><input class="btn" type="submit" name="send-message" value="Iniciar Session"/></center>
                        
                     </form>
            </div>
        </div>
        
        
    
        
       
  
    
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

    <style>
       
         .contenedor{
              height: 90vh;
              min-height: 105px;
              width: 400px;
              margin-top: auto;
              position: relative;
              width: 100%;
            }
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
            color: #f9b707;
            font-size: 12px;
        }
        .box input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color:#fff;
            align-content: center;
            background: #f9b707;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
         
         @media (max-width:768px){
            .contenedor{
                width: 75%;
                
            }
            .box{
                width: 100%;
            }
        }
        
        @media (max-width:480px){
            .contenedor{
                width: 100%;
                
            }
            .box{
                width: 100%;
            }
        }
    </style>
</body>

</html>