// JavaScript Document
$(document).ready(function(){
    
    function asyncQuery(file,accion)
    {
        
       //console.log(file);
        let res = $.post(file,accion).done(function(){
           //console.log(JSON.parse(msg));
            //res = JSON.parse(msg);
        });
        return res;
    }
    
    $("button[name^='mod']").click(function(){
        //console.log(this);
        let $button = $(this);
        let id = $button.attr('name');
        let mod = "cons";
        id = id.slice(3,20);
        
        let res = asyncQuery('../control/usuarioControl.php',{mod:mod,id:id});
        res.done(function(msg){
            msg = JSON.parse(msg);
           // console.log($('#idusuario'));
            $("#idusuario").val(msg.idUsuario);
            $("#nombre").val(msg.nombre);
            $("#correo").val(msg.correo);
            $("#pass").val(msg.password);
            $("#rol").val(msg.idRol);
            $("#estado").val(msg.idEstado);
            $("#modificar").val("mod");
            $("#modificar").attr("disabled",true);
        });
        
    });
    $("button[name^='del']").click(function(){
        let option=confirm("Esta seguro que quiere eliminar el usuario: "+$(this).attr('nom'));
        console.log($(this));
        if(option)
            {
                
                let $button = $(this);
                let id = $button.attr('name');
                let mod = "eli";
                id = id.slice(3,20);
                let res = asyncQuery('../control/usuarioControl.php',{mod:mod,id:id});
                res.done(function(msg){
                    if(msg=='')
                        {
                            location.reload(); 
                        }
                    else
                        {
                            alert(msg);
                        }
                });
            }
    });
});