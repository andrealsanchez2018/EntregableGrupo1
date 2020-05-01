// JavaScript Document
$(document).ready(function(){
   
    function asyncLoad(accion)
    {
       
        $.post('../control/usuarioControl.php',{mod:accion}).done(function(msg){
           $('#result').html(msg);
        });
    }
    
    asyncLoad('leer');
});