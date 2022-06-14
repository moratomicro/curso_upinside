$(function(){
    $("article p").css("color", "red");
    
    $("body *").css({
        display: "block",
        "margin-botton": "10px"
    });
    
    $("article > *").css("color", "blue");
    
    $("div + *").css("background", "yellow");
    
    $("div ~ p").text("Irmão");
});
