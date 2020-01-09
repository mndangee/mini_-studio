<?php 
    session_start();

    include('condb.php');

    $userid = $_SESSION['userid'];
    $comment_id = $_REQUEST['comment_id'];
    $post_id = $_REQUEST['post_id'];
    $comment = $_REQUEST['comment'];
    $date = date('Y/m/d');

    if($comment == "") {
?>
        <script>
            alert('내용을 입력해 주세요.');
            history.back();
        </script>
<?php   
    }
    else {
        $t_comment = "insert into TComment (t_comment_id, comment_id, post_id, userid, comment, date)";
        $t_comment = $t_comment. "values('null', '$comment_id', '$post_id', '$userid', '$comment', '$date')";

        if($connect->query($t_comment)) {
?>      
        <script>
            history.back();
        </script>
<?php   
        }else{
?>              
        <script>                 
            alert("답글을 달지 못했습니다.");
            history.back();
        </script>
<?php   
        }
    }  
    mysqli_close($connect);
?>


