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
                $('#condiciones').val(servicio[0]);
                $('#titulo').val(servicio[1]);
                $('#nomb_servicio').val(servicio[2]);
                $('#desc_servicio').val(servicio[3]);
                $('#caracteristica1').val(servicio[4]);
                $('#caracteristica2').val(servicio[5]);
                $('#caracteristica3').val(servicio[6]);
                $('#imagen1').val(servicio[7]);
                $('#imagen2').val(servicio[8]);   
            }
        })
    })
 
})


