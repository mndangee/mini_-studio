$(".link_leave").on("click",function(){
    $("#layerLeave").addClass("action");
    return false;
});
$(".link_close").on("click",function(){
    $("#layerLeave").removeClass("action");
    return false;
});