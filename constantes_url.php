<?php
 class constantes_url{
     //para el administrador
        //constantes para control_session.php
            //despues del primer else si no se tiene acceso 
            const  acceso_denegado ="Location:http://localhost/Repositorio/Quantum/login.php";
            //si se ha excedido del tiempo de espera
            const tiempo_expirado = "Location:http://localhost/Repositorio/Quantum/login.php";
            //si se quiere terminar la session
            const finalizar_session = "Location:http://localhost/Repositorio/Quantum/login.php";
            //acceso a la pagina del administrador controlador_inicio_session.php
            const acceso ='Location: http://localhost/Repositorio/Quantum/administrador.php';
            //si no se puede 
            const denegado ='Location: http://localhost/Repositorio/Quantum/login.php';
     /*
            
             const  acceso_denegado ="Location:http://localhost/quantum/login.php";
            const tiempo_expirado = "Location:http://localhost/quantum/login.php";
            const finalizar_session = "Location:http://localhost/quantum/login.php";
            const acceso='Location: http://localhost/quantum/administrador.php';
            const denegado = 'Location: http://localhost/quantum/login.php'
     */
     
     //Para el usuario que ingresara con un codigo de acceso generado por el administrador
        //constantes para control_session_token.php
        const acceso_denegado_recursos ="Location:http://localhost/Repositorio/Quantum/login-recursos.php";
        //si se excede el tiempo
       const tiempo_excedido_recursos = "Location: http://localhost/Repositorio/Quantum/login-recursos.php";
        //si se finalizar la sesion 
        const finalizar_session_recursos ="Location: http://localhost/Repositorio/Quantum/login-recursos.php";
      // direcciones para acceder a la pagina de recursos.php estos se encuentran en controlador_session_recursos.php
       const permisos_recursos ='Location: http://localhost/Repositorio/Quantum/recursos.php';
       const denegado_recursos ='Location: http://localhost/Repositorio/Quantum/login-recursos.php';
        /*
        const acceso_denegado_token ="Location:http://localhost/Repositorio/Quantum/login-recursos.php";
        //si se excede el tiempo
       const tiempo_excedido = "Location: http://localhost/Repositorio/Quantum/login-recursos.php";
        //si se finalizar la sesion 
        const finalizar_session_token ="Location: http://localhost/Repositorio/Quantum/login-recursos.php";
      // direcciones para acceder a la pagina de recursos.php estos se encuentran en controlador_session_recursos.php
       const acceso_recursos = 'Location: http://localhost/quantum/recursos.php';
        const denegado_recursos='Location: http://localhost/quantum/login-recursos.php';
           
        */
    }
?>