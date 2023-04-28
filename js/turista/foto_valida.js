/* FUNCION EN JAVASCRIPT PERMITE VALIDAR EL INPUT FILE , CONTROLAMOS SUBIDAS UNICAMENTE IMGANES CON ESTAS REFERENCIAS */
function Exten(){
    var foto =document.getElementById('afoto')
    var ruta =foto.value
    var extenciones= /(.jpg|.png|.jpeg|.gif)$/i
  
    if(!extenciones.exec(ruta)){
      swal( 'Archivo desconocido','Debes subir imagenes tipo png,jpg  o jpeg','error');
      foto.value=''
        return false
    }
    
    
  }