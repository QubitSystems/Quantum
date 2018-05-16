jQuery(function($){
   $.ajax({
       type:'POST',
       url :'controlador_evento.php',
       
   })
    .done(function(listas_desp){
       $('#selectEvento').html(listas_desp);
   })
    .fail(function(){
       alert('Error al cargar el archivo');
   })
    
})
/*jQuery(function($){
    $.ajax{
        url:'controlador_evento.php';
        data: { };
        type:'Post';
        
        success:function(response){
            console.log(response);
            var fila = response.split('|');
            
            var col_fila1 = fila[0].split('#');
            $('fecha1').text(col_fila1[0]);
            $('nombre1').text(col_fila1[1]);
            $('speaker1').text(col_fila1[2]);
            $('hora1').text(col_fila1[3]);
            $('lugar1').text(col_fila1[4]);
            $('descripcion1').text(col_fila1[5]);
            
             var col_fila2 = fila[1].split('#');
            $('fecha2').text(col_fila2[0]);
            $('nombre2').text(col_fila2[1]);
            $('speaker2').text(col_fila2[2]);
            $('hora2').text(col_fila2[3]);
            $('lugar2').text(col_fila2[4]);
            $('descripcion2').text(col_fila2[5]);
            
             var col_fila3 = fila[2].split('#');
            $('fecha3').text(col_fila3[0]);
            $('nombre3').text(col_fila3[1]);
            $('speaker3').text(col_fila3[2]);
            $('hora3').text(col_fila3[3]);
            $('lugar3').text(col_fila3[4]);
            $('descripcion3').text(col_fila3[5]);
            
             var col_fila4 = fila[3].split('#');
            $('fecha4').text(col_fila4[0]);
            $('nombre4').text(col_fila4[1]);
            $('speaker4').text(col_fila4[2]);
            $('hora4').text(col_fila4[3]);
            $('lugar4').text(col_fila4[4]);
            $('descripcion4').text(col_fila4[5]);
            
             var col_fila5 = fila[4].split('#');
            $('fecha5').text(col_fila5[0]);
            $('nombre5').text(col_fila5[1]);
            $('speaker5').text(col_fila5[2]);
            $('hora5').text(col_fila5[3]);
            $('lugar5').text(col_fila5[4]);
            $('descripcion5').text(col_fila5[5]);
        }
    }
});*/