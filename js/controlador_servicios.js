jQuery(function($){
   $.ajax({
       type:'POST',
       url :'controlador_servicio.php',
       
   })
    .done(function(listas_desp){
       $('#selectServicio').html(listas_desp);
   })
    .fail(function(){
       alert('Error al cargar el archivo');
   })
    
    $('#selectServicio').on('change',function(){
        
       
        var id=document.getElementById("selectServicio").value;
        console.log(id);
    
        $.ajax({
            url:'control_servicio.php',
            type:'POST',
            data:{'id': id },
            success:function(response){
                servicio = response.split('#');
                $('#titulo').val(servicio[0]);
                $('#nomb_servicio').val(servicio[1]);
                $('#desc_servicio').val(servicio[2]);
                $('#caracteristica1').val(servicio[3]);
                $('#caracteristica2').val(servicio[4]);
                $('#caracteristica3').val(servicio[5]);
                $('#imagen1').val(servicio[6]);
                $('#imagen2').val(servicio[7]);   
            }
        })
    })
 
})


