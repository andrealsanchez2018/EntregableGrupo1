// JavaScript Document
$(document).ready(function(){
    
    function asyncQuery(file,accion)
    {
       
        $.post(file,accion).done(function(msg){
           return msg;
        });
    }
    
    $("button[name^='mod']").click(function(){
        let button = $(this);
        let id = $button.attr('name');
        
    });
});