 function cambiarFile(){
   const input = document.getElementById('img_evento');
     var dato = input.files[0];
    if(input.files && input.files[0])
        console.log("Archivo Seleccionado : ", dato);
     
    }   
     console.log("Sin Archivo Seleccionado " + document.getElementById('img_evento').files[0]);
 