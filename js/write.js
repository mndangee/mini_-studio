
$(".be_icon_font").on("click",function(){
    $(".sidebar_popup_line").addClass("line_open");
    return false;
});
$(".overlay").on("click",function(){
    $(".sidebar_popup_line").removeClass("line_open");
    return false;
});

$(document).ready(function(){
    var text = document.getElementById("div_content");

    $(".noto_san").on("click",function(){
        text.style.fontFamily = "Noto Sans KR";
    });
    $(".noto_serif").on("click",function(){
        text.style.fontFamily = "Noto Serif KR";``
    });
    $(".lato").on("click",function(){
        text.style.fontFamily = "Lato";
    });
});

$(document).ready(function() {
    $('.textarea_con').on( 'keyup', 'textarea', function (e){
    $(this).css('height', 'auto' );
    $(this).height( this.scrollHeight );
    });
    $('.textarea_con').find( 'textarea' ).keyup();
});

document.execCommand('styleWithCSS', false, true);
document.execCommand('insertBrOnReturn', false, true);
$(document).ready(function() {
  $("#div_content").focus();
  $('button').click(function(){
    document.execCommand($(this).attr('id'), false, true);
  }); 
  $('select').change(function(){
    document.execCommand($(this).attr('id'), false, $(this).val());
  });
});

$("div.align_btn").click(function(){

    var align_left = document.getElementById("justifyLeft");
    var align_center = document.getElementById("justifyCenter");
    var align_left_ico = document.getElementById("be_icon_left");
    var align_center_ico = document.getElementById("be_icon_center");
    
    if (align_center.style.display == "none") {
        align_center.style.display = "block";
        align_center_ico.style.backgroundPosition = "1px -376px";
        align_left.style.display = "none";
    } 
    
    else {
        align_left.style.display = "block";
        align_center.style.display = "none";
        align_left_ico.style.backgroundPosition = "1px -334px";
    }
    
});
