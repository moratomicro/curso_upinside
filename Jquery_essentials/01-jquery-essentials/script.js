$(function(){
    $(".jquery_essentials").html("jQuery Essentials!");
    
    console.group("Mensagens Gerais");
    console.log("jQuery Essentials!");
    console.info("O jQuery foi carregado com sucesso!");
    console.warn("Um alerta!");
    console.error("Um erro!");
    console.groupEnd();
    
    var cadastro = true;
    
    console.group("Cadastro de usuários");
    console.info("Cadastro iniciado!");
    if(cadastro === true){
        console.log("Cadastro Realizado");
    }else {
        console.warn("Erro ao cadastrar");
    }
    console.groupEnd();
    
    $(".btnativo").on("click", function(e){
        var element = $(this);
        element.text("OK").css("color", "green");
        setTimeout(function(){
            element.fadeOut();
        }, 5000);
    });
});
