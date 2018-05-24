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

 $('#selectEvento').on('change',function(){
        var id=document.getElementById("selectEvento").value;
        console.log(id);
        $.ajax({
            url:'control_evento.php',
            type:'POST',
            data:{'id': id },
            success:function(response){
                
                producto = response.split('#');
                $('#fecha').val(producto[0]);
                $('#nombre').val(producto[1]);
                $('#speaker').val(producto[2]);
                $('#hora').val(producto[3]);
                $('#lugar').val(producto[4]);
                $('#descripcion').val(producto[5]);
                $('#imagen').val(producto[6]);
                
            }
        })
    })
    
 	
})