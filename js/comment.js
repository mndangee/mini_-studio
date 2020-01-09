$(document).ready(function(){
    $(document).on("click","button[name='reply_reply']",function(){
        
        var comment_id = $(this).attr("reply_id");
        var post_id = $(this).attr("reply_post");

        var reply_save = document.getElementById("comment_reply");

        var last_check = false;
        
        var reply = 
        '<div id="T_comment" class="wrap_comment_write">'+
        '   <span class="ico_arrow text_hide">화살표</span>'+
        '   <form action="../php/t_comment.php?comment_id='+
            comment_id+
            '&post_id='+
            post_id+
            '" class="comment_write" method="POST">'+
        '       <fieldset>'+
        '           <div class="border_bottom c_textarea">'+
        '               <textarea id="comment" class="tf_area" name="comment" maxlength="1000" placeholder="답글을 달아주세요."></textarea>'+
        '               <div class="write_append">'+
        '                   <div class="wrap_btn">'+
        '                       <button class="btn_default" type="submit" name="reply_reply_save">확인</button>'+
        '                       <button class="btn_default tcommnet_cancle" type="button" >취소</button>'+
        '                   </div>'+
        '               </div>'+
        '           </div>'+
        '           </fieldset>'+
        '       </form>'+
        '   </tr>'+
        '</div>';

        var prevTr = $(this).parent().parent().parent().parent().next();


        if(prevTr.attr("reply_type") == undefined){
            prevTr = $(this).parent().parent().parent().parent();
        }
        else{            
            if(prevTr.attr("reply_type") == undefined) {
                last_check = true;
            }            
        }
        if(!last_check){   
            prevTr.after(reply);
        }
         
    });
    
    $(document).on("click",".tcommnet_cancle",function(){
        $("#T_comment").remove();
    });

});