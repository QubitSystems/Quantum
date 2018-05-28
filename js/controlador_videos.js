jQuery(function($){
   $.ajax({
       type:'POST',
       url :'controlador_video.php',
       
   })
    .done(function(listas_desp){
       $('#selectVideo').html(listas_desp);
       
   })
    .fail(function(){
       alert('Error al cargar el archivo');
   })
      $('#selectVideo').on('change',function(){
        var id=document.getElementById("selectVideo").value;
        console.log(id);
    
        $.ajax({
            url:'control_video.php',
            type:'POST',
            data:{'id': id },
            success:function(response){
                servicio = response.split('|');
                $('#url').val(servicio[0]);
            }
        })
    })
 	
})