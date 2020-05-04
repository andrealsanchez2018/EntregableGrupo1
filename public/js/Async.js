// JavaScript Document
$(document).ready(function(){
   
    function asyncLoad(file,accion)
    {
       
        $.post(file,accion).done(function(msg){
           $('#result').html(msg);
        });
    }
    
    
    $('#registro').submit(function(event){
        event.preventDefault();
        let id = $('#idUsuario').val();
        let nombre = $('#nombre').val();
        let correo = $('#correo').val();
        let pass = $('#pass').val();
        let rol = $('#rol').val();
        let estado = $('#estado').val();
        
        asyncLoad('../control/usuarioControl.php',{idUsuario:id,nombre:nombre,correo:correo,pass:pass,rol:rol,estado:estado})
        
        
    });
    
    asyncLoad('../control/usuarioControl.php',{mod:'leer'});
});