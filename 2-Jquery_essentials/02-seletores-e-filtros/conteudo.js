$(function(){
    $("p:parent").css("background", "red");
    
    $("p:empty").html("<b>Esse esta vazio!</b>");
    
    $("p:contains('jQuery')").css("color", "#fff");
    
    $("p:has('b')").text("É este aqui");
});
