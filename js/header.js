$(".btn").on("click",function(){
    $("#wrapSideMenu").addClass("open");
    return false;
});
$("body").not("#wrapSideMenu").on("click",function(){
    $("#wrapSideMenu").removeClass("open");
});
$(".input_login").on("click",function(){
    $("#wrapSideMenu").removeClass("open");
    return false;
});
$(".overlay").on("click",function(){
    $("#wrapSideMenu").removeClass("open");
    return false;
});
