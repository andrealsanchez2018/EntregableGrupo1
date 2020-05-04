// JavaScript Document
$(document).ready(function(){
   
    function asyncLoad(file,accion)
    {
       
        $.post(file,accion).done(function(msg){
           $('#result').html(msg);
        });
    }
    
    function asyncQuery(file,accion)
    {
        
       //console.log(file);
        let res = $.post(file,accion).done(function(){
           //console.log(JSON.parse(msg));
            //res = JSON.parse(msg);
            
        
        });
        return res;
    }
    
    $('#buscar').keyup(function(){
        let find= $(this).val();
        asyncLoad('../control/usuarioControl.php',{mod:'enc',buscar:find});
    });
    
    $('#Registro').submit(function(event){
        event.preventDefault();
        let res=null;
        let id = $('#idusuario').val();
        let nombre = $('#nombre').val();
        let correo = $('#correo').val();
        let pass = $('#pass').val();
        let rol = $('#rol').val();
        let estado = $('#estado').val();
        let mod = $('#modificar').val();
        //console.log(mod);
        if(mod == 'ins')
        {
          res = asyncQuery('../control/usuarioControl.php',{nombre:nombre,correo:correo,pass:pass,rol:rol,estado:estado,mod:mod})       
        }
        else if(mod=='mod')
        {
         res = asyncQuery('../control/usuarioControl.php',{idusuario:id,nombre:nombre,correo:correo,pass:pass,rol:rol,estado:estado,mod:mod})
        }
        
        res.done(function(msg){
            if(msg=='')
                {
                location.reload();
                }else{
                    alert(msg);
                }
        });
    });
    
    $('#cancel').click(function(event){
        event.preventDefault();
        $('#Registro').trigger('reset');
        $("#modificar").attr("disabled",false);
    });
    
    asyncLoad('../control/usuarioControl.php',{mod:'leer'});
});