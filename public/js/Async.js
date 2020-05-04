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
        let nombre = $('#idUsuario').val();
        let correo = $('#correo').val();
        let pass = $('#pass').val();
        let rol = $('#rol').val();
        let estado = $('#estado').val();
        
        asyncLoad('../control/usuarioControl.php',{})
        
        
    });
    
    asyncLoad('../control/usuarioControl.php',{mod:'leer'});
});