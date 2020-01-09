<?php 
    session_start();
    include('condb.php');

    $userid = $_SESSION['userid'];
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
        $w_comment = "insert into Comment (comment_id, post_id, userid, comment, date)";
        $w_comment = $w_comment. "values('null', '$post_id', '$userid', '$comment', '$date')";

        if($connect->query($w_comment)) {
?>      
        <script>
            location.replace("../html/view.html?post_id=<?php echo $post_id ?>");
        </script>
<?php   
        }else{
?>              
        <script>                 
            alert("댓글을 달지 못했습니다.");
            history.back();
        </script>
<?php   
        }
    }  
    mysqli_close($connect);
?>


